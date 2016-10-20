# WeatherApi universal module

This package integrates the WeatherApi demo package in any [container-interop](https://github.com/container-interop/service-provider) compatible framework/container.

## Installation

```
composer require thecodingmachine/weatherapi-service-provider
```

Once installed, you need to register the [`TheCodingMachine\WeatherApi\WeatherApiServiceProvider`](src/WeatherApiServiceProvider.php) into your container.

If your container supports Puli integration, you have nothing to do. Otherwise, refer to your framework or container's documentation to learn how to register *service providers*.

## Introduction

This service provider is meant to **[fill purpose here]**.

## Expected values / services

This *service provider* expects the following configuration / services to be available:

| Name                        | Compulsory | Description                            |
|-----------------------------|------------|----------------------------------------|
| `Http\Client\HttpClient`       | *yes*       | A service providing a HTTPlug HttpClient  |
| `Psr\Log\LoggerInterface`       | *yes*       | A PSR-3 logger  |
| `Psr\Cache\CacheItemPoolInterface`       | *yes*       | A PSR-6 cache  |
| `openWeatherMapApiKey`       | *yes*       | An API key from OpenWeatherMap.com  |


## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `TheCodingMachine\WeatherApi\WeatherApi`              | The WeatherApi service  |

## Extended services

*None*

<small>Project template courtesy of <a href="https://github.com/thecodingmachine/service-provider-template">thecodingmachine/service-provider-template</a></small>
