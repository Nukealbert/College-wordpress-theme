<!DOCTYPE html>
<html lang="en">
	<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title><?php echo bloginfo() ?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->



<?php wp_head();?>
</head>
<body class="host_version"> 
	<!-- Start header -->
	<header class="top-navbar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.html">
						<img src="<?php bloginfo('template_directory');?>/images/logo1.png" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>


								<!-- Start menu -->				
							<div class="collapse navbar-collapse" id="navbars-host">
												<?php 
												wp_nav_menu(
													array(
														
														'theme_location'=>'top-menu',
														'container' => ' ',
														'items_wrap'=>'<ul class="navbar-nav ml-auto">%3$s</ul>',
													)

												);?>
							</div>

				</div>
			</nav>
	</header>
	<!-- End header -->