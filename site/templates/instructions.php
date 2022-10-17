<?= snippet('header') ?>

<style>
  p {
    margin-bottom: 1rem;
  }
  a {
    color: blue;
    text-decoration: underline;
  }
  pre {
    font-family: monospace;
    background: lightgrey;
    padding: .5rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
</style>

<div style="padding-top: 4rem;max-width:40em;" class="main">
<?= $page->text()->kt() ?>
</div>