<!DOCTYPE html>
<html lang="en">

<head>
	<title>LUId Portal Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="The one stop point to find and announce all lost University ID's login page">
	<meta name="author" content="Junior Lawrence Kibirige">
	<link rel="icon" href="/svg/icon.svg" type="image/svg+xml">
	<link rel="canonical" href="https://lostunivid.live/">
	<link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/static/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/static/css/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="/static/css/util.css">
	<link rel="stylesheet" type="text/css" href="/static/css/main.css">
	<style>
		.validate-form-login, .validate-form-signup {
			padding: 0px 0px 0px 0px !important;
			width: 100% !important;
		}
		.opp {
			color: #307c77;
		}
		.oppo {
			color: #c5cdd1;
		}
	</style>
</head>

<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<a href="/" class="root"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">
							<circle cx="12" cy="12" r="10"></circle>
							<line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
							<line x1="9.69" y1="8" x2="21.17" y2="8"></line>
							<line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
							<line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
							<line x1="14.31" y1="16" x2="2.83" y2="16"></line>
							<line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
						</svg>
					</a>
					<fieldset class="login">
						<form class="login100-form validate-form validate-form-login" method="POST">
							<span class="login100-form-title p-b-43">
								Login to The Lost University ID Portal
							</span>

							<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
								<input class="input100" type="text" name="email">
								<span class="focus-input100"></span>
								<span class="label-input100">Email</span>
							</div>


							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<input class="input100" type="password" name="pass">
								<span class="focus-input100"></span>
								<span class="label-input100">Password</span>
							</div>
							<input type="text" value="login" name="tab" style="display: none" aria-hidden="true">

							<div class="flex-sb-m w-full p-t-3 p-b-32">
								<div class="contact100-form-checkbox">
									<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
									<label class="label-checkbox100" for="ckb1">
										Remember me
									</label>
								</div>

								<div>
									<a href="#" class="txt1">
										Forgot Password?
									</a>
								</div>
							</div>


							<div class="container-login100-form-btn">
								<button class="login100-form-btn">
									Login
								</button>
							</div>

							<div class="text-center p-t-10 p-b-0">
								<span class="txt2">
									Either
								</span>
							</div>

							<div class="row container">
								<div class="container-signup100-form-btn">
									<button class="signup100-form-btn">
										Sign Up
									</button>

									<div class="text-center p-t-10 p-b-0">
										<span class="txt2">
											-------OR-------
										</span>
									</div>

									<div class="login100-form-social flex-c-m">
										<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
											<i class="fa fa-facebook-f" aria-hidden="true"></i>
										</a>

										<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>

										<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
											<i class="fa fa-google" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</form>
					</fieldset>

					<fieldset class="signup" style="display: none">
						<form class="login100-form validate-form validate-form-signup" method="POST">
							<span class="login100-form-title p-b-43">
								Sign Up to access The Lost University ID Portal
							</span>

							<div class="wrap-input100 validate-input" data-validate="Field is required">
								<input class="input100" type="text" name="fName">
								<span class="focus-input100"></span>
								<span class="label-input100">First Name</span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Field is required">
								<input class="input100" type="text" name="lName">
								<span class="focus-input100"></span>
								<span class="label-input100">Last Name</span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Valid email is required: test@example.com">
								<input class="input100" type="email" name="email">
								<span class="focus-input100"></span>
								<span class="label-input100">Email Address</span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Valid contact is required">
								<input class="input100" type="text" name="pNo" maxlength="9" style="margin-left: 2.9em">
								<span class="focus-input100"></span>
								<span class="label-input100">Phone Number</span>
								<span type="text" data-suffix="pNo_attr" readonly>+256 - </span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<input class="input100" type="password" name="pass">
								<span class="focus-input100"></span>
								<span class="label-input100">Password</span>
							</div>
							<input type="text" value="signup" name="tab" style="display: none" aria-hidden="true">

							<div class="container-login100-form-btn">
								<button class="login100-form-btn-signup">
									Sign Up
								</button>
							</div>

							<div class="text-center p-t-10 p-b-0">
								<span class="txt2">
									Either
								</span>
							</div>

							<div class="row container">
								<div class="container-signup100-form-btn">
									<button class="login100-form-btn-back">
										Login
									</button>

									<div class="text-center p-t-10 p-b-0">
										<span class="txt2">
											-------OR-------
										</span>
									</div>

									<div class="login100-form-social flex-c-m">
										<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
											<i class="fa fa-facebook-f" aria-hidden="true"></i>
										</a>

										<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>

										<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
											<i class="fa fa-google" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</form>
					</fieldset>
				</div>

				<div class="p-lg-5 login100-more" style="background-image: url('images/bg-01.jpg');">
					<h2 class="display-4 font-weight-normal text-center" style="width: 25rem; margin: 20% 50% 0% 15%">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">
							<circle cx="12" cy="12" r="10"></circle>
							<line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
							<line x1="9.69" y1="8" x2="21.17" y2="8"></line>
							<line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
							<line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
							<line x1="14.31" y1="16" x2="2.83" y2="16"></line>
							<line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
						</svg>
						For the joy of a found ID
					</h2>
					<p class="lead font-weight-normal" style="width: 25rem; margin: 0% 50% 0% 25%">You are in the right
						place ...</p>
					<h3 class="display-3 font-weight-normal text-center" style="width: 40rem; margin: 10% 30% 0% 0%"><span class="opp">Sign Up Ea</span><span class="oppo">sy Like </span><span class="opp">Never Be</span><span class="oppo">fore</span></h3>
				</div>
			</div>
		</div>
	</div>

	<?php
	if (isset($_GET['tab']) && $_GET['tab'] == 'signup') {
	?>
		<script src="/static/js/vendor/jquery/jquery-3.2.1.min.js"></script>
		<script>
			$('.login').hide()
			$('.signup').show()
		</script>
	<?php
	} else {
	?>
		<script src="/static/js/vendor/jquery/jquery-3.2.1.min.js"></script>
	<?php
	}
	?>
	<script src="/static/js/vendor/animsition/js/animsition.min.js"></script>

	<script src="/static/js/vendor/popper.min.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>

	<script src="/static/js/vendor/select2/select2.min.js"></script>

	<script src="/static/js/vendor/daterangepicker/moment.min.js"></script>

	<script src="/static/js/main.js"></script>

</body>

</html>
