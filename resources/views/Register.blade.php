@extends('layouts.header1')

@section('con')

<div class="row justify-content-center">
    <div class="col-lg-5">
    <main class="form-registration">
    <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
    <form action="/register" method="post">
        @csrf
      <img class="mb-4" src="../assets/images/cta-banner.png" alt="" width="72" height="57">

      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name')
            is-invalid
        @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')
        is-invalid
    @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email address</label>

        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password')
        is-invalid
    @enderror" id="Password" placeholder="Password" required>
        <label for="Password">Password</label>

        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small class="d-block text-center mt-3">Alredy Registered?<a href="/login">Login Now!</a></small>
    <p class="mt-5 mb-3 text-muted text-center">&copy; GENDHUT & Khairul</p>
  </main>

</div>
</div>

@endsection
