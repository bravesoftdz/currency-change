<?php

namespace Dykyi;

require "../vendor/autoload.php";

define('LINK_API', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');

// Example
$currencyList = (new CurrencyList())->loadFromUrl(LINK_API);
$resource = new CurrencyGOVUA($currencyList);
$currency = new CurrencyChange($resource);
echo $currency->getDataExchange();