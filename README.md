<h1 align="center" id="title">Awesome Google Search</h1>

<p align="center"><img src="https://socialify.git.ci/IhsanDevs/php-google-search/image?description=1&amp;font=Source%20Code%20Pro&amp;forks=1&amp;issues=1&amp;language=1&amp;name=1&amp;owner=1&amp;pattern=Circuit%20Board&amp;pulls=1&amp;stargazers=1&amp;theme=Light" alt="project-image"></p>

<p id="description">Awesome Google Search PHP using Python binary simple script.</p>

  
  
<h2>🧐 Features</h2>

Here're some of the project's best features:

*   Simple to use
*   Less risk of getting captcha
*   You can customize the search result item total
*   Want to set the language specification of the search results? certainly can

<h2>🛠️ Installation Steps:</h2>

<p>1. Install using Composer</p>

```bash
composer require ihsandevs/php-google-search
```

To use it, just call `Ihsandevs\PhpGoogleSearch\Search` class.
Example:

```php
<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Ihsandevs\PhpGoogleSearch\Search;

$query = "Something"; // Query to search
$lang = "ID" // Locale code for language of search result (default: en)
$total_result = 10; // Total result item (default: 10)
$google_search = new Search($query, $lang, $total_result);
$results = $google_search->getResult(); // done
```


<h2>💻 Built with</h2>

Technologies used in the project:

*   Python
*   PHP

<h2>💖Like my work?</h2>

Like this library? Just star this repository.