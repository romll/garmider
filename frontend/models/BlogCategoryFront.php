<?php

namespace frontend\models;


use akiraz2\blog\models\BlogCategory;

class BlogCategoryFront extends BlogCategory
{

    public static function getCategoryMenu () {
        return $categoryName = BlogCategory::find()->indexBy('id')->asArray()->all();
    }

}