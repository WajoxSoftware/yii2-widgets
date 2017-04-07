<?php
namespace wajox\yii2widgets\modalformwidget;

use yii\base\Widget;

class ModalFormWidget extends \wajox\yii2widgets\modalwidget\ModalWidget
{
    const TEMPLATE_PATH = 'modal_form_widget';
    const DEFAULT_ID_PREFIX = 'modal-form-widget-';

    public function init()
    {
        parent::init();

        if ($this->buttons == null) {
            return;
        }

        $this->buttons[] = [
            'submit' => true,
            'title' => \Yii::t('app', 'Save'),
            'class' => 'btn-primary',
        ];
    }
}
