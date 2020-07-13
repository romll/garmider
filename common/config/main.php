<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'uk-UK',
    'name' => 'Garmider',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'timeZone' => 'Europe/Kiev', //time zone affect the formatter datetime format
    'components' => [
        'i18n' => [
            'translations' => [
                'usuario*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'forceTranslation' => true,
                    'basePath' => '@common/language/usuario/messages',
                    'sourceLanguage' => 'uk-UA',
                    'fileMap' => [
                        'usuario' => 'usuario.php',
                    ],
                ],
                'yii2mod.comments*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/language/comments/messages',
                    'sourceLanguage' => 'uk-UA',
                    'fileMap' => [
                        'yii2mod.comments' => 'yii2mod.comments.php',
                    ],
                ]
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'formatter' => [ //for the showing of date datetime
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => '.',
            'thousandSeparator' => ' ',
            'currencyCode' => 'EUR',
        ],
        'authManager' => [
            'class' => 'Da\User\Component\AuthDbManagerComponent',
        ],
    ],
    'modules' => [
        'blog' => [
            'class' => akiraz2\blog\Module::class,
            //'adminAccessControl' => 'common\components\AdminAccessControl', // null - by default
            'urlManager' => 'urlManager',// 'urlManager' by default, or maybe you can use own component urlManagerFrontend
            'imgFilePath' => '@frontend/web/img/blog/',
            'imgFileUrl' => '/img/blog/',
            'userModel' => \Da\User\Model\User::class,
            'userPK' => 'id', //default primary key for {{%user}} table
            'userName' => 'username', //uses in view (may be field `username` or `email` or `login`)
        ],
        'user' => [
            'class' => 'Da\User\Module',
            'enableFlashMessages' => 0, //не показывать флеш сообщения
            /*'mailer' => [
                'sender'                => ['info@garmider.com' => 'Garmider'],
                'welcomeSubject'        => 'Реєстрація на garmider.com',
                'confirmationSubject'   => 'Підтвердження реєстрації',
                'reconfirmationSubject' => 'Зміна Email',
                'recoverySubject'       => 'Відновлення доступу',
            ],*/
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
        'comment' => [
            'class' => 'yii2mod\comments\Module',
        ],
    ],
];
