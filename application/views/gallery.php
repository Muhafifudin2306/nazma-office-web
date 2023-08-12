<div class="container col-10">
	<div class="spacer navbar-space-lg"></div>
	<h4 class="title-section"> Galeri </h4>
	<div class="spacer spacer-lg"></div>
	<div class="gallery">
		<?php foreach ($frontdatablog as $data) { ?>
			<div class="gallery__column">
				<a href="<?= site_url() ?>front/detail_blog/<?= $data['slug'] ?>" target="_blank" class="gallery__link content">
					<figure class="gallery__thumb">
						<img src="<?= base_url() ?>assets/images/admin/blog/<?= $data['photo'] ?>" alt="Portrait by Jessica Felicio" class="gallery__image">
						<figcaption class="gallery__caption"><?= $data['title'] ?></figcaption>
					</figure>
				</a>
			</div>
		<?php } ?>
	</div>
	<div class="spacer spacer-md"></div>
	<div class="load">
		<a href="#" class="btn btn-primary bg-primary" id="loadMore">Lebih Banyak</a>
	</div>
	<div class="spacer spacer-lg"></div>
</div>