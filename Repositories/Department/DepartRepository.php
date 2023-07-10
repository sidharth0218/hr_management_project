<?php 

use App\Contracts\admin\DepartInterface as DepartInterface;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;


class DepartRepository implements DepartInterface
{
        public function index(){
            return view('admin.Department');
        }


    // public function store(array $params)
    // {
    //    dd($params);
    // }
}