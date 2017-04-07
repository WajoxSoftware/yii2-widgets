<?php
namespace wajox\yii2widgets\filterwidget;

use yii\base\Widget;

class FilterWidget extends Widget
{
    public $viewFilePath = 'filter_widget';
    public $body = null;
    public $model = null;
    public $items = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render($this->viewFilePath, [
            'body' => $this->body,
            'model' => $this->model,
            'items' => $this->items,
        ]);
    }
}
