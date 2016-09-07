<?php
namespace wajox\yii2widgets\crudwidget;

use yii\base\Widget;
use yii\data\ActiveDataProvider;

class ListWidget extends Widget
{
    public $itemView;
    public $query = null;
    public $params = [];
    public $dataProvider = null;
    public $viewParams = [];
    public $modelName;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if ($this->dataProvider == null) {
            $this->params = array_merge($this->params, ['query' => $this->query]);
            $this->dataProvider = new ActiveDataProvider($this->params);
        }

        return $this->render('list_widget', [
            'itemView' => $this->itemView,
            'dataProvider' => $this->dataProvider,
            'viewParams' => $this->viewParams,
            'modelName' => $this->modelName,
        ]);
    }
}
