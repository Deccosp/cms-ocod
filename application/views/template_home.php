<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Decc-</title>

	<!-- Favicon -->
	<link rel="icon" href="<?= base_url('assets/master/')?>img/core-img/favicon.ico">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/master/')?>style.css">

</head>

<body>
	<!-- Preloader -->
	<!-- <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div> -->

	<!-- Subscribe Modal -->
	<div class="subscribe-newsletter-area">
		<div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<h5 class="title">Subscribe to my newsletter</h5>
						<form action="#" class="newsletterForm" method="post">
							<input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
							<button type="submit" class="btn original-btn">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<!-- Breaking News Area -->
					<div class="col-12 col-sm-8">
						<div class="breaking-news-area">
							<div id="breakingNewsTicker" class="ticker">
								<ul>
									<li><a href="#">Hello World!</a></li>
									<li><a href="#">Hello Babe!</a></li>
									<li><a href="#">Hello Xixi!</a></li>
									<li><a href="#">Hello Coi!</a></li>
									<li><a href="#">Hello Kang!</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Top Social Area -->
					<div class="col-12 col-sm-4">
						<div class="top-social-area">
							<a href="#" data-toggle="tooltip"
								data-placement="bottom" title="Pinterest"><i class="fa-brands fa-whatsapp"
									aria-hidden="true"></i></a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
									class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://instagram.com/dcouuzza?igshid=MzMyNGUyNmU2YQ==" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
									class="fa-brands fa-instagram" aria-hidden="true"></i></a>
							<a href="" data-toggle="tooltip" data-placement="bottom" title="Email"><i
									class="fa fa-email" aria-hidden="true"></i></a>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Nav Area -->
		<div class="top-header original-nav-area" id="stickyNav">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between">

						<!-- Subscribe btn -->
						<div class="subscribe-btn">
							<button class="subscribe-btn"><a href="<?= base_url('admin/auth/')?>"
									class="btn subscribe-btn" data-target="#subsModal">Login!</a></button>

						</div>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu" id="originalNav">
							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="<?= base_url('')?>">Home Page</a></li>
									<li><a href="<?= base_url()?>">Content</a>
										<ul class="dropdown">
											<?php foreach ($kategori as $value) { ?>
											<li><a
													href="<?= base_url('dashboard/konten/'.$value['id_kategori'])?>"><?=$value['nama_kategori'];?></a>
											</li>
											<?php } ?>
										</ul>

									</li>

									<li><a href="<?= base_url('dashboard/galeri/')?>">Galeri</a></li>
									<li><a href="<?= base_url('dashboard/about')?>">About</a></li>
									<li><a href="<?= base_url('dashboard/saran/')?>">Saran</a></li>

								</ul>

								<!-- Search Form 
								<div id="search-wrapper">
									<form action="#">
										<input type="text" id="search" placeholder="Search something...">
										<div id="close-icon"></div>
										<input class="d-none" type="submit" value="">
									</form>
								</div> -->
							</div>
							<!-- Nav End -->
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<?= $contents; ?>

	<!-- ##### Instagram Feed Area Start ##### -->
	<div class="instagram-feed-area"></div>
	<!-- ##### Instagram Feed Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">

					<h3 class="post-headline"><?= $konfigurasi->judul_website; ?></h3>
					<p><?= $konfigurasi->profil_website; ?></p>
					<a href="#" class="post-tag"><?= $konfigurasi->alamat; ?></a>
					<h5><i class="fa-regular fa-envelope" aria-hidden="true"></i> <?= $konfigurasi->email; ?></h5>
					<a href="<?= $konfigurasi->facebook; ?>" class="mx-2" data-toggle="tooltip" data-placement="top"
						title="">
						<i class="fa fa-lg fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="<?= $konfigurasi->instagram; ?>" class="mx-2" data-toggle="tooltip" data-placement="top"
						title="">
						<i class="fa fa-lg fa-instagram" aria-hidden="true"></i>
					</a>
					<a href="#" class="mx-2" data-toggle="tooltip" data-placement="top" title="">
						<i class="fa fa-lg fa-github" aria-hidden="true"></i>
					</a>
					<a href="<?= $konfigurasi->twitter; ?>" class="mx-2" data-toggle="tooltip" data-placement="top"
						title="">
						<i class="fa fa-lg fa-twitter" aria-hidden="true"></i>
					</a>
					<a href="#" class="mx-2" data-toggle="tooltip" data-placement="top" title="">
						<i class="fa fa-lg fa-spotify" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-lg-4">
					<h3 class="post-headline">Quick Links</h3>
					<div class="d-flex flex-column justify-content-start">
						<li><a href="<?= base_url('home')?>">Home Page</a></li>
						<li><a href="<?= base_url('about')?>">About</a></li>
						<?php foreach ($kategori as $kate) { ?>
						<li><a
								href="<?= base_url('homae/kategori/' . $kate['id_kategori'])?>"><?=$kate['nama_kategori'];?></a>
						</li>
						<?php } ?>
						<li><a href="<?= base_url('about')?>">Contact</a></li>

					</div>
				</div>
				<div class="col-lg-4">
					<h3 class="post-headline">Rescrtt</h3>
					<?php foreach ($kontenLimit as $value) :?>
					<ul>
						<li><i class="fa-solid fa-arrow-right"></i> <?= $value['judul'] ?></li>
					</ul>
					<?php endforeach;?>
				</div>



			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>
			document.write(new Date().getFullYear());

		</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
		<a href="https://colorlib.com" target="_blank">Dcouzza</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

	</footer>
	<!-- ##### Footer Area End ##### -->

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="<?= base_url('assets/master/')?>js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="<?= base_url('assets/master/')?>js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?= base_url('assets/master/')?>js/bootstrap.min.js"></script>
	<!-- Plugins js -->
	<script src="<?= base_url('assets/master/')?>js/plugins.js"></script>
	<!-- Active js -->
	<script src="<?= base_url('assets/master/')?>js/active.js"></script>

</body>

</html>
