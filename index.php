<?php

require_once "vendor/autoload.php";

use ismar\consultaCep\Search;

$busca = new Search;

print_r ($busca->getAddressFromZipcode('43700000'));