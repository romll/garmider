<?php
/**
 * Created by PhpStorm.
 * User: Roma
 * Date: 26.11.2019
 * Time: 20:36
 */

namespace backend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class AppAssetFacebookPlugin extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v5.0&appId=296745754318879&autoLogAppEvents=1'
    ];

    public $jsOptions = [
        'position' => View::POS_BEGIN,
        'async' => 'async',
        'defer' => 'defer',
        'crossorigin' => 'anonymous',
        'referrerpolicy' => 'origin'
    ];

}