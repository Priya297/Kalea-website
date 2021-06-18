<?php

/*Template Name: Contact Page*/

get_header(); ?>

<!-- contact top section -->
<section class="contact-top-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6">
				<figure class="contact-image-sec">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/eye-img.png" alt="sun-img">
				</figure>
			</div>
			<div class="col-6">
				<div class="contact-right-sec">
					<h1>Contact ons</h1>
					<!-- form goes here -->
					<div class="form-sec">
						<?php echo do_shortcode('[gravityform id="1"]');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact top section -->

<!-- contact info section -->
<section class="contact-info-section">
	<div class="container">
		<div class="contact-info-top">
			<h2>Contact gegevens</h2>
			<p>Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
		</div>

		<div class="row">
			<div class="col-4">
				<div class="contact-detail-inner">
					<h6>Contact Details</h6>
					<ul class="contact-detail-info">
						<li>
							Email: <a href="mailto:hello@creation.com" title="hello@creation.com">hello@creation.com</a>
						</li>
						<li>
							Phone: <a href="tel:0101234567890" title="(010)123-456-7890">(010)123-456-7890</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="contact-detail-inner">
					<h6>Our Location</h6>
					<p>92 McKenzie Mountains Apt.752 <br />New York, NY, USA</p>
				</div>
			</div>
			<div class="col-4">
				<div class="contact-detail-inner">
					<h6>24/H Customer Service</h6>
					<p>Any time, We are open 24/7 <br />contact us at any time.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact info section -->

<!-- map section -->
<section class="map-section">
	<div class="map-outer">
		<iframe id="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48384.97956565129!2d-74.02607449451176!3d40.7166687232565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1622613144798!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>
<!-- map section -->

<!-- instagram section -->
<section class="instagram-section">
	<div class="container">
		<span class="instagram-txt">#instagram</span>
		<div class="row align-items-center">
			<div class="col-3">
				<a href="#@kalea.com" title="Instagram" class="insta-btn">Instagram</a>
			</div>
			<div class="col-9">
				<div class="insta-top">
					<a href="#" target="_blank" class="insta-image-link">
						<img src="https://staging.project-progress.net/projects/kalea-website/wp-content/uploads/2021/05/insta-link-1.jpg" alt="">
					</a>
					<a href="#" target="_blank" class="insta-image-link">
						<img src="https://staging.project-progress.net/projects/kalea-website/wp-content/uploads/2021/05/insta-link-2.jpg" alt="">
					</a>
				</div>
				<div class="insta-bottom">
					<a href="#" target="_blank" class="insta-image-link">
						<img src="https://staging.project-progress.net/projects/kalea-website/wp-content/uploads/2021/05/insta-link-3.jpg" alt="">
					</a>
					<a href="#" target="_blank" class="insta-image-link">
						<img src="https://staging.project-progress.net/projects/kalea-website/wp-content/uploads/2021/05/insta-link-4.jpg" alt="">
					</a>
					<a href="#" target="_blank" class="insta-image-link">
						<img src="https://staging.project-progress.net/projects/kalea-website/wp-content/uploads/2021/05/insta-link-5.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- instagram section -->

<?php get_footer(); ?>