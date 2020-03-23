<?php
/**
 * Created by Alex Plutin
 * Date: 21.03.2020
 */

namespace App\Database\Entities;

/**
 * Class Order
 * @package App\Database\Entities
 */
class Order
{
    /**
     * @var int
     */
    private $id = 0;
    /**
     * @var int
     */
    private $status = 0;
    /**
     * @var string
     */
    private $client_email = '';
    /**
     * @var int
     */
    private $partner_id = 0;
    /**
     * @var int
     */
    private $delivery_dt = 0;
    /**
     * @var int
     */
    private $created_at = 0;
    /**
     * @var int
     */
    private $updated_at = 0;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return void
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getClientEmail(): string
    {
        return $this->client_email;
    }

    /**
     * @param string $client_email
     * @return void
     */
    public function setClientEmail(string $client_email): void
    {
        $this->client_email = $client_email;
    }

    /**
     * @return int
     */
    public function getPartnerId(): int
    {
        return $this->partner_id;
    }

    /**
     * @param int $partner_id
     * @return void
     */
    public function setPartnerId(int $partner_id): void
    {
        $this->partner_id = $partner_id;
    }

    /**
     * @return int
     */
    public function getDeliveryDt(): int
    {
        return $this->delivery_dt;
    }

    /**
     * @param int $delivery_dt
     * @return void
     */
    public function setDeliveryDt(int $delivery_dt): void
    {
        $this->delivery_dt = $delivery_dt;
    }

    /**
     * @return int|null
     */
    public function getCreatedAt(): ?int
    {
        return $this->created_at;
    }

    /**
     * @param int|null $created_at
     * @return void
     */
    public function setCreatedAt(?int $created_at = null): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return int|null
     */
    public function getUpdatedAt(): ?int
    {
        return $this->updated_at;
    }

    /**
     * @param int|null $updated_at
     * @return void
     */
    public function setUpdatedAt(?int $updated_at = null): void
    {
        $this->updated_at = $updated_at;
    }
}