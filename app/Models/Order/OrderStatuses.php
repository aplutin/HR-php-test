<?php
/**
 * Created by Alex Plutin
 * Date: 21.03.2020
 */

namespace App\Models\Order;

/**
 * Class OrderStatuses
 * @package App\Models\Order
 */
class OrderStatuses
{
    /**
     * @var int Статус нового заказа
     */
    public const NEW = 0;

    /**
     * @var int Статус подтвержденного заказа
     */
    public const COMFIRMED = 10;

    /**
     * @var int Статус завешенного заказа
     */
    public const COMPLETED = 20;
}