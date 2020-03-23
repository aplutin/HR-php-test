<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Services\Weather\Yandex\Adapters;

use App\Services\Weather\Yandex\Dto\Fact;
use App\Services\Weather\Yandex\Dto\ForecastResponse;
use Exception;

class ForecastResponseAdapter
{
    /**
     * Преобразует переданный json в объект ForecastResponse
     *
     * @param object $json
     * @return ForecastResponse
     * @throws Exception
     */
    public function handle(object $json): ForecastResponse
    {
        if (!isset($json->fact->temp)) {
            throw new Exception('Не удалось получить данные о погоде');
        }

        $forecastResponse = new ForecastResponse();
        $forecastResponse->now = $json->now ?? 0;
        $forecastResponse->now_dt = $json->now_dt ?? '';
        $forecastResponse->fact = $this->getFact($json->fact);

        return $forecastResponse;
    }

    /**
     * Преобразует переданный объект json в объект Fact
     *
     * @param object $jsonFact
     * @return Fact
     */
    private function getFact(object $jsonFact): Fact
    {
        $fact = new Fact();

        $fact->temp = $jsonFact->temp ?? null;
        $fact->feels_like = $jsonFact->feels_like ?? null;
        $fact->temp_water = $jsonFact->temp_water ?? null;
        $fact->icon = $jsonFact->icon ?? null;
        $fact->condition = $jsonFact->condition ?? null;
        $fact->wind_speed = $jsonFact->wind_speed ?? null;
        $fact->wind_gust = $jsonFact->wind_gust ?? null;
        $fact->wind_dir = $jsonFact->wind_dir ?? null;
        $fact->pressure_mm = $jsonFact->pressure_mm ?? null;
        $fact->pressure_pa = $jsonFact->pressure_pa ?? null;
        $fact->humidity = $jsonFact->humidity ?? null;
        $fact->daytime = $jsonFact->daytime ?? null;
        $fact->polar = $jsonFact->polar ?? null;
        $fact->season = $jsonFact->season ?? null;
        $fact->obs_time = $jsonFact->obs_time ?? null;
        $fact->prec_type = $jsonFact->prec_type ?? null;
        $fact->prec_strength = $jsonFact->prec_strength ?? null;
        $fact->cloudness = $jsonFact->cloudness ?? null;

        return $fact;
    }
}