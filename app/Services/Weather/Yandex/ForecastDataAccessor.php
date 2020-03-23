<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Yandex;

use App\Services\Weather\Yandex\Adapters\ForecastResponseAdapter;
use App\Services\Weather\Yandex\Dto\ForecastRequest;
use App\Services\Weather\Yandex\Dto\ForecastResponse;
use Exception;
use GuzzleHttp\Client;

/**
 * Class ForecastDataAccessor
 * @package App\Services\Weather\Yandex
 */
class ForecastDataAccessor
{
    /**
     * @var ForecastResponseAdapter
     */
    protected $adapter;

    /**
     * Базовая часть url сервиса погоды
     * @var string
     */
    protected $baseUrl = 'https://api.weather.yandex.ru/v1/';
    /**
     * Адрес сервиса погоды
     * @var string
     */
    protected $url = 'forecast';

    /**
     * ForecastDataAccessor constructor.
     * @param ForecastResponseAdapter $adapter
     */
    public function __construct(ForecastResponseAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * Метод получает данные о прогнозе погоды
     *
     * @param ForecastRequest $forecastRequest
     * @return ForecastResponse
     * @throws Exception
     */
    public function getData(ForecastRequest $forecastRequest): ForecastResponse
    {
        $config = ['base_uri' => $this->baseUrl];
        $queryArray = (array)$forecastRequest;

        $options = [
            'query' => $queryArray,
            'headers' => [
                'X-Yandex-API-Key' => config('app.yandexWeatherKey'),
                'Accept' => 'application/json',
            ],
        ];

        $client = new Client($config);

        $response = $client->request('GET', $this->url, $options)
            ->getBody()
            ->getContents();

        return $this->adapter->handle(json_decode($response, false));
    }
}