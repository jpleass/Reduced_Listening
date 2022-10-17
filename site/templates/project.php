<?php snippet('header') ?>

<?php 
  $soundcloudLink = $page->soundcloud();
  if ($page->soundcloud()->isEmpty() && $page->soundcloudLink()->isNotEmpty()) {
    $soundcloudLink = $page->soundcloudLink();
  }
?>

  <?= snippet('project__header') ?>

  <?php 
    if ($page->track()->isNotEmpty()) {
      $track = $page->audio()->first()->url();
      $waveform = $page->files()->find('waveform.json');
      $autoload = true;
    } else {
      $track = false;
      $autoload = false;
    }
  ?>
  <?= snippet('audioplayer', [
    'autoload' => $autoload,
    'track' => $track,
    'waveform' => $page->files()->find('waveform.json')
    ]) ?>

  <main class="container-fluid project" role="main">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">

    <div class="project__meta">
      <div id="LengthOfPiece"><i>Loading...</i></div>
      <div class="text-italic"><?= str_replace('-', " ", $page->client()); ?>, <span class="numbers"><?= $page->year() ?></span></div>
      <a id="soundcloudURL" href="<?php echo $soundcloudLink; ?>" target="_blank">Listen on Soundcloud</a>
    </div>

    <div class="project__text">
      <h2 class="project__title"><?php echo $page->title() ?></h2>  
      <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="project__images">
        <?php 
          $images = $page->gallery()->toFiles(); 
          if ($images->count() == 0) {
            $images = $page->images();
          }
        ?>
        <?php snippet('project__gallery', ['images' => $images]) ?>
      </div>
    </div>
  </div>
  </main>

<?php snippet('footer') ?>