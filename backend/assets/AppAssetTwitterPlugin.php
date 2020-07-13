<?php
/**
 * Created by PhpStorm.
 * User: Roma
 * Date: 28.01.2020
 * Time: 22:03
 */

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;


class AppAssetTwitterPlugin extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'https://platform.twitter.com/widgets.js'
    ];

    public  $jsOptions = [
        'position' => View::POS_BEGIN,
        'async' => 'async',
        'defer' => 'defer',
        'crossorigin' => 'anonymous',
        'referrerpolicy' => 'origin'
    ];

}