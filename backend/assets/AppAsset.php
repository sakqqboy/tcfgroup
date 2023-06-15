<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/font.css',
        'css/menu.css',
        'css/index.css',
        'css/createmember.css',
        'css/creatememp2.css',
        'css/updatemember.css',
        'css/viewmember.css',


    ];
    public $js = [
        'js/delete_content.js',
        'js/delete_content_detail.js',
        'js/delete_member.js',
        'js/member.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];
}
