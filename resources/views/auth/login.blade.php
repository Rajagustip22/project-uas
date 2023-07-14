@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">
                                                <input type="email" name="email" class="form-style @error('email') is-invalid @enderror" placeholder="Your Email" id="email" value="{{ old('email') }}" required autocomplete="email">
                                                <i class="input-icon uil uil-at"></i>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>    
                                            <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-style @error('password') is-invalid @enderror" placeholder="Your Password" id="password" required autocomplete="current-password">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn mt-4">Submit</button>
                                        </form>
                                        <p class="mb-0 mt-4 text-center"><a href="{{ route('password.request') }}" class="link">Forgot your password?</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Sign Up</h4>
                                        <!-- Signup form fields -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
