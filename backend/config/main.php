<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language' => 'uk-UK',
    'bootstrap' => [
        'log',
        'admin',
    ],
    'name' => 'Адміністратор',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => $baseUrl ."/admin",
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
                /*'/user/login' => '/site/login',
                '/user/logout' => '/site/logout',*/
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue-light',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@akiraz2/yii2-blog/views/backend/blog-post' => '@app/views/blog/post'
                ],
            ],
        ],
    ],

    'modules' => [
        'blog' => [
            'class' => 'akiraz2\blog\Module',
            'controllerNamespace' => 'akiraz2\blog\controllers\backend',
            //'adminAccessControl' => 'common\components\AdminAccessControl', // null - by default
            'redactorModule' => 'redactor',
        ],
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => '@frontend/web/images/img_blog/',
            'uploadUrl' => $params['frontendHost'] . '/images/img_blog',
            'imageAllowExtensions' => ['jpg', 'png', 'gif', 'svg'],
            'widgetClientOptions' => [
                'lang' => 'ua',
                'replaceDivs' => false,
                'allowedTags' => ['p', 'h1', 'h2', 'div', 'b', 'i', 'u', 'strong', 'br', 'iframe', 'a', 'span', 'img', 'blockquote'],
                'plugins' => [
                    'video'
                ],
            ],
        ],
        'user' => [
            'class' => Da\User\Module::class,
            'enableRegistration' => false,
            'administrators' => ['duosadmin'],
        ],

        'admin' => [
            'class' => 'mdm\admin\Module',
            'controllerNamespace' => 'mdm\admin\controllers',
            // Отключаем шаблон модуля,
            // используем шаблон нашей админки.
            'layout' => 'left-menu', // it can be '@path/to/your/layout'.
            /*'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    //'userClassName' => 'app\models\User',
                    'idField' => 'user_id'
                ],
            ],
            'menus' => [
                'assignment' => [
                    'label' => 'Grand Access' // change label
                ],
                'route' => null, // disable menu route
            ],*/
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            //'user/*',
            'site/*',
            //'admin/*',
            //'debug/*',
        ]
    ],
    'params' => $params,
];
