<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Employee;


class OrderRepository implements OrderRepositoryInterface 
{
    public function getAllOrders() 
    {
        return Employee::all();
    }


}
