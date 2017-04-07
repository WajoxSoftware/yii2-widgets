<?php
namespace wajox\yii2widgets\collapsiblewidget;

use yii\base\Widget;

class CollapsibleWidget extends Widget
{
    const DEFAULT_ID_PREFIX = 'collapsible-widget-';

    public $viewFilePath = 'collapsible_widget';
    public $buttons = [];
    public $title = null;
    public $body = '';
    public $render = null;
    public $data = [];
    public $attributes = [
        'class' => 'js-collapsible collapsible',
        'data-expanded-class' => 'js-expanded active',
    ];
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
            'attributes' => $this->generateAttributesHtml(),
            'title' => $this->title,
            'body' => $this->body,
            'buttons' => $this->buttons,
        ]);
    }

    protected function generateAttributesHtml()
    {
        $attributesHtml = [];
        foreach ($this->attributes as $attr => $value) {
            if (is_numeric($attr)) {
                $attributesHtml[] = $value;
            } else {
                $attributesHtml[] = $attr.'="'.$value.'"';
            }
        }

        return implode(' ', $attributesHtml);
    }
}
