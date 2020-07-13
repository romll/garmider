<?php

namespace frontend\widgets\menuCategory;

use Yii;
use yii\base\Widget;
use frontend\models\BlogCategoryFront;

class MenuCategoryWidget extends Widget
{

    public $tpl;
    public $modelCategory;
    public $tree;
    public $menuHtml;
    
    public function init()
    {
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'menuCategory';
        }
        $this->tpl .= '.php';
        
    }
    
    public function run()
    {
        $this->modelCategory = BlogCategoryFront::getCategoryMenu();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
        if($this->tpl == 'menuCategory.php'){
            Yii::$app->cache->set('menuCategory', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }

    protected function getTree(){
        $tree = [];
        foreach ($this->modelCategory as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->modelCategory[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = ''){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab){
        ob_start();
        include __DIR__ . '/views/' . $this->tpl;
        return ob_get_clean();
    }

}