<?php 
	// Template Name: Portfólio
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	

		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">

				<?php if(have_rows('portfolio_testimonials')): while(have_rows('portfolio_testimonials')) : the_row(); ?>


				<li>
					<blockquote class="quote_clientes">
						<?php the_sub_field('portfolio_quote'); ?>
						<cite><?php the_sub_field('portfolio_author'); ?></cite>
					</blockquote>
				</li>


				<?php endwhile; else : endif; ?>

			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>