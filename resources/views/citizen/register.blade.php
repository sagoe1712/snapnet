
@extends('layouts.landing')

@section('content')
    <div class="main-login-bg">

        <div class="main">
            <div class="account-login container">
                <!--page-title-->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="login-img">
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="login-card">
                      
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            @if ($errors->has('password'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            <form class="form-horizontal marginal-top" method="POST" action="{{ url('/citizen/register') }}">
                                {{ csrf_field() }}

                                <div class="messages"></div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="required" data-error="name is required." value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                    <select ass="form-control" name="gender">
                                    <option value="">Select Your Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    </select>
                                      
                                 </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control" name="Address" placeholder="Address" required="required" data-error="Address is required." value="{{ old('address') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required" data-error="Phone is required." value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control" name="email" placeholder="Email address" required="required" data-error="Email is required." value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">     
                                     <select ass="form-control" name="state">
<option value="">Select State</option>
                                @foreach($state as $states)
                                            <option value="{{$states->id}}">{{$states->name}}</option>
                                        @endforeach
                                     </select>
                                    </div>
                                </div>
                              
                              <button type="submit">Register</button>

                            </form>
                        </div>
                    </div>

                </div>


            </div> <!--account-login-->

        </div><!--main-container-->

    </div>


    @endsection