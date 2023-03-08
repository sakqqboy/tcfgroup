<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/home/home.css',
        'css/home/services.css',
        'css/home/philosophy.css',
        'css/home/career.css',
        'css/home/people.css',
        'css/home/about1.css',
        'css/home/contact.css',
        'css/layout/layout.css',
        'css/layout/font.css',

    ];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset', '\rmrevin\yii\fontawesome\AssetBundle'
    ];
}
