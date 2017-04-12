<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use romankarkachev\widgets\Sidebar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;

AppAsset::register($this);

romankarkachev\web\CoreUIAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/romankarkachev/yii2-coreui-admin/src');

$items = [
    ['label' => 'Сделки', 'icon' => 'fa fa-bars', 'url' => ['/transactions']],
    ['label' => 'Клиенты', 'icon' => 'fa fa-male', 'url' => ['/counteragents']],
    [
        'label' => 'Справочники',
        'url' => '#',
        'items' => [
            ['label' => 'Офисы', 'icon' => 'fa fa-building', 'url' => ['/about']],
            ['label' => 'Склады в Китае', 'url' => ['/china-warehouses']],
            ['label' => 'Экспедиторы', 'url' => ['/forwarders']],
            ['label' => 'Населенные пункты', 'url' => ['/cities']],
            ['label' => 'Валюта', 'url' => ['/currencies']],
            ['label' => 'Коды ТН ВЭД', 'url' => ['/hs']],
        ],
    ],
];
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
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<?php $this->beginBody() ?>
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <?= Html::a('<i class="icon-logout"></i>', ['/logout'], ['class' => 'nav-link', 'data-method' => 'post']) ?>

            </li>
        </ul>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <?= Sidebar::widget([
                    'options' => ['id' => 'side-menu', 'class' => 'nav'],
                    'encodeLabels' => false,
                    'items' => $items,
                ]) ?>

            </nav>
        </div>

        <main class="main">
            <?= Breadcrumbs::widget([
                'tag' => 'ol',
                'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <div class="container-fluid">
                <?= $content ?>

            </div>
        </main>
    </div>
    <footer class="app-footer">
        &copy; <?= date('Y') ?> <?= Html::a(Yii::$app->name, ['/']) ?>

        <!--<span class="float-right">Можно справа написать текст</span>-->
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
