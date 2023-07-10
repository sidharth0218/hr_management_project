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
          {!! Form::open(['route' => 'department.store','method' =>'post']) !!}
          <div class="card-body">
          
                 {!!  Form::label('Department Name', 'Department Name', ['class' => 'awesome','required' => 'required']) !!}
                 {!! Form::text('name',null,['class' => 'form-control','id'=>'name','placeholder'=>'Department name','required' => 'required'] )!!}
                 @if($errors->has('name'))
                 <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
                 {{-- {!!  Form::label('Designation', 'Designation', ['class' => 'awesome','required' => 'required']) !!}
                 {!! Form::text('designation',null,['class' => 'form-control','id'=>'designation','placeholder'=>'designation','required' => 'required'] )!!}
                 @if($errors->has('designation'))
                 <span class="text-danger">{{ $errors->first('designation') }}</span>
             @endif --}}
                 {!! Form::submit('SAVE',  ['class'=>'btn btn-primary mt-2',])!!}
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
              <h3 class="card-title">Department</h3>
              <a href="javascript:void(0);">List</a>
            </div>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
               <tr><th>Department</th><th>Designation</th></tr>
              </thead>
              @foreach ($data as $item)
              <tr><td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->designation }}</td><td><a href="  " class="btn btn-primary">Edit</a><a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}">Delete</a></td></tr>    
              @endforeach             
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
            url: "department/destroy/"+id,
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
         
    })
})
</script>