<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
				'css/bootstrap.min.css',
        'css/dashboard.css',
    ];
    public $js = [
				'js/jquery-2.1.1.min.js',
				'js/site.js',
    ];
    public $depends = [
    ];
}
