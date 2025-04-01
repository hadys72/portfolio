<?php get_header(); ?>

<main class="single-portfolio container">
    <h1><?php the_title(); ?></h1>

    <div class="meta">
        <p><strong>Client :</strong> <?php echo esc_html(SCF::get('client')); ?></p>
        <p><strong>Date :</strong> <?php echo esc_html(SCF::get('date_de_realisation')); ?></p>
        <p><strong>Lien :</strong> 
            <a href="<?php echo esc_url(SCF::get('lien_du_projet')); ?>" target="_blank">Voir le projet</a>
        </p>
    </div>

    <div class="content">
        <?php the_content(); ?>
    </div>

    <?php
    $images = SCF::get('galerie_dimages');
    if (!empty($images)) :
        echo '<div class="portfolio-gallery">';
        foreach ($images as $image_id) {
            echo wp_get_attachment_image($image_id, 'medium');
        }
        echo '</div>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
