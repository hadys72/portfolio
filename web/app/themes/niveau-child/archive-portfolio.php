<?php
get_header(); ?>

<div class="portfolio-archive">
    <h1>Nos réalisations</h1>

    <div class="portfolio-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                echo '<div class="portfolio-item">';
                // Affichage de l'image mise en avant
                if (has_post_thumbnail()) :
                    the_post_thumbnail('medium');
                endif;

                // Affichage du titre
                echo '<h2>' . get_the_title() . '</h2>';

                // Récupération du champ ACF "client"
                $client = get_field('client');
                if ($client) {
                    echo '<p><strong>Client:</strong> ' . esc_html($client) . '</p>';
                }

                echo '<a href="' . get_permalink() . '">Voir la réalisation</a>';
                echo '</div>';
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
