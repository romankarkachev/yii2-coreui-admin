<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use romankarkachev\coreui\widgets\Alert;
use romankarkachev\coreui\widgets\Sidebar;
use romankarkachev\coreui\widgets\Breadcrumbs;
use backend\assets\AppAsset;

AppAsset::register($this);

romankarkachev\coreui\CoreUIAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/romankarkachev/yii2-coreui-admin/src');

$items = [
    ['label' => 'Заявки', 'icon' => 'fa fa-address-book-o', 'url' => ['/orders']],
    [
        'label' => 'Справочники',
        'url' => '#',
        'items' => [
            ['label' => 'Коды ФККО', 'icon' => 'fa fa-tint', 'url' => ['/fkko']],
            ['label' => 'Коды ТН ВЭД', 'icon' => 'fa fa-balance-scale', 'url' => ['/fthcdc']],
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
<body class="app header-fixed sidebar-hidden">
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
                <?= Html::a('<i class="icon-logout"></i>', ['/logout'], ['class' => 'nav-link', 'title' => 'Выйти из системы', 'data-method' => 'post']) ?>

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
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'linksAtRight' => isset($this->params['breadcrumbsRight']) ? $this->params['breadcrumbsRight'] : [],
            ]) ?>

            <div class="container-fluid">
                <?= Alert::widget() ?>

                <?= $content ?>

            </div>
        </main>
    </div>
    <footer class="app-footer">
        &copy; <?= date('Y') ?> <?= Html::a(Yii::$app->name, ['/']) ?>

        <span class="float-right">Вы авторизованы как <?= Yii::$app->user->identity->username . (Yii::$app->user->identity->profile->name == null || Yii::$app->user->identity->profile->name == '' ? '' : ' (' . Yii::$app->user->identity->profile->name) . ')' ?>.</span>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
