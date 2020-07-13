<?php

namespace frontend\models;

use akiraz2\blog\traits\IActiveStatus;
use Yii;
use yii\db\Expression;
use akiraz2\blog\models\BlogPost;
use hauntd\vote\models\VoteAggregate;

class BlogPostFront extends BlogPost
{
    public function getPostAll()
    {
        return $this->find()->joinWith('user')->joinWith('category')->joinWith('comments')->where(['blog_post.status' => IActiveStatus::STATUS_ACTIVE])->orderBy('created_at DESC')/*->all()*/;
    }

    public function getPost($id)
    {
        return $this->find()->joinWith('user')->joinWith('category')->where(['blog_post.id' => $id])->one();
    }

    public function  getPostCategory()
    {
        return $this->find()->joinWith('user')->joinWith('category')->where(['between', 'blog_post.created_at', 'NOW()', 'NOW() - INTERVAL 3 DAY'/*'NOW() = :current_timestamp', [':current_timestamp' => date('Y-m-d HH:mm')]*/])->andWhere(['blog_post.status' => IActiveStatus::STATUS_ACTIVE])->orderBy('created_at DESC')/*->all()*/;
    }

    public function getPostPopular()
    {
        return $this->find()->joinWith('user')->joinWith('category')->joinWith('voteAggregate')->where(['>=', 'rating', 0])->andWhere(['blog_post.status' => IActiveStatus::STATUS_ACTIVE])->orderBy('rating DESC');
    }

    public function getCountComments ()
    {
        //return $this->find()->joinWith('comments', false)->count('entityId');
    }

    public function getVoteAggregate()
    {
        return $this->hasOne(VoteAggregate::className(), ['target_id' => 'id']);
    }

    public function getComments()
    {
        return $this->hasMany(CommentsBlog::className(), ['entityId' => 'id']);
    }
}