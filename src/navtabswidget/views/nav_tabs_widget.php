<?php
use yii\helpers\Url;

?>
<ul class="nav nav-tabs" role="tablist">
  <?php foreach ($items as $name => $item): ?>
    <li role="presentation"<?= $name == $current ? ' class="active"' : ''; ?><?php if (isset($item['tab'])): ?> role="tab" data-toggle="tab"<?php endif; ?>><a href="<?= isset($item['tab']) ? $item['tab'] : Url::toRoute($item['url']) ?>"><?= $item['title'] ?></a></li>
  <?php endforeach; ?>
</ul>
