<div 
  data-autoload="<?= $autoload ?>"
  data-audio="<?= $track ?>"
  data-waveform="<?= $waveform ?>"
class="audioplayer">


    <div class="audioplayer__controls">
      <a class="audioplayer__play" href="#"><i class="fa fa-play audioplayer__play-state"></i></a>
      <a class="audioplayer__stop" href="#"><i class="fa fa-step-backward"></i></a>
    </div>

    <div class="audioplayer__timeline">
      <div class="audioplayer__loading"></div>
    </div>

    <div class="audioplayer__meta">
      <span class="audioplayer__current">0:00</span> | <span class="audioplayer__duration">00:00</span>
      <a href="<?php echo $page->soundcloud(); ?>"><i class="fa fa-soundcloud"></i></a>
    </div>

</div>