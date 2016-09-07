<?php
namespace wajox\yii2widgets\collapsiblegroupwidget;

use yii\base\Widget;

class CollapsibleGroupWidget extends Widget
{
    public $items;

    public function run()
    {
        return $this->render('collapsible_group_widget', [
            'items' => $this->items,
        ]);
    }
}
