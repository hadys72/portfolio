<?php get_header(); ?>

<main class="portfolio-archive container">
    <h1>Nos Réalisations</h1>

    <div class="grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="portfolio-item">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo esc_html(SCF::get('client')); ?></p>
                </a>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
