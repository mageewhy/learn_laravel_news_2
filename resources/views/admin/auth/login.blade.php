<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel News - HTML5 Login</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('admin/assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('admin/assets/css/portal.css')}}">

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="{{route('home-page')}}"><h1 class="text-danger text-bold">Laravel News</h1></a></div>
					<h2 class="auth-heading text-center mb-5">Log in</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" method="POST" action=" {{route('login')}}">
							@csrf
                            <div class="email mb-3">
								<label class="sr-only" for="email">Email</label>
								<input id="email" name="email" type="email" class="form-control signin-email" placeholder="Email address" name="email" :value="old('email')" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="password" name="password" type="password" class="form-control signin-password" placeholder="Password" required="required">
								<div class="extra mt-3 row justify-content-between">
									<div {{-- class="col-6" --}}>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
											<label class="form-check-label" for="remember_me">
											Remember me
											</label>
										</div>
									</div><!--//col-6-->
									{{-- <div class="col-6">
										<div class="forgot-password text-end">
											<a href="{{route('password.request')}}">Forgot password?</a>
										</div>
									</div><!--//col-6--> --}}
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>

						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="{{route('register')}}" >here</a>.</div>
					</div><!--//auth-form-container-->

			    </div><!--//auth-body-->

			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

				    </div>
			    </footer><!--//app-auth-footer-->
		    </div><!--//flex-column-->
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
	    </div><!--//auth-background-col-->

    </div><!--//row-->


</body>
</html>

