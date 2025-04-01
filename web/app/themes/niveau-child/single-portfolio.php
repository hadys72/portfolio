<?php
get_header(); ?>

<div class="portfolio-single">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Affichage du titre
            echo '<h1>' . get_the_title() . '</h1>';

            // Affichage de l'image mise en avant
            if (has_post_thumbnail()) :
                the_post_thumbnail('large');
            endif;

            // Affichage du contenu
            the_content();

            // Récupération et affichage des champs ACF
            $client = get_field('client');
            $date_de_realisation = get_field('date_de_realisation');
            $lien_du_projet = get_field('lien_du_projet');
            $galerie_images = get_field('galerie_d_images');

            if ($client) {
                echo '<p><strong>Client:</strong> ' . esc_html($client) . '</p>';
            }
            if ($date_de_realisation) {
                echo '<p><strong>Date de réalisation:</strong> ' . esc_html($date_de_realisation) . '</p>';
            }
            if ($lien_du_projet) {
                echo '<p><strong>Lien du projet:</strong> <a href="' . esc_url($lien_du_projet) . '" target="_blank">Voir le projet</a></p>';
            }
            if ($galerie_images) :
                echo '<div class="portfolio-gallery">';
                foreach ($galerie_images as $image) :
                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                endforeach;
                echo '</div>';
            endif;
        endwhile;
    endif;
    ?>
</div>

<?php
get_footer();
