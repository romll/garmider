<?php

namespace frontend\assets;

use frontend\assets\AppAssetBlogFoter;
//use yii\web\JqueryAsset;


class AppAssetArticleFoter extends AppAssetBlogFoter
{

    public $js = [
        'js/jquery.tab-accordion.js',
        'js/bootstrap.popover.min.js',
        'flexslider/jquery.flexslider-min.js',
        //'js/no.conflict.js'
    ];
    public $depends = [
        'frontend\assets\AppAssetBlogFoter',
    ];

    /*public static function noConflict($view){
        list(,$path) = \Yii::$app->assetManager->publish(__DIR__."/");
        $view->registerJsFile($path.'/no.conflict.js', ['depends' => [JqueryAsset::className()]]);
    }*/

}