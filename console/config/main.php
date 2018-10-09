<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		'stringHelper' => [
		    'class' => 'common\components\StringHelper',
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
];
