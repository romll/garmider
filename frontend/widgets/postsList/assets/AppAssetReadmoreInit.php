<?php

namespace frontend\widgets\postsList\assets;


use yii\web\AssetBundle;

class AppAssetReadmoreInit extends AssetBundle
{

    public $sourcePath = '@frontend/widgets/postsList/assets';
    public $baseUrl = '@web';

    public $js = [
        'js/readmore-init.js'
    ];

}