<?php

namespace wajox\yii2widgets\sidebarwidget;

use yii\base\Widget;

class SidebarWidget extends Widget
{
    public $items = [];
    public $parts = [];
    public $title = '';
    public $icon = '';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('sidebar_widget', [
            'items' => $this->items,
            'parts' => $this->parts,
            'title' => $this->title,
            'icon' => $this->icon,
        ]);
    }
}
