<?php
namespace romankarkachev\coreui;

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
    public $sourcePath = '@romankarkachev/coreui/src';
    public $css = [
        'css/ptsans.css',
        'css/style.css',
    ];
    public $js = [
        'js/app.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'mimicreative\assets\SimpleLineIconsAsset',
        'romankarkachev\coreui\TetherAsset',
        'romankarkachev\coreui\BootstrapOnlyJsAsset',
    ];
}
