<div data-audio="<?= e($project->hasAudio(), $project->audio()->first(), false) ?>" data-waveform="<?= $project->files()->find('waveform.json') ?>" class="archive__item">

  <?php // Project Image
  if ($project->thumbnailImage()->isNotEmpty()) {
    $projectImage =  $project->thumbnailImage()->toFile();
  } else {
    $projectImage = $project->images()->first();
  }
  ?>

  <a href="<?= $project->url() ?>">
    <img src="<?= $projectImage->resize(185)->url(); ?>" srcset="<?= $projectImage->srcset([185, 185 * 2]); ?>" alt="<?= $project->image()->alt(); ?> ">
  </a>

  <h2 class="archive__item__title"><a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a></h2>
  <h3 class="archive__item__client"> <?= str_replace("-", " ", $project->client()->html()); ?>,</h3>
  <h3 class="archive__item__year text-secondary"><?= $project->year()->html() ?></h3>

  <?php if ($project->track()->isNotEmpty() && $project->files()->find('waveform.json')) : ?>
    <a href="#" class="archive__item__play">
      <i class="fa fa-play audioplayer__play-state"></i>
    </a>
  <?php endif; ?>

  <div class="archive__item__text">
    <?= $project->frontpagetext()->kt() ?>
  </div>
</div>