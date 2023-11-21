<?php snippet('header') ?>
<div class='main-title'>
  <!-- Reduced Listening -->
  <img class="m-hidden" src="<?= kirby()->urls()->assets() ?>/images/rl_logo_new.svg" />
  <img class="m-show" src="<?= kirby()->urls()->assets() ?>/images/rl_logo_new_mobile.svg" />
</div>

<div class="top-section">
  <?= snippet('navigation') ?>
</div>

<div class="podcasts__archive archive">
  <div class="job__text">
    <?= $page->text()->kt() ?>
  </div>
</div>


<?php snippet('footer') ?>