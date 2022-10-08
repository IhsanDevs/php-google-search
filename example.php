<?php 

require __DIR__ . '/vendor/autoload.php';

use Ihsandevs\PhpGoogleSearch;

$google_search = new PhpGoogleSearch\Search('Ihsan Devs', 'id', 10);

$results = $google_search->getResults();

var_dump($results);