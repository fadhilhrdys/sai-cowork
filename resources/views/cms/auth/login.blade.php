@extends('cms.layouts.main')

@section('cms-content')

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <img class="pb-4" src="{{ ('/img/logo-black-header.png') }}" alt="">

                        @if(session()->has('registered'))
                            <div class="alert alert-success fade show" role="success">
                                {{ session('registered') }}
                            </div>
                        @elseif(session()->has('errorAuth'))
                            <div class="alert alert-danger fade show" role="error">
                                {{ session('errorAuth') }}
                            </div>
                        @endif

                        <div class="card mb-3">

                            <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            </div>

                            <form class="row g-3 needs-validation" action="{{ route('admin_authenticate') }}" method="POST" novalidate>
                                @csrf
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Don't have account? <a href="{{ route('admin_register') }}">Create an account</a></p>
                                </div>
                            </form>

                            </div>
                        </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

@endsection
