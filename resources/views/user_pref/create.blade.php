@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New </h2>
        </div>
       
    </div>
</div>
   
 <!--@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --> 
   
<form action="{{ route('user_pref.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Equipment:</strong>
                <input type="text" class="form-control" name="attraction" placeholder="Equipment">
     </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Experiment:</strong>
                <input type="text" name="dayStay" class="form-control" placeholder="Experiment">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                <input type="text" class="form-control" name="budget" placeholder="Date">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Time</strong>
                <input type="text" class="form-control" name="foodType" placeholder="Time">
            </div>
            
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('user_pref.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection