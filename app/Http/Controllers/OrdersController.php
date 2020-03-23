<?php

namespace App\Http\Controllers;

use App\Database\Repositories\Interfaces\IOrderRepo;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class OrdersController
 * @package App\Http\Controllers
 */
class OrdersController extends Controller
{
    private $orderRepo;

    /**
     * OrdersController constructor.
     * @param IOrderRepo $orderRepo
     */
    public function __construct(IOrderRepo $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    /**
     * Список заказов
     *
     * @param Request $request
     * @return View
     */
    public function list(Request $request)
    {
        $page = (int)$request->get('page');
        $orders = $this->orderRepo->getAllPaginated($page);

        return view('orders.list', ['orders' => $orders]);
    }
}