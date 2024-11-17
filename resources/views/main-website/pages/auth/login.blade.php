@extends('layouts.auth')

@section('main-content')
    <div class="section-auth">
        <div class="wrapper">
            <div class="col-left">
                <img src="{{ ('/img/img-login.png') }}" alt="">
            </div>
            <div class="col-right">
                <img class="logo" src="{{ ('/img/logo-with-text.png') }}" alt="sai cowork">
                <h1>Hi. Welcome Back!</h1>
                <p>Login to your account</p>
                <form action="">
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" name="" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password">
                            <img src="{{ ('/img/icon-eye.png') }}" alt="">
                        </div>
                    </div>
                    <div class="disclaimer-group">
                        <span>This is your password to login to SaiCowork App</span>
                        <a href="{{ '/forgot-password' }}">Forgot password?</a>
                    </div>
                    <button>Login</button>
                </form>
                <p class="forgot-password">Don't have an account? <a href="{{ '/sign-up' }}">Create an account</a></p>
            </div>
        </div>
    </div>
@endsection