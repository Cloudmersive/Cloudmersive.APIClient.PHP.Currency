# cloudmersive_currency_api_client
The currency APIs help you retrieve exchange rates and convert prices between currencies easily.

[Cloudmersive Currency API](https://www.cloudmersive.com/currency-api) help you retrieve exchange rates and convert prices between currencies easily.

- API version: v1
- Package version: 1.2.0


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_currency_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_currency_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_currency_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CurrencyExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source = "source_example"; // string | Source currency three-digit code (ISO 4217), e.g. USD, EUR, etc.
$destination = "destination_example"; // string | Destination currency three-digit code (ISO 4217), e.g. USD, EUR, etc.
$source_price = 1.2; // double | Input price, such as 19.99 in source currency

try {
    $result = $apiInstance->currencyExchangeConvertCurrency($source, $destination, $source_price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyExchangeApi->currencyExchangeConvertCurrency: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CurrencyExchangeApi* | [**currencyExchangeConvertCurrency**](docs/Api/CurrencyExchangeApi.md#currencyexchangeconvertcurrency) | **POST** /currency/exchange-rates/convert/{source}/to/{destination} | Converts a price from the source currency into the destination currency
*CurrencyExchangeApi* | [**currencyExchangeGetAvailableCurrencies**](docs/Api/CurrencyExchangeApi.md#currencyexchangegetavailablecurrencies) | **POST** /currency/exchange-rates/list-available | Get a list of available currencies and corresponding countries
*CurrencyExchangeApi* | [**currencyExchangeGetExchangeRate**](docs/Api/CurrencyExchangeApi.md#currencyexchangegetexchangerate) | **POST** /currency/exchange-rates/get/{source}/to/{destination} | Gets the exchange rate from the source currency into the destination currency


## Documentation For Models

 - [AvailableCurrency](docs/Model/AvailableCurrency.md)
 - [AvailableCurrencyResponse](docs/Model/AvailableCurrencyResponse.md)
 - [ConvertedCurrencyResult](docs/Model/ConvertedCurrencyResult.md)
 - [ExchangeRateResult](docs/Model/ExchangeRateResult.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




