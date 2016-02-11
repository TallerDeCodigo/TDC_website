	<?php get_header(); ?>
	<!-- Insert content here -->
	<section id="home" class="single-card-section top">
		<img src="<?php echo THEMEPATH; ?>images/home-splash.jpg" title="Taller de Código: Masters of code and sorcery">
	</section>
	

	<?php $about_page = get_page_by_path('about-us'); ?>
		<section class="single-card-section about">
			<div id="about-us" class="head_tag about">
				<h2><?php echo $about_page->post_title; ?></h2>
			</div>
			<div class="wrapper nueve60">
				
				<?php echo $about_page->post_content; ?>

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
			</div> <!-- END wrapper -->
		</section>
		
		<section class="single-card-section process clearfix">
			<div id="process" class="head_tag process"><h2>Proceso</h2></div>
			<div class="wrapper nueve60">
				<article class="process_cards">
					<img class="icon" src="<?php echo THEMEPATH; ?>images/process_1.png">
					<section>
						<h3>Toma de requerimientos</h3>
						<p>Para entender la necesidad del cliente, es necesario concer sus procesos internos y operación diaria, de este modo podemos ofrecer una mejor solución para la medida de su negocio.</p>
					</section>
				</article>
				
				<article class="process_cards">
					<img class="icon" src="<?php echo THEMEPATH; ?>images/process_2.png">
					<section>
						<h3>Arquitectura y conceptualización</h3>
						<p>Una vez que hemos abstraido el concepto, diseñamos los planos (arquitectura) del sitio, aplicación o sistema de nuestro cliente hasta cubrir el dominio de flujo de la información. <br> Es aquí donde nuestro expertise en UI y UX se conjuntan con el aspecto lógico para lograr una experiencia ideal al usuario final.</p>
					</section>
				</article>
				
				<article class="process_cards">
					<img class="icon" src="<?php echo THEMEPATH; ?>images/process_3.png">
					<section>
						<h3>Diseño</h3>
						<p>Con la arquitectura completa y lo suficientemente solida, la vestimos con la imágen, iconografía y colores para dar un toque final al producto y desarrollo de la marca.</p>
					</section>
				</article>
				
				<article class="process_cards">
					<img class="icon" src="<?php echo THEMEPATH; ?>images/process_4.png">
					<section>
						<h3>Desarrollo</h3>
						<p>Concluida la etapa de diseño, lo traducimos a tecnologías de código abierto para que sea compatible con cualquier plataforma o dispositivo en la que el producto pudiera llegar a ser consumido.</p>
					</section>
				</article>
				
			</div> <!-- END wrapper -->
		</section> <!-- END team -->


		<section class="single-card-section work clearfix">
			<div id="work" class="head_tag work">
				<h2>Proyectos</h2>
			</div>
			<div id="product_gallery" class="slider_products clearfix">
				<div class="viewport">
					<section class="overview">
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
								$terms = get_the_terms($post->ID, 'category');
								//print_r($terms); ?>
						
							<article class="each_work_item cast_shadow">
							<?php the_post_thumbnail("full"); ?>
								<section class="card_content clearfix">	
								<?php
									echo the_content(); 
									$link = get_post_meta($post->ID, '_link_meta', TRUE);
									if($link !== '') 
										echo "<a class='link icon' href='$link' target='_blank'><i class='material-icons'>&#xE157;</i></a>"; 
									if(!empty($terms)): ?>
									<section class="categories">
										<?php
										foreach ($terms as $each_category) {
											echo "<a class='taglike'>$each_category->name</a>";
										} ?>
									</section>
									<?php
									endif; ?>
								</section>
							</article>
						<?php
						endwhile; endif; ?>
					</section>
					<div class="clearfix"></div>
					<a class="buttons prev">Anterior</a>
					<a class="buttons next">Siguiente</a>
				</div> <!-- END viewport -->
			</div>
		</section> <!-- END work -->
	
	<?php $contact_page = get_page_by_path('contact-us'); ?>
		<section class="single-card-section contact">
			<div id="contact-us" class="head_tag map">
				<h2>Contacto</h2>
			</div>
			<img class="static-map" src="http://maps.google.com/maps/api/staticmap?scale=2&center=19.3938000,-99.1713557&zoom=17&size=680x680&markers=size:mid%7Ccolor:green%7Clabel:TDC%7C19.3937908,-99.1713553&key=AIzaSyDq1KS_swNYGVo7LRKyEf7vGLaSqGrQcGs&sensor=false">

			<form class="contact_form" action="<?php echo site_url('#contact-us?message=sent'); ?>" method="POST">
				<input type="text" name="cl_name" placeholder="Nombre">
				<input type="text" name="cl_email" placeholder="Email">
				<input type="text" name="cl_empresa" placeholder="Empresa">
				<input type="hidden" name="contact_form_action">
				<textarea name="cl_comment" placeholder="Mensaje..."></textarea>
				<input type="submit" value="Enviar">
			</form>
		</section>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>