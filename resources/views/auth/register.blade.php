<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Metronic | Register</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{!! asset('assets/admin/css/login_css/login-5.min.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    {{-- <link href="{!! asset('assets/admin/plugins/global/plugins.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('assets/admin/plugins/prismjs/prismjs.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/> --}}
    <link href="{!! asset('assets/admin/css/style.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <link rel="shortcut icon" href="{!! asset('assets/admin/media/favicon.ico') !!}"/>
  </head>
  <body class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({!! asset('assets/admin/media/bg-2.jpg') !!});">
          <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
          <!--begin::Login Sign up form-->
          <div class="login-signup">
            <div class="mb-20">
              <h3 class="opacity-40 font-weight-normal">Sign Up</h3>
              <p class="opacity-40">Enter your details to create your account</p>
            </div>
            <form action="{!! route('register') !!}" method="post">
              @csrf
              <div class="form-group ">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('name') is-invalid @enderror"  type="text" placeholder="Fullname" name="name" value="{{ old('name') }}"/>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}"/>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password"/>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password_confirmation') is-invalid @enderror" type="password" placeholder="Confirm Password" name="password_confirmation"/>
                @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Sign Up</button>
                <a href="{!! route('login') !!}" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Signin</a>
              </div>
            </form>
          </div>
          <!--end::Login Sign up form-->
      </div>
    </div>
  </body>
</html>
