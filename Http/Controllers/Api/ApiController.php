<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\RegisterResource;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class ApiController extends Controller
{
    use ApiResponser;
    public function register(Request $request){
        $data=$request->all();
        $create=User::create($data);
        if($create){
            return response()->json(['type' => 'success', 'msg' => 'user is deleted successfully.']);
        }
        else{
            return response()->json(['type' => 'danger','msg' =>'user is not']);
        }
    }
    public function index(){
        $data=User::where('id',2)->first();
        return $this->successResponse(RegisterResource::make($data),'Employee details collected successfully!');
    }
    // public function 
}
