<?php
/**
* Template Name: Home
*/
?>



<?php get_header(); ?>






<!-- header info -->
<?php $hero = get_field('hero'); ?>



<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleControls" data-slide-to="1"></li>
		<li data-target="#carouselExampleControls" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div id="home" class="first-section" style="background-image:url('<?php echo $hero['accordion_image_1']; ?>)">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-right">
								<div class="big-tagline">
									<h2><strong><?php echo $hero['small_title']; ?> </strong> <?php echo $hero['small_title_text']; ?></h2>
									<p class="lead"><?php echo $hero['small_title_text_p']; ?> </p>
									<a href="<?php echo $hero['link1']; ?>" class="hover-btn-new"><span><?php echo $hero['link1_text']; ?></span></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="<?php echo $hero['link2']; ?>" class="hover-btn-new"><span><?php echo $hero['link2_text']; ?></span></a>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</div><!-- end section -->
		</div>
		<div class="carousel-item">
			<div id="home" class="first-section" style="background-image:url('<?php echo $hero['accordion_image_2']; ?>)">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-left">
								<div class="big-tagline">
									<h2 data-animation="animated zoomInRight"><?php echo $hero['small_title']; ?> <strong><?php echo $hero['small_title_text']; ?></strong></h2>
									<p class="lead" data-animation="animated fadeInLeft"><?php echo $hero['small_title_text_p']; ?> </p>
									<a href="<?php echo $hero['link1']; ?>" class="hover-btn-new"><span><?php echo $hero['link1_text']; ?></span></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="<?php echo $hero['link2']; ?>" class="hover-btn-new"><span><?php echo $hero['link2_text']; ?></span></a>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</div><!-- end section -->
		</div>
		<div class="carousel-item">
			<div id="home" class="first-section" style="background-image:url('<?php echo $hero['accordion_image_3']; ?>)">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<h2 data-animation="animated zoomInRight"><strong><?php echo $hero['small_title']; ?></strong> <?php echo $hero['small_title_text']; ?></h2>
									<p class="lead" data-animation="animated fadeInLeft"><?php echo $hero['small_title_text_p']; ?></p>
									<a href="<?php echo $hero['link1']; ?>" class="hover-btn-new"><span><?php echo $hero['link1_text']; ?></span></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="<?php echo $hero['link2']; ?>" class="hover-btn-new"><span><?php echo $hero['link2_text']; ?></span></a>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</div><!-- end section -->
		</div>
		<!-- Left Control -->

	</div>
	<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="fa fa-angle-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<!-- Right Control -->
	<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="fa fa-angle-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>





<!-- custom field $about-info -->
<div class="hmv-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="inner-hmv">
					<h3 style="color:red"> NEWS & EVENTS </h3>

					<ol class="footer-links">
						<li><a href="#" style="color:black"><b>news and event 1</b></a></li>
						<li><a href="#" style="color:black"><b>news and event 1</b></a></li>
						<li><a href="#" style="color:black"><b>news and event 1</b></a></li>
						<li><a href="#" style="color:black"><b>news and event 1</b></a></li>
					</ol><!-- end links -->
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="inner-hmv">

					<h3 style="color:red;">IMPORTANT LINKS</h3>

					<ul class="footer-links">
						<li><a href="#" style="color:black"><b>Important Link 1</b></a></li>
						<li><a href="#" style="color:black"><b>Important Link 1</b></a></li>
						<li><a href="#" style="color:black"><b>Important Link 1</b></a></li>
						<li><a href="#" style="color:black"><b>Important Link 1</b></a></li>
					</ul><!-- end links -->
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="inner-hmv">

					<h3 style="color:red;">CIRCULAR</h3>

					<ul class="footer-links">
						<li><a href="#" style="color:black"><b>Circular 1.0</b></a></li>
						<li><a href="#" style="color:black"><b>Circular 1.0</b></a></li>
						<li><a href="#" style="color:black"><b>Circular 1.0</b></a></li>
						<li><a href="#" style="color:black"><b>Circular 1.0</b></a></li>
					</ul><!-- end links -->
				</div>
			</div>
		</div>
	</div>
