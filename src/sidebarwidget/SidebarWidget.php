<?php

namespace wajox\yii2widgets\sidebarwidget;

use yii\base\Widget;

class SidebarWidget extends Widget
{
    public $viewFilePath = 'sidebar_widget';
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
        return $this->render($this->viewFilePath, [
            'items' => $this->items,
            'parts' => $this->parts,
            'title' => $this->title,
            'icon' => $this->icon,
        ]);
    }
}
