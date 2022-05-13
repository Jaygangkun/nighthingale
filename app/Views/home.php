<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nightingale</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/assets/images/icon-logo.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
</head>
<body>
	<!-- .header -->
	<div class="header">
		<div class="container">
			<div class="header-wrap">
				<a class="logo-link" href="<?php echo base_url()?>">
					<img class="header-logo-img" src="/assets/images/logo.png" alt="Logo Image">
				</a>
				<div class="header-links">
					<a class="header-link" href="<?php echo base_url('/signup')?>">Sign up</a>
					<a class="header-link" href="<?php echo base_url('/signin')?>">Sign in</a>
				</div>
			</div>
		</div>
	</div>
	<!-- // .header -->

	<!-- .home-hero -->
	<div class="home-hero">
		<img class="home-hero-pattern" id="home_hero_pattern_left" src="/assets/images/home-hero-ellipse-left.png" alt="Ellipse Image">
		<img class="home-hero-pattern" id="home_hero_pattern_center" src="/assets/images/home-hero-ellipse-center.png" alt="Ellipse Image">
		<img class="home-hero-pattern" id="home_hero_pattern_right" src="/assets/images/home-hero-ellipse-right.png" alt="Ellipse Image">
		<div class="container">
			<div class="home-hero-wrap">
				<div class="home-hero-left">
					<h1 class="fs-56 hero-title">Welcome to<br>Co-Founders Speed Dating</h1>
					<p class="fs-24 hero-desc">Meet your prospective co-founder from all over the world, and start building your company.</p>
					<a class="btn btn-primary btn-min" href="<?php echo base_url('/signup')?>">Sign Up Now</a>
				</div>
				<img class="home-hero-img" src="/assets/images/home-hero-main.png" alt="Home Hero Main Image">
			</div>
		</div>
	</div>
	<!-- // .home-hero -->

	<!-- .home-hero-list  -->
	<div class="home-hero-list">
		<div class="container">
			<div class="d-flex">
				<div class="col-3">
					<div class="home-hero-list-col">
						<img class="home-hero-list-col__img" src="/assets/images/icon-co-founder-match.png">
						<h6 class="home-hero-list-col__title fs-20">Co-Founder match</h6>
						<p class="home-hero-list-col__desc fs-18">Find the perfect co-founder based on interests, skills, and location.</p>
					</div>
				</div>
				<div class="col-3">
					<div class="home-hero-list-col">
						<img class="home-hero-list-col__img" src="/assets/images/icon-video-speed-dating.png">
						<h6 class="home-hero-list-col__title fs-20">Video speed dating</h6>
						<p class="home-hero-list-col__desc fs-18">Meet co-founders based on what you are looking for, like or skip.</p>
					</div>
				</div>
				<div class="col-3">
					<div class="home-hero-list-col">
						<img class="home-hero-list-col__img" src="/assets/images/icon-high-quality-matches.png">
						<h6 class="home-hero-list-col__title fs-20">High quality matches</h6>
						<p class="home-hero-list-col__desc fs-18">Our AI tools matches you with the liked minded co-founders.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // .home-hero-list -->

	<!-- .home-works -->
	<div class="home-works">
		<div class="container">
			<div class="w-50 mx-auto">
				<h2 class="section-title text-center">How Right Co-Founder Works</h2>
				<p class="fs-24 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam aliquet aliquam nulla quis feugiat.</p>
			</div>
			<div class="home-works-list">
				<div class="d-flex">
					<div class="col-3">
						<div class="home-works-list-col">
							<span class="home-works-list-col__numb">1</span>
							<h6 class="home-works-list-col__name fs-20">Create a profile</h6>
							<p class="home-works-list-col__desc fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam.</p>
						</div>
					</div>
					<div class="col-3">
						<div class="home-works-list-col">
							<span class="home-works-list-col__numb">2</span>
							<h6 class="home-works-list-col__name fs-20">Join events</h6>
							<p class="home-works-list-col__desc fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam.</p>
						</div>
					</div>
					<div class="col-3">
						<div class="home-works-list-col">
							<span class="home-works-list-col__numb">3</span>
							<h6 class="home-works-list-col__name fs-20">Find a Co-Founder</h6>
							<p class="home-works-list-col__desc fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-works-btn-wrap">
			<a class="btn btn-primary btn-min" href="<?php echo base_url('/signup')?>">Join Now</a>
		</div>
	</div>
	<!-- // .home-works -->

	<!-- .home-testimonials -->
	<div class="home-testimonials">
		<div class="container">
			<div class="w-50 mx-auto">
				<h2 class="section-title text-center">Testimonials</h2>
				<p class="fs-24 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam aliquet aliquam nulla quis feugiat.</p>
			</div>
			<div class="home-testimonials-slider">
				<div class="home-testimonial-wrap w-50 mx-auto text-center">
					<img class="home-testimonial__img" src="/assets/images/icon-male.png">
					<p class="home-testimonial__desc fs-18">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum dignissim odio, at vehicula velit posuere eu. Praesent rutrum sed lectus quis varius. Praesent viverra accumsan ligula a volutpat.”</p>
					<p class="fs-20"><span class="home-testimonial__name fw-bold">Kris Nolan</span> <span class="home-testimonial__job">CEO</span>, <span class="home-testimonial__company">X Company</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- // .home-testimonials -->

	<hr class="container"></hr>

	<!-- .home-qa-list -->
	<div class="home-qa-list">
		<div class="container">
			<div class="w-50 mx-auto">
				<h2 class="section-title text-center">Frequently Asked Questions</h2>
				<p class="fs-24 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam aliquet aliquam nulla quis feugiat.</p>
				<div class="home-qa-list-wrap">
					<div class="home-qa-list-row">
						<p class="home-qa-list-row__q fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
						<p class="home-qa-list-row__a fs-18">Etiam interdum dignissim odio, at vehicula velit posuere eu. Praesent rutrum sed lectus quis varius. Praesent viverra accumsan ligula a volutpat.</p>
					</div>
					<div class="home-qa-list-row">
						<p class="home-qa-list-row__q fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
						<p class="home-qa-list-row__a fs-18">Etiam interdum dignissim odio, at vehicula velit posuere eu. Praesent rutrum sed lectus quis varius. Praesent viverra accumsan ligula a volutpat.</p>
					</div>
					<div class="home-qa-list-row">
						<p class="home-qa-list-row__q fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
						<p class="home-qa-list-row__a fs-18">Etiam interdum dignissim odio, at vehicula velit posuere eu. Praesent rutrum sed lectus quis varius. Praesent viverra accumsan ligula a volutpat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // .home-qa-list -->

	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="footer-top-wrap">
					<img class="footer-logo-img" src="/assets/images/icon-logo.png">
					<div class="footer-menu-wrap">
						<div class="footer-menu-header">Company</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Blog</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">About</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Team</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Contact us</a>
						</div>
					</div>
					<div class="footer-menu-wrap">
						<div class="footer-menu-header">Discover</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Events</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Cities</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">This Week</a>
						</div>
					</div>
					<div class="footer-menu-wrap">
						<div class="footer-menu-header">Your Account</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Sign Up</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Log in</a>
						</div>
						<div class="footer-menu-link-wrap">
							<a class="footer-menu-link">Help</a>
						</div>
					</div>
					<div class="footer-menu-wrap">
						<div class="footer-menu-header">Follow us</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="footer-bottom">
				<p class="footer-copyright">Copyrights @ 2022 co-founder match</p>
				<div class="">
					<a class="footer-menu-link">Terms of Use</a>
					<a class="footer-menu-link">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
