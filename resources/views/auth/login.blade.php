

<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic | Login</title>
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
    <!--end::Head-->

    <!--begin::Body-->
    <body>

    	<!--begin::Main-->
    	<div class="d-flex flex-column flex-root">
    		<!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid">
        	<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({!! asset('assets/admin/media/bg-2.jpg') !!});">
        		<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
        			<!--begin::Login Header-->
        			<div class="d-flex flex-center mb-15">
        				<a href="{!! route('login') !!}">
        					<img src="{!! asset('assets/admin/media/logo-letter-13.png') !!}" class="max-h-75px" alt=""/>
        				</a>
        			</div>
        			<!--end::Login Header-->

        			<!--begin::Login Sign in form-->
        			<div class="login-signin">
        				<div class="mb-20">
        					<h3 class="opacity-40 font-weight-normal">Sign In To Admin</h3>
        					<p class="opacity-40">Enter your details to login to your account:</p>
        				</div>
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif
                  <form action="{!! route('login') !!}" method="post">
                    @csrf
        					<div class="form-group">
        						<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" autocomplete="off"/>
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
        					<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
        						<div class="checkbox-inline">
        							<label class="checkbox checkbox-outline checkbox-white text-white m-0">
        								<input type="checkbox" name="remember"/>
        								<span></span>
        								Remember me
        							</label>
        						</div>
        						<a href="{!! route('password.request') !!}"class="text-white font-weight-bold">Forget Password ?</a>
        					</div>
        					<div class="form-group text-center mt-10">
        						<button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
        					</div>
        				</form>
        				<div class="mt-10">
        					<span class="opacity-40 mr-4">
        						Don't have an account yet?
        					</span>
        					<a href="{!! route('register') !!}" class="text-white opacity-30 font-weight-normal">Sign Up</a>
        				</div>
        			</div>
        			<!--end::Login Sign in form-->
        		</div>
        	</div>
        </div>
        <!--end::Login-->
    	</div>
      <!--end::Main-->
    </body>
    <!--end::Body-->
</html>
