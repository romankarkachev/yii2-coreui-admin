<?php
namespace romankarkachev\web;

use yii\web\AssetBundle as BaseAsset;

/**
 * @author Roman Karkachev <post@romankarkachev.ru>
 * @copyright 2017 Roman Karkachev
 * @date 2017-04-12
 * Homer AssetBundle
 * @since 0.1
 */
class CoreUIAsset extends BaseAsset
{
    public $sourcePath = '@romankarkachev/src';
    public $css = [
        'css/font-awesome.min.css',
        'css/simple-line-icons.css',
        'css/ptsans.css',
        'css/style.css',
    ];
    public $js = [
        'js/app.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
