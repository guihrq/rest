<?php 

// Template Name: Sobre

?>

<?php get_header(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('foto_rest'); ?>" alt="Fachada do Rest">
			</div>

			<div class="grid-8">
			<?php if (have_rows('sobre_info')  ) : while ( have_rows('sobre_info')) : the_row(); ?>
					<h2><?php the_sub_field('titulo_historia'); ?></h2>
					<p><?php the_sub_field('texto_da_historia'); ?></p>
			<?php endwhile; else : endif; ?>
			</div>
		</section>
<?php get_footer(); ?>