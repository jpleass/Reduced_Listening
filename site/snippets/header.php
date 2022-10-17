<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>&#8202;&#8202;<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">



  <link rel="apple-touch-icon" sizes="57x57" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= kirby()->url('assets') ?>/images/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?= kirby()->url('assets') ?>/images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?= kirby()->url('assets') ?>/images/favicons/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="<?= kirby()->url('assets') ?>/images/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?= kirby()->url('assets') ?>/images/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?= kirby()->url('assets') ?>/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?= kirby()->url('assets') ?>/images/favicons/manifest.json">
  <link rel="shortcut icon" href="<?= kirby()->url('assets') ?>/images/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="msapplication-TileImage" content="<?= kirby()->url('assets') ?>/images/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="<?= kirby()->url('assets') ?>/images/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <?php echo css('assets/scss/style.css') ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-148RNZH3C1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-148RNZH3C1');
  </script>

</head>

<body class="template__<?php echo $page->intendedTemplate() ?> Site">
  <div class="Page">

    <?php if ($page->intendedTemplate() == "home") : ?>
      <header class="header" role="banner">
        <div class="container-fluid">
          <div class="row">
            <div class="text-center col-xs-12">
              <a href="<?php echo $site->homePage()->url() ?>">Reduced Listening</a>
            </div>
          </div>
        </div>
      </header>
    <?php else : ?>
      <header class="header" role="banner">
        <div class="container-fluid">
          <div class="row">
            <div class="header__back col-md-4 col-sm-4 col-xs-6"><a href="<?php echo $site->homePage()->url() ?>">← Back to archive</a></div>
            <div class="text-center header__title col-sm-4 col-xs-6"><?php echo $page->title() ?></div>
            <div class="text-right header__client col-md-4 col-sm-4"><?php echo str_replace("-", " ", $page->client()) ?></div>
          </div>
        </div>
      </header>
    <?php endif ?>