<!--=============================
=            Sign In            =
==============================-->
<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="<?php echo base_url('public/assets/images/'); ?>Login/front-desk-sign-in.jpg"
							alt="desk-image"></div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<div class="homepage-logo">
								<a class="navbar-brand" href="<?= site_url('/') ?>"><img class="header-logo" src="<?php echo base_url('public/assets/images/message-svgrepo-com.svg'); ?>" alt="logo"></a>
								<h3 class="header-logo-title font-weight-bold">Chattrix</h4>
							</div>
						</div>
						<div class="title-text">
							<h3>Sign in to To Your Account</h3>
						</div>
						<?php if(!empty(session()->getFlashdata('fail'))){?>
							<div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
						<?php } ?>
						<form action="<?= base_url('auth/check') ?>" method="post">
							<?= csrf_field() ?>
							<!-- Username -->
							 <span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
							<input class="form-control main my-1" name="email" type="email" placeholder="Email"  value="<?= set_value('email'); ?>">
							<!-- Password -->
							 <span class="text-danger mt-0"><?= isset($validation) ? display_error($validation, 'pasword') : '' ?></span>
							<input class="form-control main my-1" name="password" type="password" placeholder="Password"">
							<!-- Submit Button -->
							<button class="btn btn-main-sm">sign in</button>
						</form>
						<div class="new-acount">
							<a href="contact.html">Forget your password?</a>
							<p>Don't Have an account? <a href="<?= site_url('sign_up') ?>"> SIGN UP</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>