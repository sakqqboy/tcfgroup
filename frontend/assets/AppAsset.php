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
        'css/home/header.css',
        'css/layout/layout.css',
        'css/layout/font.css',
        'css/country/home1.css',
        'css/country/newsletter.css',
        'css/country/services.css',
        'css/country/services_country.css',
        'css/country/webinar.css',
        'css/country/webinar-video.css',
        'css/country/taxassessment.css',
        'css/country/about2.css',
        'css/country/contact2.css',
        'css/country/resources.css',
        'css/country/login.css',
        'css/country/privacy.css',
        'css/country/formsignup.css',
        'css/country/button_edit.css',
        'css/country/business.css',


    ];
    public $js = [
        'js/content.js',
        'js/content2.js',
        'js/client.js',
        'js/contact_us.js',
        'js/service.js',
        'js/show_content.js',
        'js/timeline.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];
}
