<?php

namespace frontend\form;

use Da\User\Form\RegistrationForm as BaseForm;

class RegistrationForm extends BaseForm {

    public $reCaptcha;

    public function rules() {
            return [
                [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator3::className(),
                    'threshold' => 0.5,
                    'action' => 'register',
                ],
            ];
        }

}