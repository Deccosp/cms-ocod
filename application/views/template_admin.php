<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- theme meta -->
	<meta name="theme-name" content="quixlab" />

	<title><?= $judul_halaman ;?></title>
	<!-- Favicon icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/depan/')?>images/favicon.png">
	<!-- Pignose Calender -->
	<link href="<?= base_url('assets/depan/')?>plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
	<!-- Chartist -->
	<link rel="stylesheet" href="<?= base_url('assets/depan/')?>plugins/chartist/css/chartist.min.css">
	<link rel="stylesheet"
		href="<?= base_url('assets/depan/')?>plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
	<!-- Custom Stylesheet -->
	<link href="<?= base_url('assets/depan/')?>css/style.css" rel="stylesheet">
	<!-- Place the first <script> tag in your HTML's <head> -->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
		<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
</head>

<body>
	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<div class="brand-logo">
				<a href="index.html">
					<b class="logo-abbr"><img src="<?= base_url('assets/depan/')?>images/logo.png" alt=""> </b>
					<span class="logo-compact"><img src="<?= base_url('assets/depan/')?>images/logo-compact.png"
							alt=""></span>

					<span class="brand-title">
						<img src="<?= base_url('assets/depan/')?>images/logo-text.png" alt="">
					</span>
				</a>

			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">



			<div class="header-content clearfix">
				<div class="header-right">
					<ul class="clearfix">
						<li class="icons dropdown">
							<div class="user-img c-pointer position-relative" data-toggle="dropdown">
								<span class="activity active"></span>
								<img src="<?= base_url('assets/depan/')?>images/user/1.png" height="40" width="40"
									alt="">
							</div>
							<div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
								<div class="dropdown-content-body">
									<ul>
										<li>
											<a href="app-profile.html"><i class="icon-user"></i>
												<span>Profile</span></a>
										</li>
										<li>
											<a href="javascript:void()">
												<i class="icon-envelope-open"></i> <span>Inbox</span>
												<div class="badge gradient-3 badge-pill gradient-1">3</div>
											</a>
										</li>

										<hr class="my-2">
										<li>
											<a href="page-lock.html"><i class="icon-lock"></i> <span>Lock
													Screen</span></a>
										</li>
										<li><a href="<?= base_url('admin/auth/logout')?>"><i class="icon-key"></i>
												<span>Logout</span></a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="nk-sidebar">
			<div class="nk-nav-scroll">
				<ul class="metismenu" id="menu">
					<li>
						<a href="<?= base_url('admin/home')?>" aria-expanded="True">
							<i class="icon-speedometer menu-icon"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li class="nav-label">Menu</li>
					<li>
						<a href="<?= base_url('admin/caraousel')?>" aria-expanded="false">
							<i class="icon-grid menu-icon"></i>
							<span class="nav-text">Caraousel</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/kategori')?>" aria-expanded="false">
							<i class="icon-graph menu-icon"></i>
							<span class="nav-text">Kategori Konten</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/konten')?>" aria-expanded="false">
							<i class="fa-regular fa-circle-play"></i>
							<span class="nav-text">Konten</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/konfigurasi')?>" aria-expanded="false">
							<i class="icon-note menu-icon"></i>
							<span class="nav-text">Konfigurasi</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/galeri')?>" aria-expanded="false">
							<i class="fa-regular fa-image"></i>
							<span class="nav-text">Galeri</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/saran')?>" aria-expanded="false">
							<i class="fa-regular fa-message"></i>
							<span class="nav-text">Saran</span>
						</a>
					</li>
					<li class="nav-label">Admin Page</li>
					<li>
						<a href="<?= base_url('admin/user')?>" aria-expanded="false">
							<i class="icon-user menu-icon"></i>
							<span class="nav-text">User</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/loginrct')?>" aria-expanded="false">
							<i class="fa-solid fa-right-to-bracket"></i>
							<span class="nav-text">Recent Login</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid mt-2 ">
				<?= $contents; ?>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->


		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright &copy; Designed & Developed by <a>Decco</a>
					Skandakra</p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->
	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<script src="<?= base_url('assets/depan/')?>plugins/common/common.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>js/custom.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>js/settings.js"></script>
	<script src="<?= base_url('assets/depan/')?>js/gleek.js"></script>
	<script src="<?= base_url('assets/depan/')?>js/styleSwitcher.js"></script>

	<!-- Chartjs -->
	<script src="<?= base_url('assets/depan/')?>plugins/chart.js/Chart.bundle.min.js"></script>
	<!-- Circle progress -->
	<script src="<?= base_url('assets/depan/')?>plugins/circle-progress/circle-progress.min.js"></script>
	<!-- Datamap -->
	<script src="<?= base_url('assets/depan/')?>plugins/d3v3/index.js"></script>
	<script src="<?= base_url('assets/depan/')?>plugins/topojson/topojson.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>plugins/datamaps/datamaps.world.min.js"></script>
	<!-- Morrisjs -->
	<script src="<?= base_url('assets/depan/')?>plugins/raphael/raphael.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>plugins/morris/morris.min.js"></script>
	<!-- Pignose Calender -->
	<script src="<?= base_url('assets/depan/')?>plugins/moment/moment.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>plugins/pg-calendar/js/pignose.calendar.min.js"></script>
	<!-- ChartistJS -->
	<script src="<?= base_url('assets/depan/')?>plugins/chartist/js/chartist.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js">
	</script>



	<script src="<?= base_url('assets/depan/')?>js/dashboard/dashboard-1.js"></script>

</body>

</html>
