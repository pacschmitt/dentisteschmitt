<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 2rem 0; border-bottom: 1px solid var(--border-color); margin-bottom: 2rem;">
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;
        ?>
        
        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta" style="color: var(--text-light); margin-top: 0.5rem;">
                <span><?php echo get_the_date(); ?></span>
            </div>
        <?php endif; ?>
    </header>

    <?php if (has_post_thumbnail() && !is_singular()) : ?>
        <div class="entry-thumbnail" style="margin: 1rem 0;">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: auto; border-radius: 10px;')); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if (is_singular()) :
            the_content();
        else :
            the_excerpt();
            ?>
            <a href="<?php the_permalink(); ?>" class="btn"><?php _e('Lire la suite', 'dentiste-schmitt'); ?></a>
            <?php
        endif;
        ?>
    </div>
</article>
