<?php
/**
 * Created by Alex Plutin
 * Date: 21.03.2020
 */

namespace App\Database\Repositories\Interfaces;

use App\Database\Entities\Order;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Interface IOrderRepo
 * @package App\Database\Repositories\Interfaces
 */
interface IOrderRepo
{
    /**
     * Возвращает сущность заказа по его идентификатору или null если не находит его
     *
     * @param int $id
     * @return Order|null
     */
    public function find(int $id): ?Order;

    /**
     * Возвращает массив сущностей всех заказов
     *
     * @return array The entities.
     */
    public function findAll(): array;

    /**
     * Возвращает массив сущностей всех заказов используя пагинацию
     *
     * @param int $page
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllPaginated(int $page = 1, int $limit = 25): LengthAwarePaginator;

    /**
     * Поиск сущностей по критериям.
     * Критерия на основе соответствия наименование поля => значение соответствия. Пример ['columnName' => 'value']
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return array
     */
    public function findBy(array $criteria, ?array $orderBy = null, ?int $limit = null, ?int $offset = null): array;

    /**
     * Поиск сущности по критерии.
     * Критерия на основе соответствия наименование поля => значение соответствия. Пример ['columnName' => 'value']
     *
     * @param array $criteria
     * @return object|null
     */
    public function findOneBy(array $criteria): ?Order;

    public function save(Order $order): bool;
}