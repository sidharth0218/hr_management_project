@extends('admin.layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Department</h3>
              <a href="javascript:void(0);">Form</a>
            </div>
          </div>
          {!! Form::open(['route' => 'designation.store','method' =>'post']) !!}
          <div class="card-body">
          
                 {!!  Form::label('Department Name', 'Department Name', ['class' => 'awesome','required' => 'required']) !!}
                 <select name="department_name" class="form-control">
                    @foreach ($data as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                 @if($errors->has('name'))
                 <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
                 {!!  Form::label('Designation', 'Designation', ['class' => 'awesome','required' => 'required']) !!}
                 {!! Form::text('designation',null,['class' => 'form-control','id'=>'designation','placeholder'=>'designation','required' => 'required'] )!!}
                 @if($errors->has('designation'))
                 <span class="text-danger">{{ $errors->first('designation') }}</span>
             @endif
                 {!! Form::submit('SAVE',  ['class'=>'btn btn-primary mt-2',])!!}
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
{{-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> --}}