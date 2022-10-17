<div data-audio="<?= e($project->hasAudio(), $project->audio()->first(), false) ?>" data-waveform="<?= $project->files()->find('waveform.json') ?>" class="featured__item">
  <div class="featured__item__wrapper">

    <div class="featured__item__image">
      <?php // Project Image
      if ($project->thumbnailImage()->isNotEmpty()) {
        $projectImage =  $project->thumbnailImage()->toFile();
      } else {
        $projectImage = $project->images()->first();
      }
      ?>

      <a href="<?= $project->url() ?>">
        <img src="<?= $projectImage->resize(370)->url(); ?>" srcset="<?= $projectImage->srcset([370, 370 * 2]); ?>" alt="<?= $project->image()->alt(); ?> ">
      </a>
    </div>

    <div class="featured__item__body">

      <h2 class="featured__item__title"><a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a></h2>
      <h3 class="featured__item__client"> <?= str_replace("-", " ", $project->client()->html()); ?></h3>
      <!-- <h3 class="featured__item__year text-secondary"><?= $project->year()->html() ?></h3> -->

      <?php if ($project->track()->isNotEmpty() && $project->files()->find('waveform.json')) : ?>
        <a href="#" class="featured__item__play">
          <i class="fa fa-play audioplayer__play-state"></i>
        </a>
      <?php endif; ?>

      <div class="featured__item__text">
        <?= $project->frontpagetext()->kt() ?>
      </div>
    </div>
  </div>
</div>