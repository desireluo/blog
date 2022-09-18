<?php

namespace App\Http\repository;

use App\Http\Domain\Model\OrderModel;
use App\Interfaces\OrderRepositoryInterface;


class OrderRepository implements OrderRepositoryInterface
{
    public function getAllOrders()
    {
        return [[
            'id' => 1,
        ], ['id' => 2], ['id' => 3]];
        return OrderModel::query()->get();

    }

    public function getOrderById($orderId)
    {
        // TODO: Implement getOrderById() method.
    }

    public function deleteOrder($orderId)
    {
        // TODO: Implement deleteOrder() method.
    }

    public function createOrder(array $orderDetails)
    {
        // TODO: Implement createOrder() method.
    }

    public function updateOrder($orderId, array $newDetails)
    {
        // TODO: Implement updateOrder() method.
    }

    public function getFulfilledOrders()
    {
        // TODO: Implement getFulfilledOrders() method.
    }

}
