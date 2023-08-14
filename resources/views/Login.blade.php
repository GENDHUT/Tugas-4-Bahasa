@extends('Layouts.header1')

@section('con')

<div class="row justify-content-center">
    <div class="col-md-5">
        @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <main class="form-signin">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please lOG-in</h1>
    <form action="/login" method="post">
      <img class="mb-4" src="../assets/images/cta-banner.png" alt="" width="72" height="57">

      <div class="form-floating">
        <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
            <div class="invali-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Log-in</button>
     <small class="d-block text-center mt-3">Not Registered?<a href="/register">Register Now!</a></small>
    </form>
    <p class="mt-5 mb-3 text-muted text-center">&copy; GENDHUT & Khairul</p>
  </main>

</div>
</div>

@endsection
