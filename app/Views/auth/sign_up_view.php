
<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="<?php echo base_url('public/assets/images/'); ?>Login/sign-up.jpg" alt="desk-image">
					</div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="<?= site_url('landing') ?>"><img src="<?php echo base_url('public/assets/images/'); ?>logo.png" alt=""></a>
						</div>
						<div class="title-text">
							<h3>Sign Up for New Account</h3>
						</div>
						<?php if(!empty(session()->getFlashdata('fail'))){?>
							<div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
						<?php } else if(!empty(session()->getFlashdata('success'))){ ?>
						<div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
						<?php } ?>
						<form action="<?= base_url('auth/save') ?>" method="post">
							<!-- Username -->
							<?= csrf_field() ?>
							<span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'first_name') : '' ?></span>
							<input class="form-control main my-1" name="first_name" type="text" placeholder="First Name" value="<?= set_value('first_name'); ?>">
							<span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'last_name') : '' ?></span>
							<input class="form-control main my-1" name="last_name" type="text" placeholder="Last Name" value="<?= set_value('last_name'); ?>">
							<!-- Email -->
							<span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
							<input class="form-control main my-1" name="email" type="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
							<!-- Password -->
							<span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
							<input class="form-control main my-1" name="password" type="password" placeholder="Password" value="<?= set_value('password'); ?>">
							<span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'confirm_password') : '' ?></span>
							<input class="form-control main my-1" name="confirm_password" type="password" placeholder="Confirm Password"  value="<?= set_value('confirm_password'); ?>">
							<!-- Submit Button -->
							<button class="btn btn-main-md">sign up</button>
						</form>
						<div class="new-acount">
							<p>By clicking “Sign Up” I agree to <a href="privacy-policy.html">Terms of Conditions.</a></p>
							<p>Anready have an account? <a href="<?= site_url('sign_in') ?>">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sign Up  ====-->