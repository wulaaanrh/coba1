@extends('layouts.main')

@section('container')
<link rel="stylesheet" type="text/css" href="css/login.css">
<body>
<div class="row justify-content-center">
<div class="col-md-4">

      @if(session()->has('success'))
      <div class="alert alert-succes alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <div class="kotak">
        <main class="form-signin">
            <h1 class="h1">Please Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                 <div class="invalid-feedback">
                   {{ $message }}
                 </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="form-group row">
                <label class="mb-2 center"></label>
                <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
              </div>

              <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Login</button>
            </form>
            <small class="p">Not registered? <a href="/register" style="color:#e28383;">Register Now! </a></small>
        </main>
  </div>
</div>
</div>
</body>
@endsection