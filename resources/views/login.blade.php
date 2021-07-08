
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
                            <div class="flex-container">
                                <img src="{{asset('images/login-images/logo_color.svg')}}" width="40%" alt="logo" />
                            </div>
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
                            <form class="form-horizontal marginal-top" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="messages"></div>

                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control" name="email" placeholder="Email address" required="required" data-error="Email is required." value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input id="password-field" type="password"
                                               placeholder="Password"
                                               class="form-control" name="password" class="form-control" placeholder="Password" required="required" data-error="Password is required.">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                </div>
                               <input type="submit"/>

                            </form>
                        </div>
                    </div>

                </div>


            </div> <!--account-login-->

        </div><!--main-container-->

    </div>


    @endsection