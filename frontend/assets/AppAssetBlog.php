<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAssetBlog extends AssetBundle
{
    public $js = [
        'js/jquery.min.js',
        'js/script.js',
    ];
    public $css = [
        'css/bootstrap.css',
        'css/style.css',
        'css/content-box.css',
        'css/animations.css',
        'css/contact-form.css',
        'css/magnific-popup.css',
        'css/components.css',
        'css/font-awesome/css/font-awesome.css',
        'skin.css',
    ];
    public $depends = [
        'yii\web\YiiAsset', // зависимость для метода logout (использование метода post для формы)
        'yii\web\JqueryAsset', //прописываем зависимость для решения конфликта двух библиотек JQ
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}
