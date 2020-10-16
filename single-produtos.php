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

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<form action="enviar.php" method="post" name="form" class="formphp form grid-8">
					<label for="nome">Nome</label>
					<input id="nome" name="nome" type="text">
					<label for="email">E-mail</label>
					<input id="email" name="email" type="text">
					<label for="telefone">Telefone</label>
					<input id="telefone" name="telefone" type="text">

					<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
					<input type="text" class="nao-aparece" name="leaveblank">
					<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
					<input type="text" class="nao-aparece" name="dontchange" value="http://" >

					<label for="mensagem">Especificações</label>
					<textarea name="mensagem" id="mensagem"></textarea>

					<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
				</form>
				
				<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
			</div>
		</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>