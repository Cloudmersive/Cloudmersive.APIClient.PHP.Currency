# Swagger\Client\CurrencyExchangeApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyExchangeConvertCurrency**](CurrencyExchangeApi.md#currencyExchangeConvertCurrency) | **POST** /currency/exchange-rates/convert/{source}/to/{destination} | Converts a price from the source currency into the destination currency
[**currencyExchangeGetAvailableCurrencies**](CurrencyExchangeApi.md#currencyExchangeGetAvailableCurrencies) | **POST** /currency/exchange-rates/list-available | Get a list of available currencies and corresponding countries
[**currencyExchangeGetExchangeRate**](CurrencyExchangeApi.md#currencyExchangeGetExchangeRate) | **POST** /currency/exchange-rates/get/{source}/to/{destination} | Gets the exchange rate from the source currency into the destination currency


# **currencyExchangeConvertCurrency**
> \Swagger\Client\Model\ConvertedCurrencyResult currencyExchangeConvertCurrency($source, $destination, $source_price)

Converts a price from the source currency into the destination currency

Automatically converts the price in the source currency into the destination currency using the latest available currency exchange rate data.

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | **string**| Source currency three-digit code (ISO 4217), e.g. USD, EUR, etc. |
 **destination** | **string**| Destination currency three-digit code (ISO 4217), e.g. USD, EUR, etc. |
 **source_price** | **double**| Input price, such as 19.99 in source currency |

### Return type

[**\Swagger\Client\Model\ConvertedCurrencyResult**](../Model/ConvertedCurrencyResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyExchangeGetAvailableCurrencies**
> \Swagger\Client\Model\AvailableCurrencyResponse currencyExchangeGetAvailableCurrencies()

Get a list of available currencies and corresponding countries

Enumerates available currencies and the countries that correspond to these currencies.

### Example
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

try {
    $result = $apiInstance->currencyExchangeGetAvailableCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyExchangeApi->currencyExchangeGetAvailableCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AvailableCurrencyResponse**](../Model/AvailableCurrencyResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyExchangeGetExchangeRate**
> \Swagger\Client\Model\ExchangeRateResult currencyExchangeGetExchangeRate($source, $destination)

Gets the exchange rate from the source currency into the destination currency

Automatically gets the exchange rate from the source currency into the destination currency using the latest available currency exchange rate data.

### Example
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

try {
    $result = $apiInstance->currencyExchangeGetExchangeRate($source, $destination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyExchangeApi->currencyExchangeGetExchangeRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | **string**| Source currency three-digit code (ISO 4217), e.g. USD, EUR, etc. |
 **destination** | **string**| Destination currency three-digit code (ISO 4217), e.g. USD, EUR, etc. |

### Return type

[**\Swagger\Client\Model\ExchangeRateResult**](../Model/ExchangeRateResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

