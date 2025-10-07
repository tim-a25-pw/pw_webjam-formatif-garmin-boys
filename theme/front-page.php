<?php
$args = [
    'post_type' => 'your_cpt_slug', // Change to your CPT slug
    'posts_per_page' => 3,
    'category_name' => 'plumbing', // Category slug
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <ul class="custom-post-list">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php else : ?>
    <p>No posts found in the plumbing category.</p>
<?php endif;

wp_reset_postdata();
?>
