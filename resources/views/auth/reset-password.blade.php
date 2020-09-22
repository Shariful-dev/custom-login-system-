<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Metronic | Reset Password</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{!! asset('assets/admin/css/login_css/login-5.min.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->
    <link href="{!! asset('assets/admin/css/style.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <link rel="shortcut icon" href="{!! asset('assets/admin/media/favicon.ico') !!}"/>
  </head>
  <body>
    <div class="d-flex flex-column flex-root">
      <!--begin::Login-->
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({!! asset('assets/admin/media/bg-2.jpg') !!});">
          <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
            <!--begin::Login Header-->
            <div class="d-flex flex-center mb-15">
              <a href="{!! route('login') !!}">
                <img src="{!! asset('assets/admin/media/logo-letter-13.png') !!}" class="max-h-75px" alt=""/>
              </a>
            </div>
            <div class="login-signin">
              <div class="mb-20">
                <h3 class="opacity-40 font-weight-normal">Reset Password</h3>
                <p class="opacity-40">Enter Your Email and Your New Password</p>
              </div>
              <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group">
                  <input id="email" type="email" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input id="password-confirm" type="password" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Reset Password</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
