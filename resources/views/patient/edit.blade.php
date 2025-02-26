@extends('patient.layout') 
  
@section('content')
<div class="row"> 
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New patient</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=#> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('patients.update', $patient->id) }}" method="PUT">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>first name:</strong>
                <input  type="text" name="first_name" class="form-control" placeholder="first name" value= "{{$patient->first_name}}"> 
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>last name:</strong>
                <input  type="text" name="last_name" class="form-control" placeholder="first name" value= "{{$patient->last_name}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gender:</strong>
                <input  type="radio" id="male" name="gender" value="M" value= "{{$patient->gender}}">
                <label for="male">Male</label>
                 <input type="radio" id="female" name="gender" value="F" value= "{{$patient->gender}}">
                <label for="female">Female</label>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date of birth:</strong>
                <input  type="date" name="date_of_birth" class="form-control" placeholder="D.O.B">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>marital status:</strong>
                <input  type="radio" id="single" name="marital_status" value="1">
                <label for="single">Single</label>
                <input  type="radio" id="married" name="marital_status" value="2">
                <label for="married">Married</label>
                <input  type="radio" id="divorced" name="marital_status" value="3">
                <label for="divorced">Divorced</label>
                <input  type="radio" id="widowed" name="marital_status" value="4">
                <label for="widowed">Widowed</label>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIN:</strong>
                <input  type="text" name="nin" class="form-control" placeholder="NIN" value= "{{$patient->nin}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone number:</strong>
                <input  type="text" name="phone_number" class="form-control" placeholder="contact" value= "{{$patient->phone_number}}">
            </div>
        </div>

       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>next of kin:</strong>
                <input  type="text" name="next_of_kin" class="form-control" placeholder="next of kin" value= "{{$patient->next_of_kin}}"
                >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>N.O.K phone number:</strong>
                <input  type="text" name="kin_phone_number" class="form-control" placeholder="contact" value= "{{$patient->kin_phone_number}}">
            </div>
        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>relationship:</strong>
            <select name="relationship" id="relationship" value= "{{$patient->kin_phone_number}}">
                <option value="1">Father</option>
                <option value="2">Mother</option>
                <option value="3">Sister</option>
                <option value="4">Brother</option>
                <option value="5">Spouse</option>
             </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection