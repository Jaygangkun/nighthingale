<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nightingale Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/assets/images/icon-logo.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/css/select2.min.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>

	<script src="/assets/js/jquery-3.6.0.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
</head>
<body class="events-page">
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
	<div class="events-page-content user-page-content">
		<div class="container-fluid">
			<h1 class="events-page-title fs-48">Welcome, Matt 👋</h1>
			<p class="fs-18">Popular co-founder speed dating events</p>
			<div class="events-list-wrap">
				<div class="events-filter-wrap">
					<div class="events-filter-list">
						<span class="events-filter-link selected">All</span>
						<span class="events-filter-link">Today</span>
						<span class="events-filter-link">Tomorrow</span>
						<span class="events-filter-link">This week</span>
						<span class="events-filter-link">This month</span>
						<span class="events-filter-link">Free</span>
						<span class="events-filter-link">In my country</span>
						<span class="events-filter-link">Filter by Calendar</span>
					</div>
				</div>
				<div class="events-list-row">
					<div class="events-list-col">
						<div class="events-list-col-wrap">
							<div class="events-list-col__img-wrap" style="background-image:url(/assets/images/events-profile.png)"></div>
							<div class="events-list-col-info">
								<h5 class="events-list-col__location fs-18">New York, NY</h5>
								<p class="events-list-col__date fs-14">Today at 3:00 PM</p>
								<p class="events-list-col__desc fs-14">293 Co-Founders attending</p>
								<div class="events-list-col-info-btns">
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-share.png"></span>
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-bookmark.png"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="events-list-col">
						<div class="events-list-col-wrap">
							<div class="events-list-col__img-wrap" style="background-image:url(/assets/images/events-profile.png)"></div>
							<div class="events-list-col-info">
								<h5 class="events-list-col__location fs-18">New York, NY</h5>
								<p class="events-list-col__date fs-14">Today at 3:00 PM</p>
								<p class="events-list-col__desc fs-14">293 Co-Founders attending</p>
								<div class="events-list-col-info-btns">
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-share.png"></span>
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-bookmark.png"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="events-list-col">
						<div class="events-list-col-wrap">
							<div class="events-list-col__img-wrap" style="background-image:url(/assets/images/events-profile.png)"></div>
							<div class="events-list-col-info">
								<h5 class="events-list-col__location fs-18">New York, NY</h5>
								<p class="events-list-col__date fs-14">Today at 3:00 PM</p>
								<p class="events-list-col__desc fs-14">293 Co-Founders attending</p>
								<div class="events-list-col-info-btns">
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-share.png"></span>
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-bookmark.png"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="events-list-col">
						<div class="events-list-col-wrap">
							<div class="events-list-col__img-wrap" style="background-image:url(/assets/images/events-profile.png)"></div>
							<div class="events-list-col-info">
								<h5 class="events-list-col__location fs-18">New York, NY</h5>
								<p class="events-list-col__date fs-14">Today at 3:00 PM</p>
								<p class="events-list-col__desc fs-14">293 Co-Founders attending</p>
								<div class="events-list-col-info-btns">
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-share.png"></span>
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-bookmark.png"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="events-list-col">
						<div class="events-list-col-wrap">
							<div class="events-list-col__img-wrap" style="background-image:url(/assets/images/events-profile.png)"></div>
							<div class="events-list-col-info">
								<h5 class="events-list-col__location fs-18">New York, NY</h5>
								<p class="events-list-col__date fs-14">Today at 3:00 PM</p>
								<p class="events-list-col__desc fs-14">293 Co-Founders attending</p>
								<div class="events-list-col-info-btns">
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-share.png"></span>
									<span class="events-list-col__btn"><img class="events-list-col__btn-img" src="/assets/images/icon-bookmark.png"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	
</script>
</html>