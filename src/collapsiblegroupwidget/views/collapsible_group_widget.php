<?php
use app\widgets\collapsiblewidget\CollapsibleWidget;

?>

<div class="js-collapsible-group">
  <?php
  foreach ($items as $item) {
      echo CollapsibleWidget::widget($item);
  }
  ?>
</div>
