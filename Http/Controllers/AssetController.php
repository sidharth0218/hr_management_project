<?php

namespace App\Http\Controllers;
use App\Models\Asset;
use App\Models\Employee;
use App\Models\asset_employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    public function index(){
        $employees=Employee::get();
        $assets=Asset::with('asset_employee')->get();
        return view('admin.asset',compact('employees','assets'));
    }
    public function store(Request $request){
        $data=$request->all();         
        $validator = Validator::make($request->all(), [
            'asset_name' => 'required|string|max:255',
            'assign_in' => 'required|string|max:255',
            'model_no' => 'required|string|max:255',            
            // Add more validation rules for other fields
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
            Asset::create($data);
            return redirect()->route('asset.create');
    }
    public function assiging_to_employee($id){
        $asset=Asset::where('id',$id)->first();
        $employees=Employee::get();
        return view('admin.assign',compact('asset','employees'));
    }
    public function assigned(Request $request){
        $data=$request->all();
        asset_employee::create($data);
        return redirect()->route('asset.create');
    }
    public function unassiging_to_employee($id){
            $data=asset_employee::where('asset_id',$id)->first();
            $data->delete();
            return redirect()->route('asset.create');
    }
    

}
