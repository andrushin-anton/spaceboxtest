<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'SpaceBoxTest',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1tlkEeBM65mQDDJlK_RBeTHRQMf57F6D',
        ],
				'urlManager' => [
						'enablePrettyUrl' => true,
						'showScriptName' => false,
						'rules' => [
								'/' => 'site/index',
								'/customer/<groupId:\d+>' => 'site/view',
								'/customer/<groupId:\d+>/<skillId:\d+>' => 'site/view',
								'/customer/<groupId:\d+>/<skillId:\d+>/<search:\w+>' => 'site/view',
								'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
								'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
						],
				],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
				'log' => [
						'targets' => [
								[
										'class' => 'yii\log\EmailTarget',
										'levels' => ['error', 'warning'],
										'message' => [
												'from' => ['log@spaceboxtest.ru'],
												'to' => ['andrushin.anton@gmail.com'],
												'subject' => 'SpaceboxTest errors and warnings',
										],
								],
						],
				],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
