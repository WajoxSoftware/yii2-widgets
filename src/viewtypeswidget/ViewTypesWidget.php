<?php
namespace wajox\yii2widgets\viewtypeswidget;

use yii\base\Widget;

class ViewTypesWidget extends Widget
{
    public $viewFilePath = 'view_types_widget';
    public $items = [];
    public $current = '';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render($this->viewFilePath, [
            'items' => $this->items,
            'current' => $this->current,
        ]);
    }
}
