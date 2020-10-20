<?php 
	// Template Name: Home
	$produtos = get_page_by_title('produtos');
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php 
		$image_id = get_field('background_home');

		$image_large = wp_get_attachment_image_src($image_id, 'large');
		$image_medium = wp_get_attachment_image_src($image_id, 'medium');
	?>
		<style>
			.introducao {
				background-image: url(<?php echo $image_large[0]; ?>);
			}

			@media only screen and (max-width: 767px) {
				.introducao {
					background-image: url(<?php echo $image_medium[0]; ?>);
				}	
			}
		</style>
		
		<section class="introducao">
			<div class="container">
				<h1><?php the_field('intro_title'); ?></h1>
				<blockquote class="quote-externo">
					<p><?php the_field('intro_quote'); ?></p>
					<cite><?php the_field('intro_author'); ?></cite>
				</blockquote>
				<a href="<?php bloginfo('url'); ?>/produtos/#orcamento" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<?php
					$args = array (
						'post_type' => 'produtos',
						'order' => 'ASC'
					);
					$the_query = new WP_Query ( $args );
				?>

				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<li class="grid-1-3">
						<a href="<?php the_permalink(); ?>">
							<div class="produtos_icone">
								<img src="<?php the_field('produto_icon'); ?>" alt="<?php bloginfo('name'); ?> <?php the_title(); ?>">
							</div>

							<h3><?php the_title(); ?></h3>
							<p><?php the_field('produto_description_resume'); ?></p>
						</a>
					</li>

					
				<?php endwhile; else: endif; ?>
				<?php wp_reset_query(); wp_reset_postdata(); ?>

			</ul>

			<div class="call">
				<p><?php the_field('produtos_call'); ?></p>
				<a href="<?php bloginfo('url'); ?>/produtos" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>
				
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>