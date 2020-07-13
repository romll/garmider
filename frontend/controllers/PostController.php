<?php

namespace frontend\controllers;

use Yii;
use frontend\controllers\SiteController;
use frontend\models\BlogPostFront;


class PostController extends SiteController
{

    public function actionPost($id) {

        (int)$id = Yii::$app->request->get('id');
        $postOneModel = new BlogPostFront();
        $postOne = $postOneModel->getPost($id);
        return $this->render('post', compact('postOne'));

    }

}