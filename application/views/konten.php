
	<!-- ##### Blog Wrapper Start ##### -->
	<div class="blog-wrapper section-padding-100 clearfix">

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-9">

					<?php foreach($konten as $as):?>
					<!-- Single Blog Area  -->
					<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s"
						data-wow-duration="1000ms">
						<div class="row align-items-center">
							<div class="col-12 col-md-6">
								<div class="single-blog-thumbnail">
									<img src="<?= base_url('assets/upload/konten/'.$as['foto'])?>" alt="">
									<div class="post-date">
										<?= $as['tanggal'];?>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<!-- Blog Content -->
								<div class="single-blog-content">
									<h4><a href="#" class="post-headline"><?= $as['judul'];?></a></h4>
									<a href="#" class="post-tag"><?= $as['nama_kategori'];?></a>
									<div class="line"></div>
									<p><?= word_limiter($as['keterangan'],30);?></p>
									<div class="post-meta">
										<p>By <a href="#"><?= $as['nama'];?></a></p>
										<p><a href="<?= base_url('Dashboard/artikel/'. $as['slug'])?>">Baca Selengkapnya</a></p>
										

									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>

					<!-- Load More -->
					<!-- <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
						<a href="#" class="btn original-btn">Read More</a>
					</div> -->
				</div>

				<!-- ##### Sidebar Area ##### -->
				<div class="col-12 col-md-4 col-lg-3">
					<div class="post-sidebar-area">

						<!-- Widget Area -->
						<div class="sidebar-widget-area">
							<form action="#" class="search-form">
								<input type="search" name="search" id="searchForm" placeholder="Search">
								<input type="submit" value="submit">
							</form>
						</div>

						<!-- Widget Area -->
						<!-- Widget Area -->
						<div class="sidebar-widget-area">
							<h5 class="title">Latest Posts</h5>

							<div class="widget-content">

								<?php foreach ($kontenLimit as $key):?>
								<!-- Single Blog Post -->
								<div class="single-blog-post d-flex align-items-center widget-post">
									<!-- Post Thumbnail -->
									<div class="post-thumbnail">
										<img src="<?= base_url('assets/upload/konten/'.$key['foto'])?>" alt="">
									</div>
									<!-- Post Content -->
									<div class="post-content">
										<a href="<?= base_url('Dashboard/konten/'. $key['id_kategori'])?>" class="post-tag"><?=$key['nama_kategori']?></a>
										<h4><a href="<?= base_url('Dashboard/artikel/'. $key['slug'])?>" class="post-headline"><?= $key['judul'];?></a></h4>
										<div class="post-meta">
											<p><a href="#"><?= $key['tanggal'];?></a></p>
										</div>
									</div>
								</div>
								<?php endforeach;?>

							</div>
						</div>

						<!-- Widget Area -->
						<div class="sidebar-widget-area">
							<h5 class="title">Tags</h5>
							<div class="widget-content">
								<ul class="tags">
									<?php foreach ($kategori as $kete) :?>
									<li><a href="<?= base_url('dashboard/konten/'.$kete['id_kategori'])?>"><?= $kete['nama_kategori']; ?></a></li>
									<?php endforeach;?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Blog Wrapper End ##### -->
