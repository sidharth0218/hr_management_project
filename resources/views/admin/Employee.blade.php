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
          {!! Form::open(['route' => 'employee.store']) !!}
          <div class="card-body">
          
                 {!!  Form::label('Employee Name', 'Employee Name', ['class' => 'awesome']) !!}
                 {!! Form::text('name',null,['class' => 'form-control','id'=>'name','placeholder'=>'name' ,'required' => 'required'] )!!}
                 @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                 {!!  Form::label('address', 'address', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::text('address',null,['class' => 'form-control','id'=>'name','placeholder'=>'address' ,'required' => 'required'] )!!}
                 @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                 {!!  Form::label('email', 'email', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::email('email',null,['class' => 'form-control','id'=>'email','placeholder'=>'email' ,'required' => 'required'] )!!}
                 @if($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

                 {!!  Form::label('phone', 'phone', ['class' => 'awesome','style' =>'margin-top:7px']) !!}
                 {!! Form::text('phone',null,['class' => 'form-control','id'=>'phone','placeholder'=>'phone' ,'required' => 'required'] )!!}

                 @if($errors->has('phone'))
                 <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                 {!!  Form::label('experience', 'experience', ['class' => 'awesome d-flex  mb-3','style' =>'margin-top:7px']) !!}
                 {!! Form::text('experience',null,['class' => 'form-control','id'=>'experience','placeholder'=>'experience' ,'required' => 'required'] )!!}
                 @if($errors->has('experience'))
                 <span class="text-danger">{{ $errors->first('experience') }}</span>
                @endif
                {!! Form::label('Department','department',['class' => 'awesome','style' =>'margin-top:5px','required'=>'required']) !!}
                <select class="form-control" id="department" name="department">.
                  <option value="">ANY</option>
                  <?php foreach ($department as $key => $value) {?>
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                  <?php } ?>
                </select>
                {{-- {!! Form::select('department', ['id', $department], null, ['placeholder' => 'Pick one...','class'=>'form-control']) !!} --}}
                 {!!  Form::label('profile', 'profile', ['class' => 'awesome profile_label  ','style' =>'margin-top:7px']) !!}
                 <div class="profile"></div>                
                 {{-- {!! Form::text('profile',null,['class' => 'form-control','id'=>'profile','placeholder'=>'profile' ,'required' => 'required'] )!!} --}}
                 @if($errors->has('profile'))
                 <span class="text-danger">{{ $errors->first('profile') }}</span>
                 @endif
                 {!! Form::submit('Save !',['class'=>'btn btn-primary','style'=>'margin-top:7px'])  !!}
                 <button type="button" class="btn btn-primary" id="api-hit">API HIT</button>
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
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Employee</h3>
              <a href="javascript:void(0);">List</a>
            </div>
          </div>
         
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">email</th>
                  <th scope="col">address</th>
                  <th scope="col">phone</th>
                  <th scope="col">department</th>
                  <th scope="col">experience</th>
                  <th scope="col">bank_details</th>
                  <th scope="col">Profile</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td scope="row">{{ $item->id }}</td>
                  <th >{{ $item->name }}</th>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>{{ $item->department }}</td>
                  <td>{{ $item->experience }}</td>
                  <td>{{ $item->bank_details }}</td>
                  <td>{{ $item->profile }}</td>
                  <td><a href="{{ route('employee.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}">Delete</a></td>
                </tr>                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('.delete').click(function(){
        if(confirm('Are you Sure??')){
          var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
        {
            url: "employee/destroy/"+id,
            type: 'GET',
            data: {
                "id": id,
                "_token": token,
            },
            success: function (response){
                window.location.reload();
            }
        });
        }else{

        }
    });
    $('.profile_label').hide();
    $('#department').change(function(){
        var id=$(this).val();
        $.ajax({
          url:'designation-of-departments/'+id,
          type: 'GET',
            data: {
                "id": id,
            },
            success: function (response){
              console.log(response);
              var option=`<select class="form-control" name="profile" required>`;
              response.data[0].designations.forEach(function(design) {
                // Access individual design data
                option += `<option value=${design.id}>${design.designation}</option>`;
              });
              option += ' </select>';
              $('.profile_label').show();
                $('.profile').html(option);
            }
        })
    })
    $('#api-hit').click(()=>{
        $.ajax({
          url:'api/fetch',
          type:'GET',
          success: function(response){
            console.log(response.data.email);
          }
        })
    })
  })
</script>