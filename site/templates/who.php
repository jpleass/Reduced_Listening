<?php snippet('header') ?>
<div class='main-title'>
  <!-- Reduced Listening -->
  <img class="m-hidden" src="<?= kirby()->urls()->assets() ?>/images/rl_logo_new.svg" />
  <img class="m-show" src="<?= kirby()->urls()->assets() ?>/images/rl_logo_new_mobile.svg" />
</div>

<div class="top-section">
  <?= snippet('navigation') ?>
  <div class="container">
    <div class="row ">
      <div class="col-sm-6 co col-xs-12">
        <div class="podcasts__text">
          <?php echo $page->textleft()->kt() ?>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="podcasts__text">
          <?php echo $page->textright()->kt() ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="who__staff container">
  <div class="row middle-sm center-sm">
    <?php foreach ($page->staff()->toStructure() as $staff) : ?>
      <div class="col-sm-6 col-md-4 col-xs-12 who__staff__item">
        <div class="who__staff__image"><?= $staff->image()->toFile()->resize(480) ?></div>
        <div class="who__staff__title text-center">
          <h4><?= $staff->name()->kt() ?></h4>
        </div>
        <div class="who__staff__text"><?= $staff->text()->kt() ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="who__staff who__staff--other container">
  <div class="row center-sm">
    <?php foreach ($page->staffOther()->toStructure() as $staff) : ?>
      <div class="col-sm-6 col-md-4 col-xs-12 who__staff__item">
        <div class="who__staff__image"><?= $staff->image()->toFile()->resize(480) ?></div>
        <div class="who__staff__title text-center">
          <h4><?= $staff->name()->kt() ?></h4>
        </div>
        <div class="who__staff__text"><?= $staff->text()->kt() ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<?php snippet('footer') ?>