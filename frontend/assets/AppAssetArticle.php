<?php

namespace frontend\assets;

use frontend\assets\AppAssetBlog;


class AppAssetArticle extends AppAssetBlog
{

    public $css = [
        'flexslider/flexslider.css',
    ];
    public $depends = [
        'frontend\assets\AppAssetBlog',
    ];

}