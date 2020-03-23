<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Yandex;

use App\Services\Weather\Dto\Weather;
use App\Services\Weather\Interfaces\IWeatherService;
use App\Services\Weather\Yandex\Dto\ForecastRequest;
use Exception;

class WeatherService implements IWeatherService
{
    /**
     * @var ForecastDataAccessor
     */
    private $dataAccessor;

    /**
     * WeatherService constructor.
     * @param ForecastDataAccessor $dataAccessor
     */
    public function __construct(ForecastDataAccessor $dataAccessor)
    {
        $this->dataAccessor = $dataAccessor;
    }

    /**
     * Возвращает данные о погоде по IP пользователя
     *
     * @param string $clientIp
     * @return Weather
     * @throws Exception
     */
    public function getByIp(string $clientIp): Weather
    {
        $geoData = geoip($clientIp);
        $city = $geoData['city'];
        $lat = $geoData['lat'];
        $lon = $geoData['lon'];

        $forecastResponse = $this->dataAccessor->getData(new ForecastRequest($lat, $lon));

        $weather = new Weather();
        $weather->setLocationName($city);
        $weather->setTemperature($forecastResponse->fact->temp);

        return $weather;
    }
}