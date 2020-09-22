<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Metronic | Forgotten Password</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{!! asset('assets/admin/css/login_css/login-5.min.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{!! asset('assets/admin/plugins/global/plugins.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('assets/admin/plugins/prismjs/prismjs.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('assets/admin/css/style.bundle.css?v=7.0.6') !!}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <link rel="shortcut icon" href="{!! asset('assets/admin/media/favicon.ico') !!}"/>
  </head>
  <body>
    <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({!! asset('assets/admin/media/bg-2.jpg') !!});">
      <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
        <!--begin::Login forgot password form-->
        <div class="login-forgot">
          <div class="mb-20">
            <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
            <p class="opacity-40">Enter your email to reset your password</p>
          </div>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group mb-10">
              <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" autocomplete="off"/>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request</button>
              <a href="{!! route('login') !!}" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</a>
            </div>
          </form>
        </div>
        <!--end::Login forgot password form-->
      </div>
    </div>
  </body>
</html>
