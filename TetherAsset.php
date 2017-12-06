<?php
namespace romankarkachev\coreui;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Roman Karkachev <post@romankarkachev.ru>
 * @since 2.0
 */
class TetherAsset extends AssetBundle
{
    public $sourcePath = '@bower/tether/dist';
    public $css = [
        'css/tether.css',
    ];
    public $js = [
        'js/tether.js',
    ];
    public $depends = [];
}
