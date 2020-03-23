<?php

namespace App\Http\Controllers;

use App\Services\Weather\Interfaces\IWeatherService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class WeatherController
 * @package App\Http\Controllers
 */
class WeatherController extends Controller
{
    /**
     * @var IWeatherService
     */
    private $weatherSupplier;

    /**
     * WeatherController constructor.
     * @param IWeatherService $weatherSupplier
     */
    public function __construct(IWeatherService $weatherSupplier)
    {
        $this->weatherSupplier = $weatherSupplier;
    }

    /**
     * Возвращает температуру по координатам пользззователя
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getTemperature(Request $request)
    {
        $clientIp = $request->getClientIp();
        $weather = $this->weatherSupplier->getByIp($clientIp);

        return response()->json(
            [
                'location' => $weather->getLocationName(),
                'value' => $weather->getTemperature()
            ]
        );
    }
}