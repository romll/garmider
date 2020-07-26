<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'uk-UK',
    'components' => [
        'i18n' => [
            'translations' => [
                'vote*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'forceTranslation' => true,
                    'basePath' => '@frontend/messages',
                    'sourceLanguage' => 'uk-UA',
                    'fileMap' => [
                        'vote' => 'vote.php',
                    ],
                ],
            ],
        ],
        'request' => [
            /*'enableCsrfValidation' => true,*/
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'post/<id:\d+>-<slug>' => 'post/post',
                'category/<id:\d+>-<slug>' => 'site/index',
                /*'/user/register' => '/site/signup',
                '/user/login' => '/site/login',*/
            ],

        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@Da/User/resources/views' => '@frontend/views/user'
                ]
            ]
        ],
    ],
    //'defaultRoute' => 'blog', //set blog as default route
    'modules' => [
        'blog' => [
            'class' => 'akiraz2\blog\Module',
            'controllerNamespace' => 'akiraz2\blog\controllers\frontend',
            'blogPostPageCount' => 6,
            'blogCommentPageCount' => 10, //20 by default
            'enableComments' => true, //false by default
            'schemaOrg' => [ // empty array [] by default!
                'publisher' => [
                    'logo' => '/img/logo.png',
                    'logoWidth' => 191,
                    'logoHeight' => 74,
                    'name' => 'My Company',
                    'phone' => '+1 800 488 80 85',
                    'address' => 'City, street, house'
                ]
            ]
        ],
        'user' => [
            'class' => Da\User\Module::class,
            'mailParams' => [
                'fromEmail'                => ['info@garmider.com' => 'Garmider'],
                'welcomeMailSubject'        => 'Реєстрація на garmider.com',
                'confirmationMailSubject'   => 'Підтвердження реєстрації',
                'reconfirmationMailSubject' => 'Зміна Email',
                'recoveryMailSubject'       => 'Відновлення доступу',
            ],
            /*'mailParams' => [
                'fromEmail' => function() {
                    return [Yii::$app->params['supportEmail'] => Yii::t('app', '{0} robot', Yii::$app->name)];
                }
            ],*/
            'classMap' => [
                'RegistrationForm' => 'frontend\form\RegistrationForm',
            ],
            'controllerMap' => [
                'admin' => [
                    'class' => Da\User\Controller\AdminController::class,
                    'as access' => [
                        'class' => yii\filters\AccessControl::class,
                        'rules' => [['allow' => false]],
                    ],
                ],
                'role' => [
                    'class' => Da\User\Controller\RoleController::class,
                    'as access' => [
                        'class' => yii\filters\AccessControl::class,
                        'rules' => [['allow' => false]],
                    ],
                ],
                'permission' => [
                    'class' => Da\User\Controller\PermissionController::class,
                    'as access' => [
                        'class' => yii\filters\AccessControl::class,
                        'rules' => [['allow' => false]],
                    ],
                ],
                'rule' => [
                    'class' => Da\User\Controller\RuleController::class,
                    'as access' => [
                        'class' => yii\filters\AccessControl::class,
                        'rules' => [['allow' => false]],
                    ],
                ],
                
                'registration' => [
                    'class' => 'Da\User\Controller\RegistrationController',
                    'on ' . \Da\User\Event\UserEvent::EVENT_AFTER_REGISTER => function ($e) {
                        $auth = Yii::$app->authManager;
                        $authorRole = $auth->getRole('user');
                        $user = Da\User\Model\User::findOne(['username' => $e->form->username]);
                        $auth->assign($authorRole, $user->getId());
                    }
                ],
            ],
        ],
        'vote' => [
            'class' => hauntd\vote\Module::class,
            'guestTimeLimit' => 3600,
            'entities' => [
                // Entity -> Settings
                'itemVote' => frontend\models\BlogPostFront::class, // your model
                /*'itemVoteGuests' => [
                    'modelName' => frontend\models\BlogPostFront::class, // your model
                    'allowGuests' => true,
                    'allowSelfVote' => false,
                    'entityAuthorAttribute' => 'user_id',
                ],*//*
                'itemLike' => [
                    'modelName' => app\models\Item::class, // your model
                    'type' => hauntd\vote\Module::TYPE_TOGGLE, // like/favorite button
                ],
                'itemFavorite' => [
                    'modelName' => app\models\Item::class, // your model
                    'type' => hauntd\vote\Module::TYPE_TOGGLE, // like/favorite button
                ],*/
            ],
        ],
        'social' => [
            // the module class
            'class' => 'kartik\social\Module',

            // the global settings for the facebook plugins widget
            'facebook' => [
                'appId' => '296745754318879',
                //'app_secret' => 'FACEBOOK_APP_SECRET',
            ],

            // the global settings for the twitter plugins widget
            'twitter' => [
                'screenName' => 'TWITTER_SCREEN_NAME'
            ],
        ],
    ],
    
    'params' => $params,
];
