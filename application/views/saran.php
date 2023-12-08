<div class="container">
	<div class="contact-form">
		<h5>Get in Touch</h5>
		<!-- Contact Form -->
		<form action="<?= base_url('dashboard/saranTambah')?>" method="post">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="group">
						<input type="text" name="nama" id="name" required autocomplete="off">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Name</label>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="group">
						<input type="email" name="email" id="email" required  autocomplete="off">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Email</label>
					</div>
				</div>
				<div class="col-12">
					<div class="group">
						<textarea name="isi_saran" id="message" required  autocomplete="off"></textarea>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Message</label>
					</div>
				</div>
				<div class="col-12 mb-3">
					<button type="submit" class="btn original-btn">Send Message</button>
				</div>
			</div>
		</form>
	</div>
</div>
