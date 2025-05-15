@extends('frontend.layouts.header')
@section('title', "Digital Marketing Services | Account Management Services")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>About Us</h1>
					<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="{{ asset('theme/images/couch.png')}}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6">
				<h2 class="section-title">About ShreeTech</h2>
				<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/truck.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Fast &amp; Free Shipping</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Easy to Shop</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/support.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/return.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Hassle Free Returns</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="{{ asset('theme/images//why-choose-us-img.jpg')}}" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>

<div class="why-choose-section p-0">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="{{ asset('theme/images//why-choose-us-img.jpg')}}" alt="Image" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="section-title">Core Values</h2>
				<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/truck.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Products</h3>
							<p>We keep in our stock a variety of parts and instruments to serve the urgent need in critical time or in time of unexpected breakdown.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Services</h3>
							<p>The industries we serve include Oil & Gas, Chemical, Petrochemical, Mining, Energy & Utilities, Pharmaceuticals, Electronics, Food and etc.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/support.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Mission Statement</h3>
							<p>We are committed to supporting the need of the industries globally for any industrial automation products and process control instruments.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{ asset('theme/images/return.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Our Insistence</h3>
							<p>With the use of world-class products of highest quality, you can rest assured that every solution is achievable and successfully implemented.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Team Section -->
<div class="untree_co-section">
	<div class="container">

		<div class="row mb-5">
			<div class="col-lg-5 mx-auto text-center">
				<h2 class="section-title">Our Team</h2>
			</div>
		</div>

		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{ asset('theme/images/person_1.jpg')}}" class="img-fluid mb-5">
				<h3 clas><a href="#"><span class="">Lawson</span> Arnold</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in.
				Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
			</div> 
			<!-- End Column 1 -->

			<!-- Start Column 2 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{ asset('theme/images/person_2.jpg')}}" class="img-fluid mb-5">
				<h3 clas><a href="#"><span class="">Jeremy</span> Walker</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in.
				Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
			</div> 
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{ asset('theme/images/person_3.jpg')}}" class="img-fluid mb-5">
				<h3 clas><a href="#"><span class="">Patrik</span> White</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
			</div> 
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{ asset('theme/images/person_4.jpg')}}" class="img-fluid mb-5">

				<h3 clas><a href="#"><span class="">Kathryn</span> Ryan</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>	
			</div> 
			<!-- End Column 4 -->
		</div>
	</div>
</div>
<!-- End Team Section -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section before-footer-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="section-title">Testimonials</h2>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="testimonial-slider-wrap text-center">

					<div id="testimonial-nav">
						<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
						<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
					</div>

					<div class="testimonial-slider">
						
						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{ asset('theme/images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Maria Jones</h3>
											<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
										</div>
									</div>

								</div>
							</div>
						</div> 
						<!-- END item -->

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{ asset('theme/images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Maria Jones</h3>
											<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
										</div>
									</div>

								</div>
							</div>
						</div> 
						<!-- END item -->

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{ asset('theme/images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Maria Jones</h3>
											<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
										</div>
									</div>

								</div>
							</div>
						</div> 
						<!-- END item -->

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Testimonial Slider -->

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>
@endsection
