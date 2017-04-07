<?php
namespace wajox\yii2widgets\collapsiblegroupwidget;

use yii\base\Widget;

class CollapsibleGroupWidget extends Widget
{
    public $viewFilePath = 'collapsible_group_widget';
    public $items;

    public function run()
    {
        return $this->render($this->viewFilePath, [
            'items' => $this->items,
        ]);
    }
}
