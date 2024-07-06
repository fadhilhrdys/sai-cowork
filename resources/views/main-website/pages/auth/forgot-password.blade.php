@extends('layouts.auth')

@section('main-content')
    <div class="section-auth">
        <div class="wrapper">
            <div class="col-left">
                <img src="{{ ('/img/img-login.png') }}" alt="">
            </div>
            <div class="col-right">
                <img class="logo" src="{{ ('/img/logo-with-text.png') }}" alt="sai cowork">
                <h1>Forgot Password?</h1>
                <p>Enter the email address you used when you joined and we’ll send you instructions to reset your password.</p>
                <form action="">
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" name="" id="">
                    </div>
                    <button>Send Reset Instructions</button>
                </form>
            </div>
        </div>
    </div>
@endsection