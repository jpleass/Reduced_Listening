<?php
$navPage = [page('home'), page('podcasts'), page('clients'), page('who-we-are'), page('contact-us'), page('opportunities')];
$navPage = $site->navigation()->toPages();
?>
<div class="navigation__wrapper">

  <div class="navigation">
    <a class="<?= e($page->is($site->homepage()), 'active') ?>" href="<?= $site->homepage()->url() ?>">Home</a>
    <?php foreach ($navPage as $navItem) : ?>
      <?php if ($navItem->isListed()) : ?>
        <a class="<?= e($page->is($navItem), 'active') ?>" href="<?= $navItem->url() ?>"><?= $navItem->title() ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>