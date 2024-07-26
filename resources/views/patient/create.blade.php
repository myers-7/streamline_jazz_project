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
   
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>first name:</strong>
                <input  type="text" name="first_name" maxlength='255' minlength='1' class="form-control" placeholder="first name" value="{{old('first_name')}}">
                <br>
                
                 @if ($errors->has('first_name'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('first_name') }}
                    </div>
                @endif
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>last name:</strong>
                <input  type="text" name="last_name"  maxlength='255' minlength='1' class="form-control" placeholder="last name" value="{{old('last_name')}}">
                <br>

                @if ($errors->has('last_name'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('last_name') }}
                    </div>
                @endif
                <!-- //value="{{old('last_name')}}"> -->
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gender:</strong>
                <input  type="radio" id="male" name="gender" value="M">
                <label for="male">Male</label>
                 <input type="radio" id="female" name="gender" value="F">
                <label for="female">Female</label>

                @if ($errors->has('gender'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <!-- //value="{{old('gender')}}" -->
    
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone number:</strong>
                <input  type="text" maxlength= '14' minlength= '10' name="phone_number" class="form-control"
                placeholder="contact" value="{{old('phone_number')}}">

                @if ($errors->has('phone_number'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <!-- //value="{{old('phone_number')}}" -->
    
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date of birth:</strong>
                <input  type="date" name="date_of_birth" min='1850-01-01' max='2024-07-25' 
                class="form-control" placeholder="D.O.B" value="{{old('dat_of_birth')}}">

                @if ($errors->has('date_of_birth'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <!-- //value="{{old('dat_of_birth')}}" -->
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>marital status:</strong> 
                <input  type="radio" id="single" name="marital_status" value="1" @if(old('single')=='1') checked @endif>
                <label for="single">Single</label>
                <input  type="radio" id="married" name="marital_status" value="2" @if(old('married')=='2') checked @endif>
                <label for="married">Married</label>
                <input  type="radio" id="divorced" name="marital_status" value="3" @if(old('divorced')=='3') checked @endif>
                <label for="divorced">Divorced</label>
                <input  type="radio" id="widowed" name="marital_status" value="3" @if(old('widowed')=='4') checked @endif>
                <label for="widowed">Widowed</label>

                @if ($errors->has('marital_status'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('marital_status') }}
                    </div>
                @endif
                <!-- //value="{{old('marital_status')}}" -->
    
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIN:</strong>
                <input  type="text" maxlength= '14' minlength = '14' name="nin" class="form-control" 
                placeholder="NIN" value="{{old('nin')}}">

                @if ($errors->has('nin'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('nin') }}
                    </div>
                @endif
                <!-- //value="{{old('nin')}}" -->
    
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>next of kin:</strong>
                <input  type="text" maxlength = '255' minlength = '1' name="next_of_kin" class="form-control"
                placeholder="next of kin" value="{{old('next_of_kin')}}">

                @if ($errors->has('next_of_kin'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('next_of_kin') }}
                    </div>
                @endif
                <!-- //value="{{old('next_of_kin')}}" -->
    
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>N.O.K phone number:</strong>
                <input  type="text" maxlength= '14' minlength= '10' name="kin_phone_number" class="form-control" 
                placeholder="contact" value="{{old('kin_phone_number')}}">

                @if ($errors->has('kin_phone_number'))  
                    <div class="alert alert-danger" role="alert">  
                        {{ $errors->first('kin_phone_number') }}
                    </div>
                @endif
                <!-- //value="{{old('kin_phone_number')}}" -->
            </div>
        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>relationship:</strong>
            <select name="relationship" id="relationship">
                <option value="1" @if(old('relationship')=='1') selected @endif>Father</option>
                <option value="2" @if(old('relationship')=='2') selected @endif>Mother</option>
                <option value="3" @if(old('relationship')=='3') selected @endif>Sister</option>
                <option value="4" @if(old('relationship')=='4') selected @endif>Brother</option>
                <option value="5" @if(old('relationship')=='5') selected @endif>Spouse</option>
             </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection