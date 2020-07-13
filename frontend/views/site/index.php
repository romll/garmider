<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use frontend\widgets\postsList\PostsListWidgets;
use backend\assets\AppAssetFacebookPlugin;
use backend\assets\AppAssetTwitterPlugin;

/* @var $this yii\web\View */

$this->title = Html::encode(Yii::$app->name);

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Garmider'
], 'description');

AppAssetFacebookPlugin::register($this);
AppAssetTwitterPlugin::register($this);

?>

<?= $this->render('headerNews.php');?>

<?= PostsListWidgets::widget([
    'query' => $posts,
    'arrCountComments' => $commentCount,
    'itemViewParams' => [
        'created_day' => function ($model) {
            return Yii::$app->formatter->asDate($model->created_at, 'php:d');
        },
        'created_month' => function ($model) {
            return Yii::$app->formatter->asDate($model->created_at, 'php:F');
        },
        'url' => function ($model) {
            return Url::to(['post/post', 'id' => $model->id, 'slug'=>$model->slug], true);
        },
        'urlAnchor' => function ($model) {
            return Url::to(['post/post', 'id' => $model->id, 'slug'=>$model->slug, '#' => 'comment-form']);
        },
        'title' => function ($model) {
            return $model->title;
        },
        'categoryTitle' => function ($model) {
            return $model->category->title;
        },
        'username' => function ($model) {
            return $model->user->username;
        },
        'brief' => function ($model) {
            return $model->brief;
        },
        'content' => function ($model) {
            return $model->content;
        },
        'modelVote' => function ($model) {
            return $model;
        },
    ]
]);?>
