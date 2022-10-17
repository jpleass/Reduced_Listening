<?php $count = 0 ?>
<?php foreach ($featured as $project) : ?>
  <?= snippet('featured__item', [
    'project' => $project,
    'count' => $count
  ]) ?>
  <?php $count++ ?>
<?php endforeach ?>