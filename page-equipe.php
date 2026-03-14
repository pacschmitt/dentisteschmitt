<?php
/**
 * Template Name: Page Équipe
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
      <h1 class="entry-title">Notre Equipe</h1>
    </header>

    <!-- Custom Team Grid Section -->
    <section class="team-grid">
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

        <div class="cards-grid">
            <?php
            $team = array(
                'sacha'     => array( 'name' => 'Dr Sacha-Léo Schmitt', 'role' => 'Docteur', 'class' => 'text-primary font-weight-bold' ),
                'laurent'   => array( 'name' => 'Dr Laurent Schmitt',   'role' => 'Docteur', 'class' => 'text-primary font-weight-bold' ),
                'aline'     => array( 'name' => 'Dr Aline Koring',      'role' => 'Docteur', 'class' => 'text-primary font-weight-bold' ),
                'saskia'    => array( 'name' => 'Saskia Naz Bjuhr',     'role' => 'Hygiéniste', 'class' => 'text-secondary font-weight-bold' ),
                'neda'      => array( 'name' => 'Neda Dolatshahi',      'role' => 'Hygiéniste', 'class' => 'text-secondary font-weight-bold' ),
                'celine'    => array( 'name' => 'Céline Larouble',      'role' => 'Assistante', 'class' => 'text-muted' ),
                'perrine'   => array( 'name' => 'Perrine Vinsonneau',   'role' => 'Assistante', 'class' => 'text-muted' ),
                'fleuriane' => array( 'name' => 'Fleuriane Laurent',    'role' => 'Assistante', 'class' => 'text-muted' ),
                'alexandra' => array( 'name' => 'Alexandra Alves Poget','role' => 'Assistante', 'class' => 'text-muted' ),
            );

            foreach ( $team as $slug => $member ) :
                $img = get_theme_mod( "dentiste_schmitt_team_{$slug}" );
            ?>
            <div class="card">
                <?php if ( $img ) : ?>
                    <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" style="height:250px; width:100%; object-fit:cover; margin-bottom:20px; border-radius:8px;">
                <?php else : ?>
                    <div style="background:var(--color-bg-secondary); height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:var(--color-text-light);">Photo</div>
                <?php endif; ?>
                <h3><?php echo esc_html( $member['name'] ); ?></h3>
                <p class="<?php echo esc_attr( $member['class'] ); ?>"><?php echo esc_html( $member['role'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section></main><!-- #main -->

<?php
get_footer();
