<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nightingale Board</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/assets/images/icon-logo.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/css/select2.min.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>

	<script src="/assets/js/jquery-3.6.0.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
</head>
<body class="board-page">
	<div class="board-page-header">
		<div class="container">
			<div class="board-page-header-wrap">
				<div class="board-page-header-step">
					<img class="board-page-header-step__img" src="/assets/images/icon-back.png">
					<span class="board-page-header-step__numb fs-14">Step 2 of 3</span>
				</div>
				<div class="board-page-header-btns">
					<span class="btn btn-primary btn-sm">Next</span>
				</div>
			</div>
		</div>
	</div>
	<div class="board-page-content">
		<div class="board-page-left-side">
			<div class="board-page-left-side-wrap">
				<img class="board-page-logo__img" src="/assets/images/logo.png">
				<h1 class="board-page-title fs-48">Tell us about your ideal co-founder</h1>
				<p class="fs-18">Who is your ideal co-founder that we can match you with the best like minded co-founder.</p>
				<p class="fs-14 board-page-left-side-footer-text">Having trouble? <a class="form-link" href="">Get help</a></p>
			</div>
		</div>
		<div class="board-page-right-content">
			<div class="board-page-right-content-wrap">
				<div class="board-page-form-wrap" id="board_page_form_about">
					<h2 class="board-page-form-title fs-32">About co-founder</h2>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">Looking for a co-founder with ideas?<span class="form-badge-required">*</span></label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">Yes</span>
								</label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">No</span>
								</label>
							<div class="form-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">Your co-founder should be<span class="form-badge-required">*</span></label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">Technical</span>
								</label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">Non-technical</span>
								</label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">Doesn't matter</span>
								</label>
							<div class="form-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">Your co-founders responsibilities<span class="form-badge-required">*</span></label>
							<div class="form-multi-options">
								<span class="form-multi-option">Product</span><span class="form-multi-option">Engineering</span><span class="form-multi-option">Design</span><span class="form-multi-option">Sales</span><span class="form-multi-option">Marketing</span><span class="form-multi-option">Operations</span>
							</div>
							<div class="form-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">How much time your co-founders should dedicate?<span class="form-badge-required">*</span></label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">10+ hours a week</span>
								</label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">20+ hours a week</span>
								</label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">40+ hours a week</span>
								</label>
								<label class="form-checkbox-wrap">
									<input type="checkbox" checked="checked">
									<span class="checkmark"></span><span class="form-checkbox-title">No preference</span>
								</label>
							<div class="form-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">Linkedin Url</label>
							<input type="text" class="form-control w-100" placeholder="https://www.linkedin.com/in/...">
						</div>
					</div>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">Location preference<span class="form-badge-required">*</span></label>
							<select class="form-control" id="location" name="states[]" multiple="multiple">
								<option value="AL">Alabama</option>
								<option value="WY">Wyoming</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-col-100">
							<label class="form-label">Describe your idea co-founder</label>
							<textarea class="form-control w-100"></textarea>
							<div class="form-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function() {
		$('#location').select2();
	});
</script>
</html>