# currency-change
Get currency rate from remote api || file

## Installation
composer create-project --prefer-dist --stability=dev dykyi-roman/currency-change
## Usage
```php
define('LINK_API', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');

$currencyList = (new CurrencyList())->loadFromUrl(LINK_API);
$resource = new CurrencyGOVUA($currencyList);
$currency = new CurrencyChange($resource);
echo $currency->getDataExchange();
```

## Author
[Dykyi Roman](https://www.linkedin.com/in/roman-dykyi-43428543/), e-mail: [mr.dukuy@gmail.com](mailto:mr.dukuy@gmail.com)

