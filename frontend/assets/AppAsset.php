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
        'css/home/contact1.css',
        'css/layout/layout.css',
        'css/layout/font.css',
        'css/country/home1.css',
        'css/country/newsletter.css',
        'css/country/services.css',
        'css/country/webinar.css',
        'css/country/webinar-video.css',
        'css/country/taxassessment.css',
        'css/country/about2.css',
        'css/country/contact2.css',
        'css/country/resources.css',
    ];
    public $js = [
        'js/content.js',
        'js/content2.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];
}
