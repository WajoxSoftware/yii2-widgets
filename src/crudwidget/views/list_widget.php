<?php
use yii\widgets\ListView;

echo ListView::widget([
        'itemView' => $itemView,
        'dataProvider' => $dataProvider,
        'viewParams' => $viewParams,
    ]);
