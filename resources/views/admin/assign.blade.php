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
          
          {!! Form::open(['route' => 'assigned.store']) !!}
          <div class="card-body">               
               {!!  Form::label('Assign_Name', 'Assign_Name', ['class' => 'awesome']) !!}
               {{-- {!! Form::text('',null,['class' => 'form-control','id'=>'name','placeholder'=>'name' ,'required' => 'required'] )!!} --}}
               <div class="col-lg-4">
                  <input type="text" value="{{ $asset->asset_name }}" readonly class="form-control" name="asset_name">
                  <input type="text" value="{{ $asset->id }}" hidden class="form-control" name="asset_id">
                  <input type="text" value="assigned" hidden  readonly class="form-control" name="status">
                {{-- <select name="assign_name" class="form-control">
                    <option value="">Any Pick</option>
                    @foreach ($asset as $item)
                        <option value="{{ $item->id }}">{{ $item->asset_name }}</option>
                    @endforeach
                  </select> --}}
               </div>
               
               @if($errors->has('asset_name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
          
               <div class="col-lg-4">
                {!!  Form::label('Employees', 'Employees', ['class' => 'awesome']) !!}
                <select name="employee_id" class="form-control">
                    <option value="">Any Pick Employee</option>
                    @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
               </div>
                 {!! Form::submit('Assigned !',['class'=>'btn btn-primary','style'=>'margin-top:7px'])  !!}
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
   
  })
</script>