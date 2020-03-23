<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Yandex\Dto;

/**
 * Class ForecastRequest
 * @package App\Services\Weather\Yandex\Dto
 */
class ForecastRequest
{
    /**
     * Широта
     * @var string
     */
    public $lat = '';

    /**
     * Долгота
     * @var string
     */
    public $lon = '';

    /**
     * Язык ответа
     * @var string
     */
    public $lang = 'ru_RU';

    /**
     * Срок прогноза
     * @var int
     */
    public $limit = 1;

    /**
     * Наличие почасового прогноза
     * @var bool
     */
    public $hours = false;

    /**
     * Подробный прогноз осадков
     * @var bool
     */
    public $extra = false;

    /**
     * ForecastRequest constructor.
     * @param string $lat
     * @param string $lon
     */
    public function __construct(string $lat, string $lon)
    {
        $this->lat = $lat;
        $this->lon = $lon;
    }
}