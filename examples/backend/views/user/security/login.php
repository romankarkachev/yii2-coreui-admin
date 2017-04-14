<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model dektrium\user\models\LoginForm */
/* @var $module dektrium\user\Module */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group mb-0">
            <div class="card p-4">
                <div class="card-block">
                    <h1>Авторизация</h1>
                    <p class="text-muted">Войдите в свой аккаунт</p>
                    <?php $form = ActiveForm::begin([
                        'id'                     => 'login-form',
                        'enableAjaxValidation'   => true,
                        'enableClientValidation' => false,
                        'validateOnBlur'         => false,
                        'validateOnType'         => false,
                        'validateOnChange'       => false,
                        'fieldConfig' => [
                            'inputOptions' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ]) ?>

                        <?= $form->field($model, 'login', [
                            'template' => '
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i></span>
                            {input}
                        </div>
                        {error}',
                            'inputOptions' => [
                                'autofocus' => 'autofocus',
                                'tabindex' => '1',
                                'placeholder' => 'Введите логин'
                            ]
                        ])->label(false) ?>

                        <?= $form->field($model, 'password', [
                            'template' => '
                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i></span>
                            {input}
                        </div>
                        {error}',
                            'inputOptions' => [
                                'tabindex' => '2',
                                'placeholder' => 'Введите пароль'
                            ]
                        ])->passwordInput()->label(false) ?>

                    <div class="row">
                        <div class="col-6">
                            <?= Html::submitButton('<i class="icon-login"></i> ' . Yii::t('user', 'Sign in'), ['class' => 'btn btn-primary px-4', 'tabindex' => '3']) ?>

                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
            <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-block text-center">
                    <div>
                        <p><i class="icon-user fa-3x"></i></p>
                        <h2>Добро пожаловать</h2>
                        <p>Вас приветствует система управления проектом <?= Yii::$app->name ?>. Введите свои учетные данные и нажмите &laquo;Авторизоваться&raquo;.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>