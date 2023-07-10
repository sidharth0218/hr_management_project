@extends('admin.layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Asset</h3>
              <a href="javascript:void(0);">Form</a>
            </div>
          </div>
          {!! Form::open(['route' => 'asset.store']) !!}
          <div class="card-body">
          
                 {!!  Form::label('Asset Name', 'Asset Name', ['class' => 'awesome']) !!}
                 {!! Form::text('asset_name',null,['class' => 'form-control','id'=>'name','placeholder'=>'name' ,'required' => 'required'] )!!}
                 @if($errors->has('asset_name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                
                {!!  Form::label('modal_no', 'modal_no', ['class' => 'awesome']) !!}
                {!! Form::text('model_no',null,['class' => 'form-control','id'=>'name','placeholder'=>'modal_no' ,'required' => 'required'] )!!}
                @if($errors->has('model_no'))
                   <span class="text-danger">{{ $errors->first('model_no') }}</span>
               @endif
               
               {{-- {!!  Form::label('Assign_in', 'Assign_in', ['class' => 'awesome']) !!} --}}
               {{-- {!! Form::text('',null,['class' => 'form-control','id'=>'name','placeholder'=>'name' ,'required' => 'required'] )!!} --}}
               {{-- <div class="col-lg-4">
                <select name="assign_in" class="form-control">
                    <option value="free">Free</option>
                    <option value="assign">Assign</option>
                   </select>
               </div> --}}
               
               @if($errors->has('asset_name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
               {{-- <div class="col-lg-4">
                {!!  Form::label('Employees', 'Employees', ['class' => 'awesome']) !!}
                <select name="employee_id" class="form-control">
                    <option value="">Any Pick</option>
                    @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
               </div> --}}
                 {!! Form::submit('Save !',['class'=>'btn btn-primary','style'=>'margin-top:7px'])  !!}
          </div>
        </div>
        <!-- /.card -->

       
        <!-- /.card -->
      </div>
   
      {!! Form::close() !!}
    </div>
    <div class="row">
      <div class="col-lg-12">
                <!-- Button trigger modal -->
        
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Assets</h3>
              <a href="javascript:void(0);">List</a>
            </div>
          </div>
         
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">assign_in</th>
                  <th scope="col">model_no</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               
                @foreach ($assets as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->asset_name }}</td>
                    <td>{{ $item->assign_in }}</td>
                    <td>{{ $item->model_no }}</td>
                    <td><a href="{{ route('edit_assets',$item->id)  }}" class="btn btn-primary mr-3">Edit</a><a href="{{ route('delete_assets',$item->id)  }}" class="btn btn-danger mr-3">Delete</a>
                      <?php if($item->asset_employee == Null){ ?><a href="{{ route('assigning.employee',$item->id) }}" class="btn btn-success mr-3">Assigned</a><?php } else{?><a href="{{ route('unassigned.employee',$item->id) }}" class="btn btn-info">Release</a><?php }?></td>
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
        $.ajax({
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
   
  })
</script>