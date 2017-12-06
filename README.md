CoreUI - Responsive Admin Theme Bootstrap 4alpha template
===================================

Установка
------------

Обновите bootstrap до версии 4 (например, внесением в файл composer.json):

```
"bower-asset/bootstrap": "4.0.0-alpha.5"
```

а затем вызовите обновление:

```
composer update
```

Выполните команду

```
php composer.phar require romankarkachev/yii2-coreui-admin "*"
```

или добавьте в composer.json проекта строку (также потребуется после этого вызвать команду php composer.phar update)

```
"romankarkachev/yii2-coreui-admin": "*"
```

Информация
-------------------

Это обертка для темы. Тема в рамках этого проекта поставляется. В папке examples можно найти примеры ингерации темы yii2-advanced и dektirum/user.

Пример кода в контроллере для перекрытия стандартной формы авторизации:

    /**
     * @inheritdoc
     */
    public function actionLogin()
    {
        // макет для неавторизованного пользователя
        $this->layout = '//na';

        return parent::actionLogin();
    }

Всем спасибо.

История изменений
------------------
https://github.com/romankarkachev/yii2-coreui-admin/blob/master/src/README.txt
