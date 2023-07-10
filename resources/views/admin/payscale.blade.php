@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Assign</h3>
                <a href="javascript:void(0);">Form</a>
              </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
            @endif
            {!! Form::open(['route' => 'payscale.store']) !!}
            <div class="card-body">               
                 {!!  Form::label('Salary', 'Salary', ['class' => 'awesome']) !!}
                 <div class="col-lg-6">
                    <input type="text"  class="form-control" name="salary"  value="{{ old('salary') }}" placeholder="Salary/payscale">
                 </div>
                 @if($errors->has('salary'))
                    <span class="text-danger">{{ $errors->first('salary') }}</span>
                @endif
            
                 <div class="col-lg-6">
                  {!!  Form::label('employee', 'employee', ['class' => 'awesome']) !!}
                 <select name="employee" class="form-control">
                    @foreach ($employees as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                 </select>
                 </div>
                 <div class="col-lg-6">
                    {!! Form::label('department','department',['class' =>'awesome']) !!}
                     <select name="department" id="department_id" class="form-control" required>
                      <option value="">Pick Any department</option>
                        @foreach ($department as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach    
                    </select>   
                 </div>
                 <div class="col-lg-6">
                  {!! Form::label('designation','designation',['class'=>'awesome profile_label mt-3']) !!}
                    <div class="profile"></div>
                 </div>
                 <div class="col-lg-6">
                    {!! Form::label('joining','joining',['class' =>'awesome mt-3']) !!}
                    {!! Form::date('joining',null,['class' =>'form-control','placeholder'=>'experience']) !!}
                 </div>
                   {!! Form::submit('Submit.',['class'=>'btn btn-primary','style'=>'margin-top:7px'])  !!}
            </div>
          </div>
          <!-- /.card -->
  
         
          <!-- /.card -->
        </div>
     
        {!! Form::close() !!}
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Payscale</h3>
                <a href="javascript:void(0);">List</a>
              </div>
            </div>
            <div class="card-body">               
              <table class="table">
                <thead>
                  <tr>
                    <th>Employee</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th> Date of Joining</th>
                  </tr>
                </thead>
                <tbody> 
                  
                    @foreach ($payscales as $item)
                    <tr>
                    <td> {{ $item->employeedata->name }}</td>
                    <td>{{ $item->departmentdata->name }}</td>
                    <td>{{ $item->designationdata->designation }}</td>
                    <td>{{ $item->joining }}</td>
                    <td><a href="{{ route('payscale.list',$item->id) }}" class="btn btn-primary">Print</a></td>  
                  </tr>  
                    @endforeach
                  
                </tbody>
                </table>
               
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
      $('.profile_label').hide();
            $('#department_id').change(function(){
                var id=$(this).val();
                    $.ajax({
                    url:'designation-of-departments/'+id,
                    type: 'GET',
                        data: {
                            "id": id,
                        },
                        success: function (response){
                        var option=`<select class="form-control" name="designation" required>`;
                        response.data[0].designations.forEach(function(design) {
                            // Access individual design data
                            option += `<option value=${design.id}>${design.designation}</option>`;
                        });
                        option += '</select>';
                        $('.profile_label').show();
                            $('.profile').html(option);
                        }
                    })
            })
          
    })
    </script>