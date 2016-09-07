<?php
namespace wajox\yii2widgets\filterwidget;

use yii\base\Widget;

class FilterWidget extends Widget
{
    public $body = null;
    public $model = null;
    public $items = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('filter_widget', [
            'body' => $this->body,
            'model' => $this->model,
            'items' => $this->items,
        ]);
    }
}
