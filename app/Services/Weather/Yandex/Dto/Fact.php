<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Yandex\Dto;

/**
 * Class Fact
 * Описание см на https://yandex.ru/dev/weather/doc/dg/concepts/forecast-test-docpage/
 *
 * @package App\Services\Weather\Yandex\Dto
 */
class Fact
{
    /**
     * Температура (°C)
     * @var float
     */
    public $temp = 0.0;

    /**
     * Ощущаемая температура (°C)
     * @var float
     */
    public $feels_like = 0.0;

    /**
     * Температура воды (°C).
     * Параметр возвращается для населенных пунктов, где данная информация актуальна
     * @var float
     */
    public $temp_water = 0.0;

    /**
     * Код иконки погоды.
     * Иконка доступна по адресу https://yastatic.net/weather/i/icons/blueye/color/svg/<значение из поля icon>.svg.
     * @var string
     */
    public $icon = '';

    /**
     * Код расшифровки погодного описания. Возможные значения:
     *      clear — ясно.
     *      partly-cloudy — малооблачно.
     *      cloudy — облачно с прояснениями.
     *      overcast — пасмурно.
     *      partly-cloudy-and-light-rain — небольшой дождь.
     *      partly-cloudy-and-rain — дождь.
     *      overcast-and-rain — сильный дождь.
     *      overcast-thunderstorms-with-rain — сильный дождь, гроза.
     *      cloudy-and-light-rain — небольшой дождь.
     *      overcast-and-light-rain — небольшой дождь.
     *      cloudy-and-rain — дождь.
     *      overcast-and-wet-snow — дождь со снегом.
     *      partly-cloudy-and-light-snow — небольшой снег.
     *      partly-cloudy-and-snow — снег.
     *      overcast-and-snow — снегопад.
     *      cloudy-and-light-snow — небольшой снег.
     *      overcast-and-light-snow — небольшой снег.
     *      cloudy-and-snow — снег.
     * @var string
     */
    public $condition = '';

    /**
     * Скорость ветра (в м/с)
     * @var float
     */
    public $wind_speed = 0.0;

    /**
     * Скорость порывов ветра (в м/с).
     * @var float
     */
    public $wind_gust = 0.0;

    /**
     * Направление ветра. Возможные значения:
     *      «nw» — северо-западное.
     *      «n» — северное.
     *      «ne» — северо-восточное.
     *      «e» — восточное.
     *      «se» — юго-восточное.
     *      «s» — южное.
     *      «sw» — юго-западное.
     *      «w» — западное.
     *      «с» — штиль.
     * @var string
     */
    public $wind_dir = '';

    /**
     * Давление (в мм рт. ст.)
     * @var float
     */
    public $pressure_mm = 0.0;

    /**
     * Давление (в гектопаскалях)
     * @var float
     */
    public $pressure_pa = 0.0;

    /**
     * Влажность воздуха (в процентах)
     * @var float
     */
    public $humidity = 0.0;

    /**
     * Светлое или темное время суток. Возможные значения:
     *      «d» — светлое время суток.
     *      «n» — темное время суток.
     * @var string
     */
    public $daytime = '';

    /**
     * Признак полярного дня или ночи
     * @var bool
     */
    public $polar = false;

    /**
     * Время года в данном населенном пункте. Возможные значения:
     *      «summer» — лето.
     *      «autumn» — осень.
     *      «winter» — зима.
     *      «spring» — весна.
     * @var string
     */
    public $season = '';

    /**
     * Время замера погодных данных в формате Unixtime.
     * @var int
     */
    public $obs_time = 0;

    /**
     * Тип осадков. Возможные значения:
     *      0 — без осадков.
     *      1 — дождь.
     *      2 — дождь со снегом.
     *      3 — снег.
     * @var int
     */
    public $prec_type = 0;

    /**
     * Сила осадков. Возможные значения:
     *      0 — без осадков.
     *      0.25 — слабый дождь/слабый снег.
     *      0.5 — дождь/снег.
     *      0.75 — сильный дождь/сильный снег.
     *      1 — сильный ливень/очень сильный снег.
     * @var float
     */
    public $prec_strength = 0.0;

    /**
     * Облачность. Возможные значения:
     *      0 — ясно.
     *      0.25 — малооблачно.
     *      0.5 — облачно с прояснениями.
     *      0.75 — облачно с прояснениями.
     *      1 — пасмурно.
     * @var float
     */
    public $cloudness = 0.0;
}