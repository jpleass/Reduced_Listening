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
      <div class="col-sm-6 col-xs-12">
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

<div class="archive__loading text-center">Loading...</div>
<div class="podcasts__archive archive">
  <?php foreach ($page->children()->listed() as $job) : ?>
    <div class="archive__item">
      <h2 class="archive__item__title"><a href="<?= $job->url() ?>"><?= $job->title()->html() ?></a></h2>
      <?php if ($job->date()->isNotEmpty()) : ?>
        <h3 class="archive__item__year text-secondary"><?= $job->date() ?></h3>
      <?php endif; ?>
      <div class="archive__item__text">
        <?= $job->excerpt()->kt() ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php if ($page->children()->listed()->count() === 0) : ?>
  <div style="text-align: center;">
    <?= $page->nojobstext()->kt() ?>
  </div>
<?php endif; ?>


<?php snippet('footer') ?>