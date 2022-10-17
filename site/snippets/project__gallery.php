<?php foreach($images as $image): ?>
  <a data-fancybox class="fancybox" 
      title="<?php echo $image->caption() ?>"
      href="<?php echo $image->url() ?>"> 
      <img class="project__image" src="<?= $image->resize(768, null, 80)->url() ?>">
  </a>
<small class="project__image__caption"><?php echo $image->caption()->kirbytext() ?></small>
<?php endforeach ?>