<div class="news__item">
  <h2 class="news__item__title"><a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a></h2>
  <h3 class="news__item__year text-secondary"><?= $project->year()->html() ?></h3>
  <div class="news__item__text">
    <?= $project->frontpagetext()->kt() ?>
  </div>
</div>