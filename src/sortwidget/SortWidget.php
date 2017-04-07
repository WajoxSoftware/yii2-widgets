<?php
namespace wajox\yii2widgets\sortwidget;

use yii\base\Widget;

class SortWidget extends Widget
{
    public $viewFilePath = 'sort_widget';
    public $items = [];
    public $sort = null;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render($this->viewFilePath, [
            'items' => $this->items,
            'sort' => $this->sort,
        ]);
    }
}
