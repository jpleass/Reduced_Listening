<?php $count = 0 ?>
<?php foreach($articles as $project): ?>
  <?= snippet('archive__item', [
      'project' => $project,
      'count' => $count
    ]) ?>
<?php $count++ ?>
<?php endforeach ?>