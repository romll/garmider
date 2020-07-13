<?php

namespace frontend\widgets\postsList;


use yii\base\Event;

class WidgetEvent extends Event
{

    public $result;

    public $model;

    public $indexElement;

    public $isValid = true;

}