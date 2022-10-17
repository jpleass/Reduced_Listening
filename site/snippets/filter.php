<div class="main filter">
<div class="section group">
  <div class="col span_2_of_2">
    <span class="list-title">Clients&#8212;</span>
        <?php foreach($clients as $client): ?>
          <a href="<?php echo $page->url() . '/client:' . $client ?>">
            <?php 
            $client = str_replace("-", " ", $client);
            echo html($client)
            ?>
          </a>
        <?php endforeach ?>
  </div>
</div>
</div>