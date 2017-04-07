<?php

namespace wajox\yii2widgets\navtabswidget;

use yii\base\Widget;

class NavTabsWidget extends Widget
{
    public $viewFilePath = 'nav_tabs_widget';
    public $items = [];
    public $current = null;
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
