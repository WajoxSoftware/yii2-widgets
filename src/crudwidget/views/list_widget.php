<?php
use yii\widgets\ListView;

$widget = [
    'itemView' => $itemView,
    'dataProvider' => $dataProvider,
    'viewParams' => $viewParams,
];

if ($layout) {
    $widget['layout'] = $layout;
}

echo ListView::widget($widget);
