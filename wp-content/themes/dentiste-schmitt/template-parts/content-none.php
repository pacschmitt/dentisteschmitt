<section class="no-results not-found" style="padding: 4rem 0; text-align: center;">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Aucun contenu trouvé', 'dentiste-schmitt'); ?></h1>
    </header>

    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p><?php
                printf(
                    wp_kses(
                        __('Prêt à publier votre premier article ? <a href="%1$s">Commencez ici</a>.', 'dentiste-schmitt'),
                        array('a' => array('href' => array()))
                    ),
                    esc_url(admin_url('post-new.php'))
                );
            ?></p>
        <?php elseif (is_search()) : ?>
            <p><?php _e('Désolé, aucun résultat ne correspond à votre recherche. Essayez avec des mots-clés différents.', 'dentiste-schmitt'); ?></p>
        <?php else : ?>
            <p><?php _e('Il semblerait que nous ne puissions pas trouver ce que vous cherchez. Peut-être qu\'une recherche pourrait aider.', 'dentiste-schmitt'); ?></p>
        <?php endif; ?>
    </div>
</section>
