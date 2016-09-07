<?php
namespace wajox\yii2widgets\modalwidget;

use yii\base\Widget;

class ModalWidget extends Widget
{
    const TEMPLATE_PATH = 'modal_widget';
    const DEFAULT_ID_PREFIX = 'modal-widget-';

    public $buttons = [];
    public $title = null;
    public $body = '';
    public $render = null;
    public $data = [];
    public $id = null;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $this->id = $this->id === null ? uniqid(static::DEFAULT_ID_PREFIX) : $this->id;

        if ($this->render !== null) {
            $this->body = $this->render($this->render, $this->data);
        }

        return $this->render(static::TEMPLATE_PATH, [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'buttons' => $this->buttons,
        ]);
    }
}
