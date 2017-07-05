# currency-change
get currency rate from remote api || file

## Installation

### Composer
The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run
```
php composer.phar require dykyi-roman/currency-change "dev-master"
```
or add
```
"dikiypac/currency-change": "master"
```
to the require section of your ```composer.json```

## Usage
```php
$currencyList = (new CurrencyList())->loadFromUrl(LINK_API);
$resource = new CurrencyGOVUA($currencyList);
$currency = new CurrencyChange($resource);
echo $currency->getDataExchange();
```

## Author
[Dykyi Roman](https://github.com/dykyi-roman/), e-mail: [mr.dukuy@gmail.com](mailto:mr.dukuy@gmail.com)
