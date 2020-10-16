<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<style>
			.produto_item {
				margin-top: 92px;
			}
		</style>	

		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="<?php the_field('produto_main_picture'); ?>" alt="<?php bloginfo('name'); ?> <?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php the_field('produto_icon'); ?>" alt="Icone <?php the_title(); ?>">
			</div>
			
			<div class="grid-8">
				<img src="<?php the_field('produto_secondary_picture'); ?>" alt="<?php bloginfo('name'); ?> <?php the_title(); ?>">
			</div>
			<div class="grid-8 produto_info">
				<?php the_field('produto_description'); ?>

				<ul>
					<?php if( have_rows('produto_attributes') ): while( have_rows('produto_attributes') ) : the_row(); ?>

						<li><?php the_sub_field('produto_attribute_attribute'); ?></li>

					<?php endwhile; else : endif; ?>			
				</ul>
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>