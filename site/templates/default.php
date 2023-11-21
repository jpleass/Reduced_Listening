<?php snippet('header') ?>
<div class='main-title'>
  <!-- Reduced Listening -->
  <img class="m-hidden" src="<?= kirby()->urls()->assets() ?>/images/rl_logo_new.svg" />
  <img class="m-show" src="<?= kirby()->urls()->assets() ?>/images/rl_logo_new_mobile.svg" />
</div>

<main class="container" role="main">
  <div class="row">
    <div class="col-sm-6 col-xs-12">
      <?php echo $page->textLeft()->kt() ?>
    </div>
    <div class="col-sm-6 col-xs-12">
      <?php echo $page->textRight()->kt() ?>
    </div>
  </div>
</main>


<?php snippet('footer') ?>