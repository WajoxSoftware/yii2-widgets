<?php

namespace wajox\yii2widgets\pagecontrolswidget;

use yii\base\Widget;

class PageControlsWidget extends Widget
{
    public $viewFilePath = 'page_controls_widget';
    public $items = [];
    public $dropDownMode = false;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render($this->viewFilePath, [
            'items' => $this->items,
            'dropDownMode' => $this->dropDownMode,
        ]);
    }
}
