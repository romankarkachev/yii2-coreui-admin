<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

backend\assets\AppAsset::register($this);

romankarkachev\coreui\CoreUIAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/romankarkachev/yii2-coreui-admin/src');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => $directoryAsset . '/img/favicon.png']) ?>
    <?php $this->head() ?>
</head>
<body class="app flex-row align-items-center">
<?php $this->beginBody() ?>
    <div class="container">
        <?= $content ?>

    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
