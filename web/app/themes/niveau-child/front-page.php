<?php
get_header(); ?>

<div class="homepage">
    <section class="about-student">
        <h1>Bonjour, je suis Baptiste Delhaye</h1>
        <h2><?php echo  get_field("presentation")?></h2>
        <section class="skills">
    <h2>Mes compétences</h2>
    <ul class="competences-list">
        <?php
        // Récupérer les compétences depuis ACF
        $competences = get_field('competences'); // récupère le champ 'competences'
        if ($competences) :
            // Si le champ est un tableau (par exemple "Repeater" ou "Checkbox"), on parcourt chaque compétence
            if (is_array($competences)) :
                foreach ($competences[0] as $competence) :
                    echo '<li>' . esc_html($competence) . '</li>';
                endforeach;
            else :
                // Si le champ est un texte simple, affichez-le directement
                echo '<li>' . esc_html($competences) . '</li>';
            endif;
        else :
            echo '<p>Aucune compétence définie pour l\'instant.</p>';
        endif;
        ?>
    </ul>
</section>

    <section class="best-projects">
        <h2>Mes meilleures réalisations</h2>
        <div class="projects-grid">
            <?php
            // Afficher les trois meilleures réalisations, définies via ACF
            $best_projects = get_field('meilleures_realisations'); // Champ ACF dans les options

            if ($best_projects) :
                foreach ($best_projects as $post) :
                    setup_postdata($post);
                    ?>
                    <div class="project-item">
                        <h3><?php the_title(); ?></h3>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>">Voir la réalisation</a>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</div>

<?php
get_footer();
