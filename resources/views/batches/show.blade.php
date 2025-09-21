@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $batch->name }}</h5>
        <p class="card-text">Course: {{ $batch->course->name }}</p>
        <p class="card-text">start_date : {{ $batch->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection