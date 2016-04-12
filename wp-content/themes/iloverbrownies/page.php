<?php get_header(); ?>
	<section>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; else: ?>
			<!-- <h2>Nada Encontrado</h2>
			<p>Erro 404</p>
			<p>Lamentamos mas não foram encontrados artigos.</p> -->		
		<?php endif; ?>
	</section>
<?php get_footer(); ?>