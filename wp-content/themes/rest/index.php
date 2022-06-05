<?php get_header(); ?>

<?php if (have_posts()  ) : while ( have_posts()) : the_post(); ?>
    <section class="container sobre">
        <h2 class="subtitulo"><?php the_title(); ?></h2>

        <div class="grid-8">
        <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; else : ?>
    <section class="container">
        <div class="grid-16">
            <h2 class="subtitulo-erro">Desculpe, página não encontrada.</h2>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>