<?php snippet('header') ?>

<div class="audioplayer--archive">
  <?= snippet('audioplayer', [
    'autoload' => false,
    'track' => false,
    'waveform' => false
  ]) ?>
</div>

<div class='main-title'>
  Reduced Listening
</div>
<?= snippet('top-section') ?>

<div class="featured">
  <?= snippet('featured') ?>
</div>
<div class="archive__loading text-center">Loading...</div>
<div class="archive">
  <?php snippet('archive') ?>
</div>
<div class="pagination text-center">
  <?php if ($articles->pagination()->hasPages()) : ?>
    <nav class="pagination">

      <?php if ($articles->pagination()->hasNextPage()) : ?>
        <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">
          ‹ older posts
        </a>
      <?php endif ?>

      <?php if ($articles->pagination()->hasPrevPage()) : ?>
        <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">
          newer posts ›
        </a>
      <?php endif ?>

    </nav>
  <?php endif ?>
</div>






<?php snippet('footer') ?>