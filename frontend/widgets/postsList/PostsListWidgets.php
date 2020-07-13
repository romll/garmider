<?php

namespace frontend\widgets\postsList;


use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\helpers\ArrayHelper;
use Closure;

class PostsListWidgets extends Widget
{

    /**
     * @var string
     * містить id віджета
     */
    public $widgetId;

    /**
     * @var \yii\db\ActiveQuery
     * містить запит без методу all()
     */
    public $query;

    /**
     * @var array
     * містить кількість коментрів в метеріалах
     */
    public $arrCountComments;

    /**
     * @var string
     * містить текст, який буде виводить, якщо матеріали не вибрані з бази
     */
    public $emptyText;

    /**
     * @var array містить налаштування тегу обгортки тексту $emptyText
     */
    public $emptyTextOption = ['class' => 'empty'];

    /**
     * @var string містить шаблон по якому будуть вибудовуватись файли видів.
     * оскільки для види то ми маємо дві частини.
     * фігурні дужки потрібні для регулярних виразів та ідентифікації розділів
     */
    public $layout = "{header}\n{item}";

    /**
     * @var string містить вигляд заголовку
     */
    public $headerView = "_header";

    /**
     * @var string містить вигляд матеріалу
     */
    public $itemView = "_item";

    /**
     * @var array налаштування обгортки для файлу матеріалу
     */
    public $itemOption = ['class' => 'grid-item col-md-12'];

    /**
     * @var array масив параметрів, що передаються в вигляд
     */
    public $itemViewParams = ['created_day', 'created_month', 'url', 'urlAnchor', 'title', 'categoryTitle', 'username', 'brief', 'content', 'modelVote', 'countComments'];

    /**
     * @var string містить текст заголовку віджету
     */
    public $headerText;

    /**
     * $var string містить ім'я події перед тим як вивести окремий блок матеріалу
     */
    const EVENT_BEFORE_RENDER_ITEM = 'beforeRenderItem';

    /**
     * $var string містить ім'я події після того як вивести окремий блок матеріалу
     */
    const EVENT_AFTER_RENDER_ITEM = 'afterRenderItem';

    public $separator = "\n";

    public function init()
    {
        parent::init();

        if ($this->query === null) {
            throw new InvalidConfigException('The "query" property must be set.');
        }
        if ($this->emptyText === null) {
            $this->emptyText = 'Відсутні матеріали для відображення';
        }
        if (!($this->widgetId)) {
            $this->widgetId = $this->getId();
        }
    }

    public function run()
    {
        if ($this->query->count() > 0) {
            $content = preg_replace_callback('/{\\w+}/', function ($matches) {
                $content = $this->renderSection ($matches[0]);
                return $content === false ? $matches[0] : $content;
            }, $this->layout);
        } else {
            $content = $this->renderEmpty();
        }

        $row = Html::tag('div', $content, ['class' => 'grid-box row', 'id' => $this->widgetId]);
        echo Html::tag('div', $row, ['class' => 'grid-list one-row-list']);
    }

    public function renderHeader () {
        if (!$this->headerText) {
            $content = '';
        } elseif (is_string($this->headerText)) {
            $content = $this->render($this->headerView, ['headerText' => $this->headerText]);
        } else {
            $content = call_user_func($this->headerView, $this->query);
        }

        return $content;
    }

    public function filter ($function, array $comments) {
        $allComments = [];
        foreach ($comments as $comment) {
            if ($function($comment)) {
                $allComments[] = $comment;
            }
        }
        return $allComments;
    }

    public function countComments () {
        $comments = function ($id, $comment) {
            if ($id == $comment) {
                return $comment;
            }
        };print_r($comments);

        $countComment = $this->filter($comments, $this->arrCountComments);
        print_r($countComment);
    }

    public function renderItem ($model, $index) {
        $params = [];

        foreach ($this->itemViewParams as $param => $val) {
            if ($val instanceof Closure) {
                $params[$param] = call_user_func($val, $model);
            } else if (is_string($val)) {
                $params[$param] = $val;
            }
        }//print_r($this->arrCountComments);
        if ($this->itemOption instanceof Closure) {
            $options = call_user_func($this->itemOption, $model, $index);
        } else {
            $options = $this->itemOption;
        }

        $tag = ArrayHelper::remove($options, 'tag', 'div');
        $options['data-link'] = array_key_exists('url', $params) ? $params['url'] : Url::current();
        $content = $this->render($this->itemView, $params);

        return Html::tag($tag, $content, $options);
    }

    public function beforeRenderItem ($model, $index) {
        $event = new WidgetEvent();
        $event->model = $model;
        $event->indexElement = $index;
        $this->trigger(self::EVENT_BEFORE_RENDER_ITEM, $event);
        return $event->isValid;
    }

    public function afterRenderItem ($model, $index) {
        $event= new WidgetEvent();
        $event->result = null;
        $event->model = $model;
        $event->indexElement = $index;
        $this->trigger(self::EVENT_AFTER_RENDER_ITEM, $event);
        return $event->result;
    }

    public function renderItems () {
        $models = $this->query->all();

        $rows = [];

        $index = 0;

        foreach ($models as $model) {
            if (!$this->beforeRenderItem($model, $index)) {
                continue;
            }

            $rows[] = $this->renderItem($model, $index);

            if (($after = $this->afterRenderItem ($model, $index)) !== null) {
                $rows[] = $after;
            }

            $index += 1;
        }

        return implode($this->separator, $rows);
    }

    public function renderSection ($name){
        switch ($name) {
            case '{header}' :
                return $this->renderHeader();
            case '{item}' :
                return $this->renderItems();

            default :
                return false;
        }
    }

    public function renderEmpty () {
        if ($this->emptyText === null) {
            return '';
        }
        $options = $this->emptyTextOption;
        $tag = ArrayHelper::remove($options, 'tag', 'div');
        return Html::tag($tag, $this->emptyText, $options);
    }

}