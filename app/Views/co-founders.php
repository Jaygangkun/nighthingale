<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nightingale Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/assets/images/icon-logo.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/select2.min.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>

	<script src="/assets/js/jquery-3.6.0.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
</head>
<body class="co-founders-page">
	<div class="user-page-header">
		<div class="user-page-header-wrap">
			<div class="user-page-header-wrap__left">
				<a class="user-page-header-logo-link" href="<?php echo base_url()?>"><img class="user-page-header-logo__img" src="/assets/images/logo.png"></a>
				<input type="text" class="user-page-header-input" placeholder="Search events">
			</div>
			<div class="user-page-header-wrap__right">
				<div class="user-page-header-links">
					<a class="user-page-header-link" href="<?php echo base_url('/events')?>">Events</a>
					<a class="user-page-header-link" href="<?php echo base_url('/events')?>">Find Co-Founders</a>
					<a class="user-page-header-link" href="<?php echo base_url('/events')?>">Inbox</a>
				</div>
				<div class="user-page-header-profile">
					<div class="user-page-header-profile-content">
						<div class="user-page-header-profile__img" style="background-image:url(/assets/images/icon-male.png)"></div>
						<img class="user-page-header-profile__arrow-img" src="/assets/images/icon-arrow-up.png">
					</div>
					<div class="user-page-header-profile-menus">
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">My Profile</a>
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">Events</a>
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">Connections</a>
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">Tickets</a>
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">Inbox</a>
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">Settings</a>
						<a class="user-page-header-profile-menu" href="<? echo base_url('/profile')?>">Log out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="co-founders-page-content">
		<div class="co-founders-page-content-left">
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Location</label>
					<input type="text" class="form-control form-control-sm w-100" placeholder="Enter location...">
					<label class="filter-form-checkbox-wrap">
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span><span class="filter-form-checkbox-title">In my country</span>
					</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Type</label>
					<label class="filter-form-checkbox-wrap">
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span><span class="filter-form-checkbox-title">Technical</span>
					</label>
					<label class="filter-form-checkbox-wrap">
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span><span class="filter-form-checkbox-title">Non-technical</span>
					</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Co-Founder with...</label>
					<label class="filter-form-checkbox-wrap">
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span><span class="filter-form-checkbox-title">Ideas / project ready</span>
					</label>
					<label class="filter-form-checkbox-wrap">
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span><span class="filter-form-checkbox-title">No preference</span>
					</label>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Skills</label>
					<select class="form-control form-control-sm" id="location">
						<option value="">Select co-founder skills</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Weekly availability</label>
					<select class="form-control form-control-sm" id="location">
						<option value="">Select availability</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Industry</label>
					<select class="form-control form-control-sm" id="location">
						<option value="">Select industries</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-100">
					<label class="filter-label">Startup Stage</label>
					<select class="form-control form-control-sm" id="location">
						<option value="">Select stages of ideas</option>
					</select>
				</div>
			</div>
		</div>
		<div class="co-founders-page-content-right">
			<h2 class="co-founders-page-title fs-40">Find a co-founder</h2>
			<p class="ps-16">Find your co-founder based on your location, interests, skills and more.</p>
			<div class="co-founders-list">
				<div class="co-founder-col">
					<div class="co-founder-wrap">
						<div class="co-founder-img-wrap" style="background-image:url(/assets/images/icon-male.png)"></div>
						<p class="co-founder-name fs-14">James Culhance</p>
						<p class="co-founder-loc fs-12">San Francisco, CA</p>
						<p class="co-founder-role fs-14">Product, Marketing, Sales</p>
						<span class="co-founder-connect-btn btn-outline btn-sm w-100 d-block btn">Connect</span>
						<span class="co-founder-favorite-btn">
							<img class="co-founder-favorite-btn__img" src="/assets/images/icon-favorite.png">
						</span>
						<span class="co-founder-bookmark-btn">
							<img class="co-founder-bookmark-btn__img" src="/assets/images/icon-bookmark.png">
						</span>
					</div>
				</div>
				<div class="co-founder-col">
					<div class="co-founder-wrap">
						<div class="co-founder-img-wrap" style="background-image:url(/assets/images/icon-male.png)"></div>
						<p class="co-founder-name fs-14">James Culhance</p>
						<p class="co-founder-loc fs-12">San Francisco, CA</p>
						<p class="co-founder-role fs-14">Product, Marketing, Sales</p>
						<span class="co-founder-connect-btn btn-outline btn-sm w-100 d-block btn">Connect</span>
						<span class="co-founder-favorite-btn">
							<img class="co-founder-favorite-btn__img" src="/assets/images/icon-favorite.png">
						</span>
						<span class="co-founder-bookmark-btn">
							<img class="co-founder-bookmark-btn__img" src="/assets/images/icon-bookmark.png">
						</span>
					</div>
				</div>
				<div class="co-founder-col">
					<div class="co-founder-wrap">
						<div class="co-founder-img-wrap" style="background-image:url(/assets/images/icon-male.png)"></div>
						<p class="co-founder-name fs-14">James Culhance</p>
						<p class="co-founder-loc fs-12">San Francisco, CA</p>
						<p class="co-founder-role fs-14">Product, Marketing, Sales</p>
						<span class="co-founder-connect-btn btn-outline btn-sm w-100 d-block btn">Connect</span>
						<span class="co-founder-favorite-btn">
							<img class="co-founder-favorite-btn__img" src="/assets/images/icon-favorite.png">
						</span>
						<span class="co-founder-bookmark-btn">
							<img class="co-founder-bookmark-btn__img" src="/assets/images/icon-bookmark.png">
						</span>
					</div>
				</div>
				<div class="co-founder-col">
					<div class="co-founder-wrap">
						<div class="co-founder-img-wrap" style="background-image:url(/assets/images/icon-male.png)"></div>
						<p class="co-founder-name fs-14">James Culhance</p>
						<p class="co-founder-loc fs-12">San Francisco, CA</p>
						<p class="co-founder-role fs-14">Product, Marketing, Sales</p>
						<span class="co-founder-connect-btn btn-outline btn-sm w-100 d-block btn">Connect</span>
						<span class="co-founder-favorite-btn">
							<img class="co-founder-favorite-btn__img" src="/assets/images/icon-favorite.png">
						</span>
						<span class="co-founder-bookmark-btn">
							<img class="co-founder-bookmark-btn__img" src="/assets/images/icon-bookmark.png">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	
</script>
</html>