<?php 
	// Template Name: Sobre
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>

				<?php the_field('sobre_story'); ?>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>

				<?php the_field('sobre_values'); ?>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('sobre_team_image'); ?>" alt="Equipe Bikcraft">
			</div>

		</section>

		<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
		

<?php endwhile; endif; ?>

<?php get_footer(); ?>