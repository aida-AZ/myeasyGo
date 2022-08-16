@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Details</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipment</strong>
                {{ $userPref->attraction }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Experiment:</strong>
                {{ $userPref->dayStay }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $userPref->budget }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time:</strong>
                {{ $userPref->foodType }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user_pref.index') }}"> Back</a>
        </div>
    </div>
@endsection