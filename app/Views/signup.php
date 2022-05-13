<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nightingale Signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/assets/images/icon-logo.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
</head>
<body>
	<div class="signup-page-content">
		<div class="container">
			<div class="w-50 mx-auto text-center">
				<a href="<?php echo base_url('/')?>"><img class="signup-logo-img" src="/assets/images/logo.png" alt="Logo Image"></a>
				<h1 class="form-title fs-48">Create your account</h1>
				<p class="fs-24">Or <a class="form-link" href="<?php echo base_url('/signin')?>">click here to sign in</a> if you already have account</p>
				<div class="mw-500 mx-auto">
					<div class="form-wrap">
						<div class="form-row">
							<div class="form-col-50">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="form-col-50">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="form-row">
							<div class="form-col-100">
								<input type="text" class="form-control" placeholder="Email Address">
							</div>
						</div>
						<div class="form-row">
							<div class="form-col-100">
								<input type="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-row">
							<div class="form-col-100">
								<span class="btn btn-primary w-100">Create account</span>
							</div>
						</div>
					</div>
					<div class="form-wrap-sep">
						<div class="form-wrap-sep-line"></div>
						<div class="form-wrap-sep-title">or</div>
						<div class="form-wrap-sep-line"></div>
					</div>
					<span class="btn btn-icon btn-outline w-100">
						<img class="btn-icon__img" src="/assets/images/icon-google.png">
						<span class="btn-icon__text">Continue with Google</span>
					</span>
					<div class="form-footer-links">
						<a class="footer-menu-link">Terms of Use</a>
						<a class="footer-menu-link">Privacy Policy</a>
					</div>
					<p class="footer-copyright text-center">Copyrights @ 2022 co-founder match</p>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>
