<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Dto;

/**
 * Class Weather
 * @package App\Services\Weather\Dto
 */
class Weather
{
    /**
     * @var string
     */
    private $locationName = 'Undefined';
    /**
     * @var int
     */
    private $temperature = 0;

    /**
     * @return string
     */
    public function getLocationName(): string
    {
        return $this->locationName;
    }

    /**
     * @param string $locationName
     */
    public function setLocationName(string $locationName): void
    {
        $this->locationName = $locationName;
    }

    /**
     * @return int
     */
    public function getTemperature(): int
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature(int $temperature): void
    {
        $this->temperature = $temperature;
    }
}