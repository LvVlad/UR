<?php declare(strict_types=1);

require_once 'vendor/autoload.php';
require "app/ApiClient.php";

$search = (int) readline('Enter registration number you are searching for: ');

$client = new \App\ApiClient();
$records = $client->search($search);

echo $records->getName().PHP_EOL;
echo $records->getRegNumber().PHP_EOL;
echo $records->getAddress().PHP_EOL;
echo $records->getType().PHP_EOL;