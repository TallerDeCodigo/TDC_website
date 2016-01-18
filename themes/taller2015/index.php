	<?php get_header(); ?>
	<!-- Insert content here -->
	<div class="wrapper mil280">
		<section id="home" class="single-card-section top">
			<a href="<?php echo site_url(); ?>" rel="nofollow" class="logo full">Taller de Código</a>
			<img src="<?php echo THEMEPATH; ?>images/home_splash.jpg">
		</section>

	<?php $about_page = get_page_by_path('about-us'); ?>
		<section id="about-us" class="single-card-section">
			<h2><?php echo $about_page->post_title; ?></h2>
			<?php echo wpautop($about_page->post_content); ?>
		</section>
	

	<?php $contact_page = get_page_by_path('contact-us'); ?>
		<section id="contact-us">
			<h2><?php echo $contact_page->post_title; ?></h2>
		</section>
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>