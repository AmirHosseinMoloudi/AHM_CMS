<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="clr"></div>
<section id="content-outer">
	<div id="content-inner">
		<div class="ci-version-boxes">
			<div class="cv-boxes-version">
				<div class="version-name">AHM-CMS<br />
					<span class="version-no">v1.0</span>
				</div>
			</div><!--cv-boxes-version end-->
			<div class="cv-boxes-content">
				<p>Web-Blog Content Management System (CMS) Based on Official CodeIgniter Website</p>
				<div class="clr"></div>
				<div class="cv-boxes-buttons-area">
					<a href="<?= $v4link ?>" class="buttons download-buttons" target="_blank">دریافت</a>
					<a href="https://github.com/AmirHosseinMoloudi/AHM_CMS" class="buttons download-buttons" target="_blank">منبع</a>
				</div><!--cv-boxes-buttons-area end-->
			</div><!--cv-boxes-content end-->
		</div><!--ci-version-boxes end-->

	</div><!--content-inner end-->
</section><!--section end-->

<div class="clr"></div>

<?= $this->endSection() ?>
