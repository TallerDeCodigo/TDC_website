	<?php get_header(); ?>
	<!-- Insert content here -->
	<section id="home" class="single-card-section top">
		<img src="<?php echo THEMEPATH; ?>images/home-splash.jpg" title="Taller de Código: Masters of code and sorcery">
	</section>
	<div class="wrapper mil280">

	<?php $about_page = get_page_by_path('about-us'); ?>
		<section id="about-us" class="single-card-section about">
			<h2><?php echo $about_page->post_title; ?></h2>
			<?php echo $about_page->post_content; ?>
		</section>
	

		<section id="work" class="single-card-section work">
			<h2>Proyectos en los que hemos colaborado</h2>
		<?php 
			$args = array(
							"post_type" 	 => "work",
							"posts_per_page" => 9,
							"post_status" 	 => "publish",
							"orderby" 	 	 => "post_date",
							"order" 	 	 => "ASC",
						);
			$work = new WP_Query($args);
			if( $work->have_posts() ): 
				while( $work->have_posts() ):
					$work->the_post();
				//setup_postdata($each_portfolio); ?>
			
				<article class="each_work_item">
				<?php the_post_thumbnail("full"); ?>
					<section class="hover">	
					<?php
						echo "<h3>".get_the_title()."</h3>";
						echo the_content(); ?>
					</section>
				</article>
		<?php
			// wp_reset_postdata();
			endwhile; endif; ?>
		</section> <!-- END work -->
	</div>
	
	<section id="team" class="single-card-section team">
			<h2>Equipo TDC</h2>
		<?php 
			$args = array(
							"post_type" 	 => "team",
							"posts_per_page" => 9,
							"post_status" 	 => "publish",
							"orderby" 	 	 => "post_date",
							"order" 	 	 => "ASC",
						);
			$team = new WP_Query($args);
			if( $team->have_posts() ): 
				while( $team->have_posts() ):
					$team->the_post();
				//setup_postdata($each_portfolio); ?>
			
				<article class="each_team_item">
				<?php the_post_thumbnail("full"); ?>
					<section class="card">	
					<?php
						echo "<h3>".get_the_title()."</h3>";
						echo the_content(); ?>
					</section>
				</article>
		<?php
			// wp_reset_postdata();
			endwhile; endif; ?>
		</section> <!-- END team -->
	</div>

	<?php $contact_page = get_page_by_path('contact-us'); ?>
		<section id="contact-us" class="single-card-section contact">
			<h2><?php echo $contact_page->post_title; ?></h2>
			<img class="static-map" src="https://maps.googleapis.com/maps/api/staticmap?scale=2&center=19.3937908,-99.1713553&zoom=16&size=1280x200&key=AIzaSyDq1KS_swNYGVo7LRKyEf7vGLaSqGrQcGs">
			<section class="addr_info">
				Luz Saviñon 20 - PH,<br>
				Col. Del Valle<br>
				México, D.F.
			</section>
			<form class="contact_form">
				<input type="text" name="cl_name" placeholder="Nombre">
				<input type="text" name="cl_email" placeholder="Email">
				<textarea name="cl_comment" placeholder="Escribe tus comentarios..."></textarea>
				<input type="submit" value="Enviar">
			</form>
		</section>
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>