<?php $count = 0 ?>
<?php foreach($articles as $project): ?>
<div class="archive_item">
  <a href="<?php echo $project->url() ?>"> <?php echo thumb($project->image(), array('width' => 185)); ?> </a>
  <h2><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h2>
  <h3 class="client"><?php
  $client = $project->client()->html();
  $client = str_replace("-", " ", $client);
  echo $client; 
  ?>,</h3> <h3 class="year"><?php echo $project->year()->html() ?></h3>
  <?php if ($project->soundcloud()->isNotEmpty()) { ?>
  	<a href="#" data-sc-index="<?php echo $count ?>" data-sc="<?php echo $project->soundcloud(); ?>" class="play"><i class="fa fa-play"></i></a>
  <?php } ?>
  <p><?php echo $project->frontpagetext()->excerpt(50, 'words') ?></p>
</div>
<?php $count++ ?>
<?php endforeach ?>