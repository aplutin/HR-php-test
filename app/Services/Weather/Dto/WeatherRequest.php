<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Dto;

/**
 * Class WeatherRequest
 * @package App\Services\Weather\Dto
 */
class WeatherRequest
{
    /**
     * @var string
     */
    public $locationName = '';
    /**
     * @var string
     */
    public $latitude = '';
    /**
     * @var string
     */
    public $longitude = '';
}