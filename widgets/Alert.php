<?php
namespace romankarkachev\coreui\widgets;

use Yii;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 * @author Roman Karkachev <post@romankarkachev.ru>
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
class Alert extends \yii\bootstrap\Widget
{
    /**
     * Иконки событий
     * @var array
     */
    public $alertIcons = [
        'error'   => 'times-circle',
        'danger'  => 'times-circle',
        'success' => 'check-circle-o',
        'info'    => 'info',
        'warning' => 'exclamation-triangle'
    ];

    /**
     * Наименования событий.
     * @var array
     */
    public $alertMeanings = [
        'error'   => 'Ошибка!',
        'danger'  => 'Ошибка!',
        'success' => 'Выполнено успешно.',
        'info'    => '',
        'warning' => 'Внимание!'
    ];

    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - $key is the name of the session flash variable
     * - $value is the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning'
    ];

    /**
     * @var array the options for rendering the close button tag.
     */
    public $closeButton = [];

    public function init()
    {
        parent::init();

        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();
        $appendCss = isset($this->options['class']) ? ' ' . $this->options['class'] : '';

        foreach ($flashes as $type => $data) {
            if (isset($this->alertTypes[$type])) {
                $data = (array) $data;
                foreach ($data as $i => $message) {
                    /* initialize css class for each alert box */
                    $this->options['class'] = $this->alertTypes[$type] . $appendCss;

                    /* assign unique id to each alert box */
                    $this->options['id'] = $this->getId() . '-' . $type . '-' . $i;

                    $appendIcon = isset($this->alertIcons[$type]) ? ' <i class="fa fa-' . $this->alertIcons[$type] . '" aria-hidden="true"></i> ' : '';

                    echo '
<div class="alert ' . $this->options['class'] .'" role="alert">
        <strong>' . $appendIcon . $this->alertMeanings[$type] . '</strong> ' . $message . '
    </div>';
                }

                $session->removeFlash($type);
            }
        }
    }
}
