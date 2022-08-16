@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Details</h2>
            </div>
        </div>
    </div>
   
   <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
  
    <form action="{{ route('user_pref.update',$userPref->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Equipment</strong>
                    <input type="text" name="attraction" value="{{ $userPref->attraction }}" class="form-control" placeholder="equipment">
                </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Experiment</strong>
                    <input type="text" class="form-control" name="dayStay" value="{{ $userPref->dayStay }}" placeholder="dayStay"></input>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date</strong>
                    <input type="text" class="form-control" name="budget" value="{{ $userPref->budget }}" placeholder="budget"></input>
         </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Time</strong>
                    <input type="text" class="form-control" name="foodType" value="{{ $userPref->foodType }}" placeholder="foodType"></input>
                </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('user_pref.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection
