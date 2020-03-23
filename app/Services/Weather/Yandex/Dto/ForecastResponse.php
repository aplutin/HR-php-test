<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Yandex\Dto;

/**
 * Class ForecastResponse
 * @package App\Services\Weather\Yandex\Dto
 */
class ForecastResponse
{
    /**
     * Время сервера в формате Unixtime.
     * @var int
     */
    public $now = 0;

    /**
     * Время сервера в UTC.
     * @var string
     */
    public $now_dt = '';

    /**
     * Объект информации о населенном пункте.
     * @var mixed
     * @todo implement this https://yandex.ru/dev/weather/doc/dg/concepts/forecast-test-docpage/#resp-format__info
     */
    public $info;

    /**
     * Объект фактической информации о погоде.
     * @var Fact
     */
    public $fact;

    /**
     * Объект прогнозной информации о погоде.
     * @var mixed
     * @todo implement this https://yandex.ru/dev/weather/doc/dg/concepts/forecast-test-docpage/#resp-format__forecasts
     */
    public $forecasts;
}