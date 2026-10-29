<?php
/**
 * Template Name: Page Équipe
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding interior-page team-page">

    <?php dentiste_schmitt_page_intro( __( 'Notre Équipe', 'dentiste-schmitt' ), dentiste_schmitt_text( 'Les visages du cabinet', 'Meet the team' ), dentiste_schmitt_text( 'Dentistes, hygiénistes et assistantes : découvrez les membres de notre équipe.', 'Dentists, hygienists and assistants: meet the members of our team.' ) ); ?>

    <!-- Custom Team Grid Section -->
    <section class="team-grid">
        <div class="team-toolbar" hidden data-team-controls>
            <div class="team-filters" role="group" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Filtrer l’équipe', 'Filter the team' ) ); ?>">
                <?php foreach ( array( 'all' => dentiste_schmitt_text( 'Toute l’équipe', 'All team members' ), 'dentist' => dentiste_schmitt_text( 'Dentistes', 'Dentists' ), 'hygienist' => dentiste_schmitt_text( 'Hygiénistes', 'Hygienists' ), 'assistant' => dentiste_schmitt_text( 'Assistantes', 'Assistants' ) ) as $key => $label ) : ?>
                <button type="button" class="team-filter" data-team-filter="<?php echo esc_attr( $key ); ?>" aria-pressed="<?php echo 'all' === $key ? 'true' : 'false'; ?>"><?php echo esc_html( $label ); ?></button>
                <?php endforeach; ?>
            </div>
            <p class="team-count" role="status" aria-live="polite" data-team-count></p>
        </div>
        <div class="cards-grid">
            <?php
            $team = array(
                'sacha'     => array( 'name' => 'Dr Sacha-Léo Schmitt', 'role' => __( 'Docteur', 'dentiste-schmitt' ), 'class' => 'text-primary font-weight-bold' ),
                'laurent'   => array( 'name' => 'Dr Laurent Schmitt',   'role' => __( 'Docteur', 'dentiste-schmitt' ), 'class' => 'text-primary font-weight-bold' ),
                'aline'     => array( 'name' => 'Dr Aline Koring',      'role' => __( 'Docteur', 'dentiste-schmitt' ), 'class' => 'text-primary font-weight-bold' ),
                'saskia'    => array( 'name' => 'Saskia Naz Bjuhr',     'role' => __( 'Hygiéniste', 'dentiste-schmitt' ), 'class' => 'text-secondary font-weight-bold' ),
                'neda'      => array( 'name' => 'Neda Dolatshahi',      'role' => __( 'Hygiéniste', 'dentiste-schmitt' ), 'class' => 'text-secondary font-weight-bold' ),
                'celine'    => array( 'name' => 'Céline Larouble',      'role' => __( 'Assistante', 'dentiste-schmitt' ), 'class' => 'text-muted' ),
                'perrine'   => array( 'name' => 'Perrine Vinsonneau',   'role' => __( 'Assistante', 'dentiste-schmitt' ), 'class' => 'text-muted' ),
                'fleuriane' => array( 'name' => 'Fleuriane Laurent',    'role' => __( 'Assistante', 'dentiste-schmitt' ), 'class' => 'text-muted' ),
                'alexandra' => array( 'name' => 'Alexandra Alves Poget','role' => __( 'Assistante', 'dentiste-schmitt' ), 'class' => 'text-muted' ),
            );

            foreach ( $team as $slug => $member ) :
                $img = get_theme_mod( "dentiste_schmitt_team_{$slug}" );
                $group = in_array( $slug, array( 'sacha', 'laurent', 'aline' ), true ) ? 'dentist' : ( in_array( $slug, array( 'saskia', 'neda' ), true ) ? 'hygienist' : 'assistant' );
                $parts = preg_split( '/[\s-]+/u', preg_replace( '/^Dr\s+/u', '', $member['name'] ) );
                $initials = mb_substr( $parts[0], 0, 1 ) . mb_substr( end( $parts ), 0, 1 );
            ?>
            <article class="team-card" data-team-group="<?php echo esc_attr( $group ); ?>">
                <div class="team-portrait">
                <?php if ( $img ) : ?>
                    <?php echo dentiste_schmitt_image( $img, sprintf( __( 'Portrait de %s, %s au Cabinet Dentaire Schmitt', 'dentiste-schmitt' ), $member['name'], $member['role'] ), array( 'sizes' => '(max-width: 768px) 100vw, 33vw' ) ); ?>
                <?php else : ?>
                    <div class="team-monogram" aria-hidden="true"><?php echo esc_html( $initials ); ?></div>
                <?php endif; ?>
                </div><div class="team-card-caption">
                <h3><?php echo esc_html( $member['name'] ); ?></h3>
                <p class="<?php echo esc_attr( $member['class'] ); ?>"><?php echo esc_html( $member['role'] ); ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="team-approach"><p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Notre approche', 'Our approach' ) ); ?></p>
        <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <p class="lead">
                <?php
                echo wp_kses_post(
                    __( 'Notre équipe se compose de nos trois chirurgiens-dentistes : <strong>Dr Laurent Schmitt</strong>, <strong>Dr Sacha Schmitt</strong> et <strong>Dr Aline Koring</strong>, de nos deux hygiénistes Mme Saskia Naz et Mme Néda Dolatshahi ainsi que nos chaleureuses assistantes Mme Céline Larouble, Mme Perrine Vinsonneau, Alexandra Alves Poget et Fleuriane Laurent.', 'dentiste-schmitt' )
                );
                ?>
            </p>
            <p>
                <?php esc_html_e( 'Nos spécialistes en soins bucco-dentaires vous accueillent avec bienveillance et professionnalisme dans notre cabinet dentaire. Ainsi, nous répondons aux normes imposées en termes d’hygiène et de technologie. Dans l’intention de toujours offrir un service de qualité à nos patients, nous collaborons également avec un prothésiste dentaire installé à Nyon, au plus près du cabinet. Nous pouvons ainsi garantir un résultat esthétique et durable conforme à vos attentes avec des produits de qualité.', 'dentiste-schmitt' ); ?>
            </p>
        </div>

    </section>
    <?php dentiste_schmitt_page_cta(); ?>
</main><!-- #main -->

<?php
get_footer();
