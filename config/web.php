<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'PACMEC',
    // set target language to be Russian
    'language' => 'es-CO',
    // set source language to be English
    'sourceLanguage' => 'es-CO',
    'timeZone' => 'America/Bogota',
    'basePath' => dirname(__DIR__),
    'modules' => [
        'gridview' => ['class' => 'kartik\grid\Module'],
        // 'hello' => 'app\modules\hello\HelloModule',
        'admin' => 'app\modules\admin\InitModule',
        // 'fronted' => 'app\modules\fronted\InitModule',
        // 'sparking' => 'app\modules\sparking\InitModule',
        // 'parking' => 'app\modules\parking\InitModule',
    ],
    'bootstrap' => [
        'log',
        // 'hello',
        'admin',
        // 'fronted',
        // 'sparking',
        // 'parking',
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'assetManager' => [
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ZxXeVjhknjGWYmhcCAKjdalWeQrq3oSO',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // 'defaultRoles' => ['admin', 'cashier', 'author'],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
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
        'db' => $db,
        // 'defaultRoute' => 'fronted/default',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // '<action>' => 'site/<action>',
                // '/admin' => 'admin/default/index',
                // '/admin/<action>' => 'admin/default/<action>',
            ],
        ],
        'formatter' => [
          'timeZone' => 'UTC',
          'locale' => 'es-CO',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
