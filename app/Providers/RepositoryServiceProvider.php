<?php
/**
 * Created by Alex Plutin
 * Date: 21.03.2020
 */

namespace App\Providers;

use App\Database\Repositories\Doctrine\OrderRepo;
use App\Database\Repositories\Interfaces\IOrderRepo;
use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(IOrderRepo::class, OrderRepo::class);
    }
}