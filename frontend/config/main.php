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
	'language' => 'ru',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
	        'enableCsrfValidation' => false,
        ],
        'user' => [
            'identityClass' => 'frontend\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            	'news' => 'test/index',
            	'news/<id:\d+>' => 'test/view',
            ],
        ],
		'stringHelper' => [
		    'class' => 'frontend\components\StringHelper',
		],
		'mailer' => [
		    'class' => 'yii\swiftmailer\Mailer',
		    'useFileTransport' => false,
		    'transport' => [
			    'class' => 'Swift_SmtpTransport',
			    'host' => 'smtp.gmail.com',
			    'username' => 'rikzgt@gmail.com',
			    'password' => 'rikz1993 ',
			    'port' => '587',
			    'encryption' => 'tls',
		    ],
		],
    ],
    'params' => $params,
	'aliases' => [
		'@files' => '/var/www/project/frontend/web/files',
		'@photos' => '@files/photos',
        '@images' => '@files/logo',
	]
];
