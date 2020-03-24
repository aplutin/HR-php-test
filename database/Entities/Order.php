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
     * @var string
     */
    private $delivery_dt = 0;
    /**
     * @var string
     */
    private $created_at = 0;
    /**
     * @var string
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
     * @return string
     */
    public function getDeliveryDt(): string
    {
        return $this->delivery_dt;
    }

    /**
     * @param string $delivery_dt
     * @return void
     */
    public function setDeliveryDt(string $delivery_dt): void
    {
        $this->delivery_dt = $delivery_dt;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @param string|null $created_at
     * @return void
     */
    public function setCreatedAt(?string $created_at = null): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    /**
     * @param string|null $updated_at
     * @return void
     */
    public function setUpdatedAt(?string $updated_at = null): void
    {
        $this->updated_at = $updated_at;
    }
}