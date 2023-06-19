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
        'member' => ['class' => 'backend\modules\member\member'],
        'masterdata' => [
            'class' => 'backend\modules\masterdata\masterdata',
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
                //content
                'content/default/view-content/<hash>' => 'content/default/view-content',
                'content/default/update-content/<hash>' => 'content/default/update-content',
                'content/default/content-detail/<hash>' => 'content/default/content-detail',
                'content/default/view-content-detail/<hash>' => 'content/default/view-content-detail',
                'content/default/create-content-detail/<hash>' => 'content/default/create-content-detail',
                'content/default/update-content-detail/<hash>' => 'content/default/update-content-detail',
                //member
                'member/default/view-member/<hash>' => 'member/default/view-member',
                'member/default/update-member/<hash>' => 'member/default/update-member',
                //branch
                'masterdata/branch/view-branch/<hash>' => 'masterdata/branch/view-branch',
                'masterdata/branch/update-branch/<hash>' => 'masterdata/branch/update-branch',
                //section
                'masterdata/section/view-section/<hash>' => 'masterdata/section/view-section',
                'masterdata/section/update-section/<hash>' => 'masterdata/section/update-section',
                //position
                'masterdata/position/view-position/<hash>' => 'masterdata/position/view-position',
                'masterdata/position/update-position/<hash>' => 'masterdata/position/update-position',
                //team
                'masterdata/team/view-team/<hash>' => 'masterdata/team/view-team',
                'masterdata/team/update-team/<hash>' => 'masterdata/team/update-team',
                //teamposition
                'masterdata/team-position/team-position/<hash>' => 'masterdata/team-position/team-position',
                'masterdata/team-position/view-team-position/<hash>' => 'masterdata/team-position/view-team-position',
                'masterdata/team-position/update-team-position/<hash>' => 'masterdata/team-position/update-team-position'
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
