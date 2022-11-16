<?php
/*
 * Template Name: Contact us Template
*/
get_header();
?>

<div class="contact-outer">
	<section class="contact-us position-relative">
	<div class="common-bg position-absolute w-100 h-100"></div>
		<div class="container py-5">
			<div class="row py-5">
				<div class="col-12 col-sm-6 d-flex align-items-center">
					<div class="contact-info py-5 px-4 box-shadow-1 theme bg-white">
						<h3 class="title-font">Ready to partnership?</h3>
						<p class="font-26px">Empower, scale and develop your business with a dedicated team of marketing experts.</p>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
				</div>
				
			</div>
			
		</div>
	</section>
</div>


<?php
	get_footer();
?>