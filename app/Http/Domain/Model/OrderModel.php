<?php

namespace App\Http\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'orders';

    private $orderSn;

    private $id;

    private $amount;

    private $name;

    /**
     * @return mixed
     */
    public function getOrderSn()
    {
        return $this->orderSn;
    }

    /**
     * @param mixed $orderSn
     */
    public function setOrderSn($orderSn): void
    {
        $this->orderSn = $orderSn;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}
