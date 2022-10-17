<?php 

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $articles = $page->podcasts()->toPages();
  $tags = page('archive')->children()->listed();

  // add the tag filter
  if($year = param('year')) {
    $articles = $articles->filterBy('year', $year, ',');
  }
  if($client = param('client')) {
    $articles = $articles->filterBy('client', $client, ',');
  }

  // fetch all tags
  $years = $tags->pluck('year', ',', false);
  $clients = $tags->pluck('client', ',', false);
  $years = array_unique($years);
  $clients = array_unique($clients);
  asort($clients);
  asort($years);

  // apply pagination
  $articles   = $articles->paginate(20);
  $pagination = $articles->pagination();

  return [
    'articles' => $articles,
    'years' => $years,
    'year' => $year,
    'client' => $client,
    'clients' => $clients,
    'pagination' => $pagination
  ];

};
