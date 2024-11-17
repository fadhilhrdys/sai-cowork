@extends('layouts.auth')

@section('main-content')
    <div class="section-auth">
        <div class="wrapper">
            <div class="col-left">
                <img src="{{ ('/img/img-sign-up.png') }}" alt="">
            </div>
            <div class="col-right">
                <img class="logo" src="{{ ('/img/logo-with-text.png') }}" alt="sai cowork">
                <h1>Sign up to Sai Cowork</h1>
                <form action="">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" name="" id="">
                    </div>
                    <div class="password-group">
                        <div class="form-group">
                            <label for="">Password</label>
                            <div class="input-group">
                                <input type="password">
                                <img src="{{ ('/img/icon-eye.png') }}" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <div class="input-group">
                                <input type="password">
                                <img src="{{ ('/img/icon-eye.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Your Mobile Phone</label>
                        <div class="input-group">
                            <input type="number">
                        </div>
                        <span>Please enter your active mobile number, as we will send SMS verification code to you.</span>
                    </div>
                    <button>Sign Up</button>
                </form>
                <p class="forgot-password">Already have an account <a href="{{ '/login' }}">Login</a></p>
            </div>
        </div>
    </div>
@endsection