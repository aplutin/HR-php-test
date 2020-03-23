<?php
/**
 * Created by Alex Plutin
 * Date: 21.03.2020
 */

namespace App\Database\EntityMapping\Fluent;

use App\Database\Entities\Order;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

/**
 * Class OrderMapping
 * @package App\Database\EntityMapping\Fluent
 */
class OrderMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return Order::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent $builder
     */
    public function map(Fluent $builder)
    {
        $builder->bigInteger('id')->unsigned()->primary()->autoIncrement();
        $builder->integer('status');
        $builder->string('client_email');
        $builder->integer('partner_id')->unsigned();
        $builder->integer('delivery_dt');
        $builder->integer('created_at')->nullable();
        $builder->integer('updated_at')->nullable();

        //$builder->belongsTo(Partner::class, 'partner_id');
    }
}