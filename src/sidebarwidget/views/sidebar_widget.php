<?php
use yii\helpers\Url;

$user = \Yii::$app->user->identity;
?>

<!-- Sidebar -->
<div id="sidebar-wrapper">
  <ul id="sidebar_menu" class="sidebar-nav">
      <li class="sidebar-brand"><a id="menu-toggle" href="#"><!--<?= $title ?>--><span id="main_icon"><i class="fa fa-fw <?= $icon ?>"></i></span></a></li>
  </ul>
  <div class="clr"></div>
  <div class="sidebar-user">
  	<div class="thumbnail avatar">
  		<a href="<?= Url::toRoute(['/account/account']) ?>">
        <img src="<?= \Yii::$app->user->identity->avatarUrl ?>"/>
      </a>
  	</div>
  	<div class="info">
	  	<p class="name">
        <a href="<?= Url::toRoute(['/account/account']) ?>"><?= \Yii::$app->user->identity->name ?></a>

        <a href="<?= Url::toRoute(['/account/settings']) ?>" class="edit">
          <i class="fa fa-gears fa-fw"></i>
        </a>
      </p>
	  	<p class="email"><?= \Yii::$app->user->identity->email ?></p>

      <a href="<?= Url::toRoute(['/account/user-contacts']) ?>" class="options">
        <i class="fa fa-book fa-fw"></i> <?= $user->contactsCount ?>
      </a>&nbsp;

      <a href="<?= Url::toRoute(['/account/dialogs']) ?>" class="options">
        <i class="fa fa-envelope-o fa-fw"></i> <?= $user->newInboxMessagesCount ?>
      </a>&nbsp;

      <a href="<?= Url::toRoute(['/account/bills']) ?>" class="options">
        <i class="fa fa-credit-card fa-fw"></i> <?= $user->accountBalanceRUR ?> P
      </a>&nbsp;
  	</div>
  	<div class="clr"></div>
  </div>
  <ul class="sidebar-nav" id="sidebar">
    <?php if (sizeof($parts) > 0): ?>
      <?php foreach ($parts as $part): ?>
        <li class="sidebar_part"><a href="<?= $part['url'] ?>"><?= $part['title'] ?></a></li>
        <?php foreach ($part['items'] as $item):?>
          <li>
            <a href="<?= $item['url'] ?>">
              <span class="sub_icon"><i class="fa fa-fw <?= $item['icon'] ?>"></i></span>
              <?= $item['title'] ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php if (sizeof($items) > 0): ?>
      <?php foreach ($items as $item):?>
        <li>
          <a href="<?= $item['url'] ?>">
            <span class="sub_icon"><i class="fa fa-fw <?= $item['icon'] ?>"></i></span>
            <?= $item['title'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
</div>
