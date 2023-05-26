@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Record Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Year : {{ $students->year }}</p>
        <p class="card-text">Course : {{ $students->course }}</p>
  </div>
    </hr>
  </div>
</div>