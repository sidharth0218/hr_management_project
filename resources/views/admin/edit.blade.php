@extends('admin.layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Employee</h3>
              <a href="javascript:void(0);">Form</a>
            </div>
          </div>
          {!! Form::open(['route' => 'employee.update']) !!}
          <div class="card-body">
                    <input type="text" hidden value="{{ $data->id }}" name="id">
                 {!!  Form::label('Employee Name', 'Employee Name', ['class' => 'awesome']) !!}
                 {!! Form::text('name',$data->name,['class' => 'form-control','id'=>'name','placeholder'=>'name' ,'required' => 'required'] )!!}
                 @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                 {!!  Form::label('address', 'address', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::text('address',$data->address,['class' => 'form-control','id'=>'name','placeholder'=>'address' ,'required' => 'required'] )!!}
                 @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                 {!!  Form::label('email', 'email', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::email('email',$data->email,['class' => 'form-control','id'=>'email','placeholder'=>'email' ,'required' => 'required'] )!!}
                 @if($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                 {!!  Form::label('phone', 'phone', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::text('phone',$data->phone,['class' => 'form-control','id'=>'phone','placeholder'=>'phone' ,'required' => 'required'] )!!}
                 @if($errors->has('phone'))
                 <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                 {!!  Form::label('experience', 'experience', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::text('experience',$data->experience,['class' => 'form-control','id'=>'experience','placeholder'=>'experience' ,'required' => 'required'] )!!}
                 @if($errors->has('experience'))
                 <span class="text-danger">{{ $errors->first('experience') }}</span>
                @endif
                 {!!  Form::label('profile', 'profile', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::text('profile',$data->profile,['class' => 'form-control','id'=>'profile','placeholder'=>'profile' ,'required' => 'required'] )!!}
                 @if($errors->has('profile'))
                 <span class="text-danger">{{ $errors->first('profile') }}</span>
                 @endif
                 {!! Form::submit('Update !',['class'=>'btn btn-primary','style'=>'margin-top:7px'])  !!}
          </div>
        </div>
        <!-- /.card -->

       
        <!-- /.card -->
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Expereincs</h3>
              <a href="javascript:void(0);">Details</a>
            </div>
          </div>
          <div class="card-body">
           
                 {!!  Form::label('Previous Job ', 'Previous Job', ['class' => 'awesome']) !!}
                 {!! Form::text('Previous_job',null,['class' => 'form-control','id'=>'previous_job','placeholder'=>'previous_job'] )!!}
                 {!!  Form::label('previous_company', 'previous_company', ['class' => 'awesome']) !!}
                 {!! Form::text('previous_company',null,['class' => 'form-control','id'=>'previous_company','placeholder'=>'previous_company'] )!!}
               
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