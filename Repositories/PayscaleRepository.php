<?php

namespace App\Repositories;

use App\Interfaces\PayscaleRepositoryInterface;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Payscale;
use App\Http\Requests\payscaleRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class PayscaleRepository implements PayscaleRepositoryInterface 
{
    public function index() 
    {
        $employees=Employee::get();
        $department=Department::get();
        $payscales=Payscale::with('employeedata','designationdata','departmentdata')->get();
        return [$department, $payscales,$employees];
    }
    public function store(Request $request){
        $data=$request->all();
        $insert=Payscale::create($data);
        return $insert;
    }
    public function display($id){
       $data= Payscale::with('employeedata','departmentdata','designationdata')->where('id',$id)->first();
        return $data;
    }
    public function update(Request $request){
      
    }
    public function destroy($id){
       
    } 
}
