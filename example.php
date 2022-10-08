<?php 

require __DIR__ . '/google-search.php';

use IhsanDevs\GoogleSearch;

$google_search = new GoogleSearch('Ihsan Devs', 'id', 10);

$results = $google_search->search();

var_dump($results);