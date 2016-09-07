<div class="modal fade js-modal-form" id="<?= $id ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?= $title ?></h4>
      </div>
      <div class="modal-body">
        <?= $body ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= \Yii::t('app', 'Close') ?></button>
      	<?php foreach ($buttons as $btn): ?>
      		<button class="btn <?= $btn['class'] ?>" <?php if (isset($btn['submit'])): ?> type="submit"<?php endif; ?>><?= $btn['title'] ?></button>
      	<?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
