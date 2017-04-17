<?php
namespace romankarkachev\coreui;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Roman Karkachev <post@romankarkachev.ru>
 * @since 2.0
 */
class BootstrapOnlyJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
