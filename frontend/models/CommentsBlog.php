<?php

namespace frontend\models;


use akiraz2\blog\models\BlogPost;
use yii2mod\comments\models\CommentModel;

class CommentsBlog extends CommentModel
{
    public $count;

    public function getCountComments() {
        return $this->find()
                    ->select(['entityId', 'COUNT(*) as count'])
                    ->groupBy('entityId')
                    ->asArray()
                    ->all();
    }

    public function getComments () {
        return $this->hasMany(BlogPost::className(), ['id' => 'entityId']);
    }

}