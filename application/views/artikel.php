<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">

	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12">

				<!-- Single Blog Area  -->
				<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s"
					data-wow-duration="1000ms">
					<div class="row align-items-center">
						<div class="col-12 col-md-12">
							<div class="single-blog-thumbnail">
								<img src="<?= base_url('assets/upload/konten/'). $konten->foto;?>" alt="">
							</div>
						</div>
					</div>

				</div>
				<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s">
					<div class="col-12">
						<!-- Blog Content -->
						<div class="single-blog-content">
							<h4><a href="#" class="post-headline"><?= $konten->judul;?></a></h4>
							<a href="#" class="post-tag"><?= $konten->nama_kategori;?></a>
							<div class="line"></div>
							<p><?= $konten->keterangan;?></p>
							<div class="post-meta">
								<p>By <a href="#"><?= $konten->nama;?></a></p>
								


							</div>
							<div class="sidebar-widget-area">
							<h5 class="title">Kataegori</h5>
							<div class="widget-content">
								<ul class="tags">
									<?php foreach ($kategori as $kete) :?>
									<li><a href="<?= base_url('dashboard/konten/'. $kete['id_kategori']); ?>"><?= $kete['nama_kategori']; ?></a></li>
									<?php endforeach;?>
								</ul>
							</div>
						</div>
						</div>
					</div>
				</div>

				<!-- Load More -->
				<!-- <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
						<a href="#" class="btn original-btn">Read More</a>
					</div> -->
			</div>

			<!-- ##### Sidebar Area ##### -->

		</div>
	</div>
</div>
<!-- ##### Blog Wrapper End ##### -->
