<?php
/**
 * Created by Alex Plutin
 * Date: 21.03.2020
 */

namespace App\Database\Repositories\Doctrine;

use App\Database\Entities\Order;
use App\Database\Repositories\Interfaces\IOrderRepo;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ObjectRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use LaravelDoctrine\ORM\Pagination\PaginatesFromParams;

/**
 * Class OrderRepo
 * @package App\Database\Repositories\Doctrine
 */
class OrderRepo implements IOrderRepo
{
    use PaginatesFromParams;

    /**
     * @var ObjectRepository
     */
    private $repository;
    /**
     * @var EntityManager
     */
    private $entityManager;
    /**
     * @var string
     */
    private $tableName = 'orders';

    /**
     * OrdersRepo constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository(Order::class);
    }

    /**
     * Возвращает сущность заказа по его идентификатору или null если не находит его
     *
     * @param int $id
     * @return Order|null
     */
    public function find(int $id): ?Order
    {
        return $this->repository->find($id);
    }

    /**
     * Возвращает массив сущностей всех заказов
     *
     * @return array
     */
    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    /**
     * Возвращает массив сущностей всех заказов используя пагинацию
     *
     * @param int $page
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAllPaginated(int $page = 1, int $limit = 25): LengthAwarePaginator
    {
        return $this->paginateAll($limit, $page);
    }

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
    public function findBy(array $criteria, ?array $orderBy = null, ?int $limit = null, ?int $offset = null): array
    {
        return $this->repository->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * Поиск сущности по критерии.
     * Критерия на основе соответствия наименование поля => значение соответствия. Пример ['columnName' => 'value']
     *
     * @param array $criteria
     * @return object|null
     */
    public function findOneBy(array $criteria): ?Order
    {
        return $this->repository->findOneBy($criteria);
    }

    /**
     * @param Order $order
     * @return bool
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function save(Order $order): bool
    {
        $this->entityManager->persist($order);
        $this->entityManager->flush($order);
    }

    /**
     * Creates a new QueryBuilder instance that is prepopulated for this entity name.
     *
     * @param string $alias
     * @param string $indexBy The index for the from.
     *
     * @return QueryBuilder
     */
    protected function createQueryBuilder($alias, $indexBy = null)
    {
        return $this->repository->createQueryBuilder($alias, $indexBy);
    }
}