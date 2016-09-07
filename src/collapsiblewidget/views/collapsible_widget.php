<?php
use yii\helpers\Url;

?>
<div <?= $attributes ?>>
  <div class="collapsible-list-item">
    <div class="header">
      <div class="row">
        <div class="col-md-12 heading js-toggle">
          <div class="pull-right">
            <a href="#" class="js-collapsed js-expand btn btn-xs"><i class="fa fa-angle-double-down fa-2x"></i></a>
            <a href="#" class="js-expanded js-collapse btn btn-xs"><i class="fa fa-angle-double-up fa-2x"></i></a>
          </div>
          <span class="collapsible-title"><?= $title ?></span>
        </div>
      </div>
    </div>
  </div>

  <?php if (sizeof($buttons) > 0):?>
    <div class="row controls js-toggle-box">
      <div class="col-md-12">
        <div class="btn-group" role="group">
          <?php foreach ($buttons as $button):
                  $link = isset($button['link']) ? $button['link'] : Url::toRoute($button['url']);
                ?>
              <a href="<?= $link ?>" class="btn btn-xs btn-primary<?php if (isset($button['class'])): ?> <?= $button['class'] ?><?php endif; ?>">
                  <?php if (isset($button['icon'])): ?>
                    <i class="fa fa-fw <?= $button['icon'] ?>"></i>
                  <?php endif; ?>
                 <?= $button['title'] ?>
              </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="body js-toggle-box">
    <div class="row">
      <div class="col-md-12 collapsible-box ">
      	<?= $body ?>
      </div>
    </div>
  </div>
</div>
