@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollment->id}}" id="id" />
        <label>Enroll_no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollment->enroll_no}}"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrollment->batch->name}}"></br>
        <label>student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollment->student->name}}"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control" value="{{$enrollment->join_date}}"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollment->fee}}"></br>
        <input type="submit" value="update" class="btn btn-success"></br>

    </form>
   
  </div>
</div>
 
@stop