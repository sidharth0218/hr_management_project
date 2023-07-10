<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;
use App\Interfaces\EmployeeRepositoryInterface;
use App\Traits\ApiResponser;

class EmployeeController extends Controller
{   
    use ApiResponser;
    private EmployeeRepositoryInterface $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository) 
    {
        $this->employeeRepository = $employeeRepository;
    }
    public function index()
    {
        [$department, $data] = $this->employeeRepository->index();
        return view('admin.Employee', compact('data', 'department'));
    }

    public function apiresources(){
        $data = Employee::with('departments')->where('id',2)->first();
        return $this->successResponse(UserResource::make($data),'Employee details collected successfully!');
    }
    public function store(Request $request){
        
            $this->employeeRepository->store($request);
        return redirect()->route('employee.create');

    }
    public function edit($id){
           $data= $this->employeeRepository->edit($id);
        return view('admin.edit',compact(['data']));
    }
    public function update(Request $request){
        $this->employeeRepository->update($request);
        return  redirect()->route('employee.create');
    }
    public function destroy($id){
            $data=$this->employeeRepository->destroy($id);
            // $data=Employee::find($id)->delete();
            if(!$data == ''){
                return response()->json(['type' => 'success', 'msg' => 'Employee is deleted successfully.']);
            }
            else{
                return response()->json(['type' => 'danger', 'msg' => 'Employee is deleted  not successfully.']);
            }
    }

}
