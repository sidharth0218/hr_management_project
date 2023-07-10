@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Payscale </h3>
                <a href="javascript:void(0);">Form</a>
              </div>
            </div>
            {{-- {{ dd($data) }} --}}
            {!! Form::open(['route' => 'print']) !!}
            <div class="card-body">               
                 {!!  Form::label('Salary', 'Salary', ['class' => 'awesome']) !!}
                 <div class="col-lg-6">
                    <input type="text"  class="form-control" name="salary" readonly value="{{ $data->salary }}" placeholder="Salary/payscale">
                 </div>
                 @if($errors->has('salary'))
                    <span class="text-danger">{{ $errors->first('salary') }}</span>
                @endif
            
                 <div class="col-lg-6">
                  {!!  Form::label('employee', 'employee', ['class' => 'awesome']) !!}
                  <input type="text"  class="form-control" name="employee" readonly value="{{ $data->employeedata->name }}" placeholder="Salary/payscale">
                  <input type="text" name="email" hidden  value="{{ $data->employeedata->email }}"> 
                  <input type="text" name="phone"  hidden value="{{ $data->employeedata->phone }}">
                  <input type="text" name="address" hidden value="{{ $data->employeedata->address }}">
                 </div>
                 <div class="col-lg-6">
                    {!! Form::label('department','department',['class' =>'awesome']) !!}
                    <input type="text"  class="form-control" name="department" readonly value="{{ $data->departmentdata->name }}" placeholder="Salary/payscale">
                        
                 </div>
                 <div class="col-lg-6">
                  {!! Form::label('designation','designation',['class'=>'awesome profile_label mt-3']) !!}
                    <input type="text" readonly value="{{ $data->designationdata->designation }}" name="designation" class="form-control">
                 </div>
                 <div class="col-lg-6 mb-3">
                    {!! Form::label('joining','joining',['class' =>'awesome mt-3']) !!}
                    <input type="text"  class="form-control" name="joining" readonly value="{{ $data->joining }}" placeholder="Salary/payscale">
                    
                 </div>
                   {!! Form::submit('PDF-Generate',['class'=>'btn btn-primary','style'=>'margin-top:7px'])  !!}
            </div>
          </div>
          <!-- /.card -->
  
         
          <!-- /.card -->
        </div>
     
        {!! Form::close() !!}
      </div>
   
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
@endsection

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){    
            
    })
    </script>