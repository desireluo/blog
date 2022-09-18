<?php

namespace App\Http\Controllers;

use App\Http\Service\ShapeService;
use App\Interfaces\OrderRepositoryInterface;

class OrderController extends Controller
{
    private OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index(ShapeService $shapeService)
    {

        return response()->json([
            'data' => $this->orderRepository->getAllOrders()
        ]);


    }




}
