<?php // Project Image
if ($page->coverImage()->isNotEmpty()) {
$coverImage =  $page->coverImage()->toFile();
} else {
  $coverImage = $page->images()->first();
}
?>
  <div 
    class="project__header"
    data-src="<?= $coverImage->resize(1920)->url() ?>"
    style="
    background: url('<?= $coverImage->resize(1)->url(); ?>') no-repeat center center; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  ">

    <div class="project__audio-overlay audioplayer__play">
      <i class="fa fa-play audioplayer__flash"></i>
      <div class="loader"></div>
    </div>

  </div>