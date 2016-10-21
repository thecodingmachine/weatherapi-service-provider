<?php

namespace TheCodingMachine\WeatherApi;

use Http\Client\HttpClient;
use Interop\Container\ContainerInterface;
use Interop\Container\ServiceProvider;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;

class WeatherApiServiceProvider implements ServiceProvider
{
    public function getServices()
    {
        return [
            WeatherApi::class => function(ContainerInterface $container) {
                return new WeatherApi($container->get(HttpClient::class),
                              $container->get(LoggerInterface::class),
                              $container->get(CacheItemPoolInterface::class),
                              $container->get('openWeatherMapApiKey')
                );
            }
        ];
    }
}
