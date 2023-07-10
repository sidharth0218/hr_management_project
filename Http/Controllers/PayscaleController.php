<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Payscale;
use App\Http\Requests\payscaleRequest;
use Illuminate\Http\Request;
use App\Interfaces\PayscaleRepositoryInterface;
use Barryvdh\DomPDF\Facade\Pdf;

class PayscaleController extends Controller
{

    private PayscaleRepositoryInterface $payscaleRepository;

    public function __construct(PayscaleRepositoryInterface $payscaleRepository) 
    {
        $this->payscaleRepository = $payscaleRepository;
    }
    public function index(){
        [$department,$payscales,$employees] = $this->payscaleRepository->index();   
        return view('admin.payscale',compact('employees','department','payscales'));
    }
    public function store(payscaleRequest $request){
        $insert=$this->payscaleRepository->store($request);
        if($insert){
            return redirect()->route('employee.payscale')->with('success', 'Data has been successfully stored.')->send();
        }else{
            return redirect()->route('employee.payscale')->send();
        }
    }
    public function display($id){
           $data=$this->payscaleRepository->display($id);
           return view('admin.payscale-form',compact('data'));
    }
    public function print(Request $request){
        $data=$request->all();
        $employee_name = $data['employee'];
        $department=$data['department'];
        $designation=$data['designation'];
        $joining=$data['joining'];
        $salary=$data['salary'];
        $address=$data['address'];
        $phone=$data['phone'];
        $email=$data['email'];
        $invoiceData = [
            'employee' => $employee_name,
            'department' => $department,
            'joining_date' => $joining,
            'designation' => $designation,
            'salary'=>$salary,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address
        ];
        $pdf = PDF::loadView('admin/invoice', compact('invoiceData'));
        return $pdf->download('invoice.pdf');
    }
}
