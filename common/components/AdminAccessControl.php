<?php
/**
 * Created by PhpStorm.
 * User: Bogdan
 * Date: 19.12.2018
 * Time: 11:09
 */

namespace common\components;

use yii\filters\AccessControl;


class AdminAccessControl
{

    public function init()
    {
        $this->rules[] = [
            'allow' => true,
            'roles' => ['@'],
            'matchCallback' => function () {
                return \Yii::$app->user->identity->getIsAdmin();
            }
        ];

        parent::init();
    }

}