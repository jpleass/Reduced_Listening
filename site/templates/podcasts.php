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
     <?php snippet('archive') ?>
  </div>


<?php snippet('footer') ?>