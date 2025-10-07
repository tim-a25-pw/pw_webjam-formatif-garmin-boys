<?php get_header(); ?>

<section class="hero">
    <div class="wrapper">
        <h1>Rénover avec confiance, c’est Garmins</h1>
        <div class="category-links">
            <a href="#plomberie">Plomberie</a>
            <a href="#plomberie">Plomberie</a>
            <a href="#plomberie">Plomberie</a>
            <a href="#plomberie">Plomberie</a>
            <a href="#plomberie">Plomberie</a>
            <a href="#plomberie">Plomberie</a>
        </div>
    </div>
</section> 

<?php
$args = [
    'post_type' => 'cpt_produit', // Change to your CPT slug
    'posts_per_page' => 1,
    'category_name' => 'Plomberie', // Category slug
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <section class="category" id="<?php get_the_category() ?>">
        <div class="wrap">
            <h2><?php get_the_category() ?></h2>

            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="card">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="link">Voir plus</a>
                </div>
            <?php endwhile; ?>

        </div>
    </section>
<?php endif;

wp_reset_postdata();
?>

<?php get_footer(); ?>