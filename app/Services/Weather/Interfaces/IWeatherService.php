<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Interfaces;

use App\Services\Weather\Dto\Weather;

/**
 * Interface IWeatherService
 * @package App\Services\Weather
 */
interface IWeatherService
{
    /**
     * Возвращает данные о погоде по IP пользователя
     *
     * @param string $clientIp
     * @return Weather
     */
    public function getByIp(string $clientIp): Weather;
}