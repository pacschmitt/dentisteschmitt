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
                    __( 'Notre équipe se compose de nos trois chirurgiens-dentistes : <strong>Dr Laurent Schmitt</strong>, <strong>Dr Sacha Schmitt</strong> et <strong>Dr Aline Koring</strong>, de nos deux hygiénistes Mme Saskia Naz et Mme Néda Dolatshahi ainsi que nos deux chaleureuses assistantes Mme Céline Larouble et Mme Lore Dutoit.', 'dentiste-schmitt' )
                );
                ?>
            </p>
            <p>
                <?php esc_html_e( 'Nos spécialistes en soins bucco-dentaires vous accueillent avec bienveillance et professionnalisme dans notre cabinet dentaire. Ainsi, nous répondons aux normes imposées en termes d’hygiène et de technologie. Dans l’intention de toujours offrir un service de qualité à nos patients, nous collaborons également avec un prothésiste dentaire installé à Nyon, au plus près du cabinet. Nous pouvons ainsi garantir un résultat esthétique et durable conforme à vos attentes avec des produits de qualité.', 'dentiste-schmitt' ); ?>
            </p>
        </div>

        <div class="cards-grid">
            <!-- Docteurs -->
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Dr Sacha-Léo Schmitt</h3>
                <p class="text-primary font-weight-bold">Docteur</p>
            </div>
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Dr Laurent Schmitt</h3>
                <p class="text-primary font-weight-bold">Docteur</p>
            </div>
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Dr Aline Koring</h3>
                <p class="text-primary font-weight-bold">Docteur</p>
            </div>

            <!-- Hygiénistes -->
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Saskia Naz Bjuhr</h3>
                <p class="text-secondary font-weight-bold">Hygiéniste</p>
            </div>
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Neda Dolatshahi</h3>
                <p class="text-secondary font-weight-bold">Hygiéniste</p>
            </div>

            <!-- Assistantes -->
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Céline Larouble</h3>
                <p class="text-muted">Assistante</p>
            </div>
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Perrine Vinsonneau</h3>
                <p class="text-muted">Assistante</p>
            </div>
            <div class="card">
                <div style="background:#f0f0f0; height:250px; margin-bottom:20px; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#999;">Photo</div>
                <h3>Alexandra Alves Poget</h3>
                <p class="text-muted">Assistante</p>
            </div>
        </div>
    </section></main><!-- #main -->

<?php
get_footer();
