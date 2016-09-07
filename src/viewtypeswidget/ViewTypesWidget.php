<?php
namespace wajox\yii2widgets\viewtypeswidget;

use yii\base\Widget;

class ViewTypesWidget extends Widget
{
    public $items = [];
    public $current = '';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('view_types_widget', [
            'items' => $this->items,
            'current' => $this->current,
        ]);
    }
}
