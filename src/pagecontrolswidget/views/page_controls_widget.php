<?php
use yii\helpers\Url;

?>
<?php if (!$dropDownMode): ?>
  <div class="btn-group" role="group">
    <?php foreach ($items as $item):
      $link = isset($item['link']) ? $item['link'] : Url::toRoute($item['url']);
    ?>
        <a href="<?= $link ?>" class="btn btn-xs btn-default<?php if (isset($item['class'])): ?> <?= $item['class'] ?><?php endif; ?>">
        	<?php if (isset($item['icon'])): ?>
        		<i class="fa fa-fw <?= $item['icon'] ?>"></i>
        	<?php endif; ?>
  	  	<?= $item['title'] ?>
  	  </a>
    <?php endforeach; ?>
  </div>

<?php else: ?>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?= \Yii::t('app', 'Select Action') ?>
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>

    <ul class="dropdown-menu">
      <?php foreach ($items as $item):
        $link = isset($item['link']) ? $item['link'] : Url::toRoute($item['url']);
      ?>
          <li>
            <a href="<?= $link ?>" class="<?php if (isset($item['class'])): ?> <?= $item['class'] ?><?php endif; ?>">
                <?php if (isset($item['icon'])): ?>
                  <i class="fa fa-fw <?= $item['icon'] ?>"></i>
                <?php endif; ?>
              <?= $item['title'] ?>
            </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
