<?php
namespace wajox\yii2widgets\modalwidget;

use yii\base\Widget;

class ModalWidget extends Widget
{
    const DEFAULT_ID_PREFIX = 'modal-widget-';

    public $viewFilePath = 'modal_widget';
    public $buttons = null;
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

        return $this->render($this->viewFilePath, [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'buttons' => $this->buttons == null ? [] : $this->buttons,
        ]);
    }
}
