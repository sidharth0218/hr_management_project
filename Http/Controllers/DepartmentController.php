<?php

namespace App\Http\Controllers;
use App\Contracts\admin\DepartInterface;
use App\Models\Department;
use App\Models\Designation;
use App\Repositories\Department\DepartRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{

    protected $DepartRepository;

    // public function __construct(DepartInterface $DepartRepository)
    // {
    //     $this->DepartRepository = $DepartRepository;
    // }

    public function index(){
        $data=Department::get();
        return view('admin.department',compact('data'));
    //    r $this->DepartRepository->index();eturn
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:departments|max:255',
           
            // Add more validation rules for other fields
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data=$request->all();
        $store=Department::create($data);
        return redirect()->route('department.create');
        // return $this->DepartRepository->store($request->all());
    }
    public function destroy($id){
           $data= Department::find($id)->delete();
           if(!$data == ''){
            return response()->json(['type' => 'success', 'msg' => 'Department is deleted successfully.']);
           }
           else{
            return response()->json(['type' => 'danger', 'msg' => 'Deaprtment is deleted not  successfully.']);
           }
    }
    public function fetch_designation($id){ 
            $data=Department::with('designations')->where('id',$id)->get();
            return response()->json(['type' => 'success', 'msg' => 'Department is fetch successfully.','data'=>$data]);
    }
    public function designation(){
        $data=Department::get();
        return view('admin.designation',compact('data'));
    }
    public function designation_store(Request $request){
            $dd=$request->all();
            Designation::create($dd);
            return redirect()->route('designation.create');

    }
}
