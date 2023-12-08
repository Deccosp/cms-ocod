<!-- ##### Hero Area Start ##### -->

<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">

	<div class="container">
		<a href="" class="post-tag"><h1 class="text-center mb-4 post-tag">Galeri</h1></a>
	
		<!-- Single Blog Area  -->
		<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
			<div class="row align-items-center">
				<?php foreach($galeri as $as):?>
				<div class="col-12 col-lg-4">
					<div class="single-blog-thumbnail post">
						<img src="<?= base_url('assets/upload/galeri/'.$as['foto'])?>" alt="">
						<h4 class="post-meta"><a href="#" class="post-headline"><?= $as['judul'];?></a></h4>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>


		<!-- Load More -->
		<!-- <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
						<a href="#" class="btn original-btn">Read More</a>
					</div> -->
	</div>
</div>
<!-- ##### Blog Wrapper End ##### -->
