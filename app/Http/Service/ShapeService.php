<?php

namespace App\Http\Service;

use App\Http\Domain\Shape;

class ShapeService
{

    public function execute(Shape $shape)
    {

        return $shape->area();

    }


    public function getPerimeter(Shape $shape)
    {
        return $shape->perimeter();

    }
}
