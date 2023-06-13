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
    'bootstrap' => ['log'],
    'modules' => [
        'kt-generator' => [
            'class' => 'backend\modules\KTGenerator\KTGenerator',
        ],
        'content' => [
            'class' => 'backend\modules\content\content',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
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
                'content/default/view-content/<hash>' => 'content/default/view-content',
                'content/default/update-content/<hash>' => 'content/default/update-content',
                'content/default/content-detail/<hash>' => 'content/default/content-detail',
                'content/default/view-content-detail/<hash>' => 'content/default/view-content-detail',
                'content/default/create-content-detail/<hash>' => 'content/default/create-content-detail',
                'content/default/update-content-detail/<hash>' => 'content/default/update-content-detail'
            ],
        ],
        'assetManager' => [
            'appendTimestamp' => true,
            'bundles' => [],
            //            'forceCopy' => TRUE
        ],
    ],
    'params' => $params,
];
