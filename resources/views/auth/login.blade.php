@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        Email atau password salah!
                    </div>
                @endforeach

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                        @error('password')
                            <div class="invalid-feedback">
                                Please fill in your password
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                    </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              ERP Kelas B &copy; Nisrina Nuraini Aliva 12030120140126
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
