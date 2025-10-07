<?php get_header(); ?>

<section class="hero">
    <div class="wrapper">
        <div class="hero-media">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="hero-content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<?php get_footer(); ?>