</div>


<!-- custom field $about-info -->
<?php $about = get_field('about-info'); ?>


<div id="overviews" class="section wb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<h3><?php echo $about['title']; ?></h3>
				<p class="lead"><?php echo $about['title-content']; ?></p>
			</div>
		</div><!-- end title -->

		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="message-box">

					<h2><?php echo $about['welcome-title']; ?></h2>
					<p><?php echo $about['welcome-content']; ?></p>

					<a href="<?php echo $about['read-more1']; ?>" class="hover-btn-new orange"><span>Learn More</span></a>
				</div><!-- end messagebox -->
			</div><!-- end col -->

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="post-media wow fadeIn">
					<img src="<?php echo $about['welcome-image']; ?>" alt="" class="img-fluid img-rounded">
				</div><!-- end media -->
			</div><!-- end col -->
		</div>
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="post-media wow fadeIn">
					<img src="<?php echo $about['welcome-image2']; ?>" alt="" class="img-fluid img-rounded">
				</div><!-- end media -->
			</div><!-- end col -->

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="message-box">
					<h2><?php echo $about['welcome-title2']; ?></h2>
					<?php echo $about['welcome-content2']; ?>
					<a href="<?php echo $about['read-more2']; ?>" class="hover-btn-new orange"><span>Learn More</span></a>
				</div><!-- end messagebox -->
			</div><!-- end col -->

		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->






<div class="section cl">
	<div class="container">
		<div class="row text-left stat-wrap">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
				<p class="stat_count">12000</p>
				<h3>Students</h3>
			</div><!-- end col -->

			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
				<p class="stat_count">240</p>
				<h3>Courses</h3>
			</div><!-- end col -->

			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
				<p class="stat_count">55</p>
				<h3>Years Completed</h3>
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->










<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/');">
	<div class="container">
		<div class="section-title text-center">
			<h3>Testimonials</h3>
			<p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div><!-- end title -->

		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="testi-carousel owl-carousel owl-theme">
					<div class="testimonial clearfix">
						<div class="testi-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/" alt="" class="img-fluid">
							<h4>sample1 </h4>
						</div>
						<div class="desc">
							<h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
							<p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
						</div>
						<!-- end testi-meta -->
					</div>
					<!-- end testimonial -->

					<div class="testimonial clearfix">
						<div class="testi-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/" alt="" class="img-fluid">
							<h4>sample2 </h4>
						</div>
						<div class="desc">
							<h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
							<p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
						</div>
						<!-- end testi-meta -->
					</div>
					<!-- end testimonial -->

					<div class="testimonial clearfix">
						<div class="testi-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/" alt="" class="img-fluid ">
							<h4>sample3 </h4>
						</div>
						<div class="desc">
							<h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
							<p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
						</div>
						<!-- end testi-meta -->
					</div>
					<!-- end testimonial -->
					<div class="testimonial clearfix">
						<div class="testi-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/testi_01.png" alt="" class="img-fluid">
							<h4>James Fernando </h4>
						</div>
						<div class="desc">
							<h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
							<p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
						</div>
						<!-- end testi-meta -->
					</div>
					<!-- end testimonial -->

					<div class="testimonial clearfix">
						<div class="testi-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/testi_02.png" alt="" class="img-fluid">
							<h4>Jacques Philips </h4>
						</div>
						<div class="desc">
							<h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
							<p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
						</div>
						<!-- end testi-meta -->
					</div>
					<!-- end testimonial -->

					<div class="testimonial clearfix">
						<div class="testi-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/testi_03.png" alt="" class="img-fluid">
							<h4>Venanda Mercy </h4>
						</div>
						<div class="desc">
							<h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
							<p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
						</div>
						<!-- end testi-meta -->
					</div><!-- end testimonial -->
				</div><!-- end carousel -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<?php get_footer(); ?>