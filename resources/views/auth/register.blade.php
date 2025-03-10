@extends('layouts.main-auth')

@section('main')
<main>
  <div class="row g-0">
    <div class="col-lg-7 vh-100 d-none d-lg-block">
      <div class="swiper h-100"
        data-swiper-options='{ 
                "pagination":{
                    "el":".swiper-pagination",
                    "clickable":"true"
                }}'>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="card rounded-0 h-100" data-bs-theme="dark"
              style="background-image:url({{ asset('images/auth/01.jpg') }}); background-position: center left; background-size: cover;">
              <div class="bg-overlay bg-dark opacity-5"></div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="card rounded-0 h-100" data-bs-theme="dark"
              style="background-image:url({{ asset('images/auth/02.jpg') }}); background-position: center left; background-size: cover;">
              <div class="bg-overlay bg-dark opacity-5"></div>

            </div>
          </div>

          <div class="swiper-slide">
            <div class="card rounded-0 h-100" data-bs-theme="dark"
              style="background-image:url({{ asset('images/auth/03.jpg') }}); background-position: center left; background-size: cover;">
              <div class="bg-overlay bg-dark opacity-5"></div>

            </div>
          </div>
        </div>

        <div class="swiper-pagination swiper-pagination-line mb-3"></div>
      </div>
    </div>

    <div class="col-sm-10 col-lg-5 d-flex m-auto vh-100">
      <div class="row w-100 m-auto">
        <div class="col-lg-10 my-5 m-auto">

          <h2 class="mb-0">Buat akun
            <span class="position-relative">anda
              <span class="position-absolute top-50 start-50 translate-middle z-index-n1 ms-n2 mt-2 d-none d-sm-block">
                <svg width="150.1px" height="20.7px" viewBox="0 0 150.1 20.7"
                  style="enable-background:new 0 0 150.1 20.7;" xml:space="preserve">
                  <path class="fill-primary"
                    d="M10.7,12.2c-0.8,0.2-1.7,0.4-2.3,1.1C9.3,13,10.1,12.9,10.7,12.2 M63.6,1.9c3.3,0.3,6.7,0.1,10,0.2 c4.8,0.1,9.6,0.2,14.4,0.7c2.9,0.3,5.9,0.3,8.8,0.8c6.9,1,13.7,1.8,20.6,3.1c5.5,1.1,11,2.1,16.4,3.3c4.8,1.1,9.5,2.6,14.3,4 c0.7,0.2,1.3,0.5,1.7,1c-0.3,0.6-0.8-0.2-1.1,0.3c0.3,0.4,1.6,0.2,1.2,1c-0.3,0.6-1.2,1.1-2.2,1c-1.4-0.2-2.6-1-4-1.3 c-6.1-1.4-12.2-3-18.4-4c-3.8-0.6-7.6-1.4-11.5-1.7c-2.1-0.2-4.1-1-6.3-0.9c-0.5,0-1-0.3-1.6,0.2c-0.2,0.2-1,0.5-1.1-0.5 c0-0.2-0.4-0.1-0.6-0.2c-2.5-0.2-5-0.8-7.5-0.7c-2.4,0.1-4.8-0.3-7.2-0.3c-1.7,0-3.3-0.8-5.1-0.7c-0.7,0-1.5-0.1-2.2,0.2 c-0.3,0-0.5-0.1-0.8-0.1c-1.8-0.3-3.7-0.5-5.5-0.2c-1.9-0.4-3.9-0.4-5.8-0.1C68.1,7,66.1,6.8,64,7.4c-0.9,0.3-1.8,0.1-2.8,0.2 c-3.1,0.3-6.3,0.6-9.4,0.8c-0.6,0-1.2,0.3-1.8-0.2c-1.6-0.2-3.2,0-4.8,0.5c-1.6,0.5-3.2,0.4-4.8,0.5c-2.1,0.2-4.1,0.4-6,1.2 c-1.6,0.7-3.5,0.5-5.2,0.9c-3.8,0.9-7.7,1.6-11.2,3.2c-3.8,1.7-8,2.4-11.7,4.4c-0.9,0.5-1.7,1.3-2.8,1.6c-1.1,0.3-2.8-0.3-3.4-1.5 c-0.5-1-0.3-2.1,0.6-2.9c1.7-1.4,3.5-2.5,5.4-3.5c8.2-4.3,16.9-7,25.9-9c8.8-1.9,17.7-3,26.7-3.5C63.5-0.1,68.1,0,72.6,0 c4.7,0,9.4,0.1,14.1,0.5c4.2,0.4,8.3,0.9,12.5,1.4c4.9,0.6,9.7,1.3,14.5,2.1c11.6,2.1,23.1,4.4,34.2,8.4c0.7,0.3,1.7,0.1,2.2,1.1 c-0.9,0.4-1.7,0.1-2.4-0.1c-5.7-2-11.6-3.5-17.4-4.9c-8.7-2.1-17.5-3.3-26.3-4.7c-4.2-0.7-8.6-0.9-12.8-1.5 c-5.6-0.7-11.3-0.9-16.9-1.1c-3.4-0.1-6.8-0.1-10.1,0.3C63.9,1.6,63.7,1.7,63.6,1.9c-0.6-0.5-1.2-0.2-1.9-0.2 C56.9,1.9,52,2.3,47.1,2.8C44.1,3.1,41.1,3.7,38,4c-3.2,0.4-6.4,1.2-9.5,2.1c-0.9,0.2-2.1,0-2.7,1.1c-1.4-0.5-2.5,0.4-3.6,1 c1.2-0.2,2.5-0.4,3.6-1c0.3,0,0.7,0,1-0.1c9.1-2.3,18.4-3.7,27.7-4.4C57.6,2.4,60.6,2.2,63.6,1.9" />
                </svg>
              </span>
            </span>
          </h2>
          <p class="mb-0">Mari mulai dengan Zalfeet!</p>

          <form method="POST" action="{{ route('register') }}" class="mt-5">
            @csrf
            <div class="input-floating-label form-floating mb-3">
              <input type="text" name="name" class="form-control" id="floatingInput"
                placeholder="Nama anda">
              <label for="floatingInput">Nama</label>
            </div>

            @if ($errors->has('name'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('name') }}
            </div>
            @endif

            <div class="input-floating-label form-floating mb-3">
              <input type="email" name="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
              <label for="floatingInput">Email</label>
            </div>

            @if ($errors->has('email'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('email') }}
            </div>
            @endif

            <div class="input-floating-label form-floating position-relative mb-3">
              <input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input"
                placeholder="Enter your password">
              <label for="floatingInput">Password</label>
              <span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
                <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
              </span>
            </div>

            @if ($errors->has('password'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('password') }}
            </div>
            @endif

            <div class="input-floating-label form-floating position-relative mb-3">
              <input type="password" name="password_confirmation" class="form-control fakepassword2 pe-6"
                id="psw-input-2" placeholder="Enter your password">
              <label for="floatingInput">Konfirmasi Password</label>
              <span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
                <i class="fakepasswordicon2 fas fa-eye-slash cursor-pointer p-2"></i>
              </span>
            </div>

            @if ($errors->has('password_confirmation'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('password_confirmation') }}
            </div>
            @endif

            <div class="input-floating-label form-floating mb-3">
              <input type="date" name="date_of_birth" class="form-control" id="floatingInput"
                placeholder="Tanggal Lahir">
              <label for="floatingInput">Tanggal Lahir</label>
            </div>

            @if ($errors->has('date_of_birth'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('date_of_birth') }}
            </div>
            @endif

            <div class="mb-3">
              <label class="form-label">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Laki-laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Perempuan</label>
              </div>
            </div>

            @if ($errors->has('gender'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('gender') }}
            </div>
            @endif

            <div class="input-floating-label form-floating mb-3">
              <input type="text" name="alamat" class="form-control" id="floatingInput"
                placeholder="Alamat anda">
              <label for="floatingInput">Alamat</label>
            </div>

            @if ($errors->has('alamat'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('alamat') }}
            </div>
            @endif

            <div class="input-floating-label form-floating mb-3">
              <input type="text" name="phone" class="form-control" id="floatingInput"
                placeholder="Nomor ponsel anda">
              <label for="floatingInput">Nomor Ponsel</label>
            </div>

            @if ($errors->has('phone'))
            <div class="alert alert-danger mt-2" role="alert">
              {{ $errors->first('phone') }}
            </div>
            @endif

            <div class="mb-3">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-1">
                <label class="form-check-label" for="checkbox-1">Saya setuju dengan semua Syarat & Ketentuan serta
                  kebijakan privasi.</label>
              </div>
            </div>

            <div class="align-items-center mt-0">
              <div class="d-grid">
                <button class="btn btn-dark mb-0" type="submit">Buat akun</button>
              </div>
            </div>
          </form>

          <div class="mt-3 text-center">
            <span>Already have an account?<a href="{{ route('login') }}"> Masuk di sini</a></span>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>
@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
  <x-input-label for="name" :value="__('Name')" />
  <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
  <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
  <x-input-label for="email" :value="__('Email')" />
  <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
  <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
  <x-input-label for="password" :value="__('Password')" />

  <x-text-input id="password" class="block mt-1 w-full"
    type="password"
    name="password"
    required autocomplete="new-password" />

  <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
  <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

  <x-text-input id="password_confirmation" class="block mt-1 w-full"
    type="password"
    name="password_confirmation" required autocomplete="new-password" />

  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
    {{ __('Already registered?') }}
  </a>

  <x-primary-button class="ms-4">
    {{ __('Register') }}
  </x-primary-button>
</div>
</form>
</x-guest-layout> --}}