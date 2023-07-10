<?php

namespace App\Repositories;

use App\Interfaces\EmployeeRepositoryInterface;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class EmployeeRepository implements EmployeeRepositoryInterface 
{
    public function index() 
    {
        $data=Employee::all();
        $department=Department::select('name','id')->get();
        return [$department, $data];
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            
            // Add more validation rules for other fields
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data=$request->all();  
        $store=Employee::create($data);
    }
    public function edit($id){
        $data=Employee::where('id',$id)->first();   
        return $data;
        
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('employees')->ignore($request->id),
                'max:255',
            ],
            'address' => 'required|string|max:255',
            'phone' => 'required|digits:10',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = Employee::where('id', $request->id)->first();

        if ($data) {
            $data->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'experience' =>$request->input('experience'),
                'profile'=>$request->input('profile'),
                'Previous_job'=>$request->input('Previous_job'),
                'previous_company'=>$request->input('previous_company'),
            ]);
        }
    }
    public function destroy($id){
        return Employee::find($id)->delete();
    } 
}
