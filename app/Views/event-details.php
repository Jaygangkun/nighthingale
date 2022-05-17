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
<body class="event-details-page">
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
	<div class="event-details-header">
		<div class="container-min">
			<div class="event-details-header-wrap">
				<div class="event-details-header-info">
					<p class="event-details-header-info__loc">San Francisco, CA</p>
					<p class="event-details-header-info__date">Saturday, May 7 5:00 PM PST</p>
				</div>
				<div class="event-details-header-right">
					<div class="event-details-header-budget">$39</div>
					<div class="event-details-header-btn">
						<span class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_attend">Attend</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="event-details-content">
		<div class="container-min">
			<div class="event-details-content-wrap">
				<div class="event-details-img-wrap" style="background-image:url(/assets/images/event-detail-feature.png)"></div>
				<div class="event-details-content-row">
					<div class="event-details-content-col-left">
						<div class="event-details-block">
							<h2 class="event-details__title">San Francisco, CA</h2>
							<p class="event-details__sub-title">293 Co-Founders attending</p>
						</div>
						<div class="event-details-block">
							<p class="event-details-block-title">Details</h2>
							<p class="event-details-block-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet neque nec eros rhoncus iaculis quis sit amet elit. Sed nunc lectus, accumsan vel fermentum eget, commodo sollicitudin metus. Suspendisse potenti. Nunc pellentesque nunc neque, ac faucibus lorem lobortis vitae. Pellentesque commodo vehicula consequat. Aenean lobortis scelerisque iaculis. Pellentesque gravida pharetra quam, vel luctus nisl convallis id. Mauris tellus mauris, aliquam sit amet scelerisque non, faucibus et velit.</p>
						</div>
						<div class="event-details-block">
							<p class="event-details-block-title">Refund policy</h2>
							<p class="event-details-block-desc">No refunds</p>
						</div>
					</div>
					<div class="event-details-content-col-right">
						<div class="event-details-side-block">
							<div class="event-details-schedule-block">
								<p class="event-details-schedule-day">Sat, May 7, 2022</p>
								<p class="event-details-schedule-time">5:00 PM - 6:00 PM PST</p>
								<span class="event-details-schedule-add-link">Add to calendar</span>
								<div class="event-details-schedule-bottom">
									<span class="event-details-schedule-type">Online Event</span>
									<div class="event-details-schedule-btns">
										<span class="event-details-schedule-btn"><img class="event-details-schedule-btn-img" src="/assets/images/icon-share.png"></span>
										<span class="event-details-schedule-btn"><img class="event-details-schedule-btn-img" src="/assets/images/icon-bookmark.png"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="event-details-side-block">
							<div class="event-details-attendees-block">
								<div class="event-details-attendees-block-top">
									<p class="event-details-attendees-block__title">Attendees  (393)</p>
									<span class="event-details-attendees-block__link">See all</span>
								</div>
								<div class="event-details-attendees-list">
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
									<div class="event-details-attendees-wrap" style="background-image:url(/assets/images/icon-male.png)">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" tabindex="-1" id="modal_attend">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="modal-title">Order Summary</h3>
					<div class="attend-details-list">
						<div class="attend-details-row">
							<div class="attend-details-col">
								<div class="attend-details-title fs-16"><strong>1 x Online Admit</strong></div>
							</div>
							<div class="attend-details-col">
								<div class="attend-details-budget fs-16">$40.00</div>
							</div>
						</div>
						<div class="attend-details-row">
							<div class="attend-details-col">
								<div class="attend-details-sub-title fs-16">Co-Founder Speed Dating Event</div>
							</div>
							<div class="attend-details-col">
							</div>
						</div>
						<div class="attend-details-row mt-3">
							<div class="attend-details-col">
								<div class="attend-details-loc fs-14"><strong>San Francisco, CA chapter</strong></div>
								<div class="attend-details-datetime fs-14">Sat, May 7, 2022</div>
								<div class="attend-details-datetime fs-14">5:00 PM - 6:00 PM PST</div>
							</div>
							<div class="attend-details-col">
							</div>
						</div>
						<div class="attend-details-coupon-wrap mt-3">
							<div class="attend-details-coupon-wrap-title fs-14 mb-2"><strong>Apply Coupon</strong></div>
							<div class="attend-details-row">
								<input type="text" class="form-control attend-details-coupon-input">
								<span class="btn btn-outline btn-sm fs-16">Apply</span>
							</div>
						</div>
						<div class="attend-details-row mt-3">
							<div class="attend-details-col">
								<div class="attend-details-checkout-title fs-16">Subtotal</div>
							</div>
							<div class="attend-details-col">
								<div class="attend-details-checkout-val fs-16">$40.00</div>
							</div>
						</div>
						<div class="attend-details-row mt-3">
							<div class="attend-details-col">
								<div class="attend-details-checkout-title fs-16">Sales tax</div>
							</div>
							<div class="attend-details-col">
								<div class="attend-details-checkout-val fs-16">$3.63</div>
							</div>
						</div>
						<hr>
						<div class="attend-details-row mt-3">
							<div class="attend-details-col">
								<div class="attend-details-checkout-title fs-16"><strong>Total</strong></div>
							</div>
							<div class="attend-details-col">
								<div class="attend-details-checkout-val fs-16"><strong>$43.63</strong></div>
							</div>
						</div>
						<div class="attend-details-footer-btn-wrap mt-5">
							<span class="btn btn-primary w-100 btn-sm">Continue to Payment</span>
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