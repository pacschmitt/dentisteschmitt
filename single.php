<?php
/**
 * The template for displaying all single posts
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

	<?php
	while ( have_posts() ) :
		the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header text-center mb-5">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-meta">
                    <?php echo get_the_date(); ?>
                </div>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->
        <?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
