<?php
/**
 * Galerie
 */

/*
Template Name: Galerie
*/

get_header();

$aydin_gallery = array(
	array( 'aydin-van-dark.jpg', 'gal.c.van', 'Unser Transporter', 'Transporter von Aydın Transport & Logistik' ),
	array( 'aydin-trucks.jpg', 'gal.c.fleet', 'Fahrzeuge im Einsatz', 'Transportfahrzeuge von Aydın Transport & Logistik' ),
	array( 'aydin-office.jpg', 'gal.c.office', 'Besprechungsraum', 'Besprechungsraum von Aydın Transport & Logistik' ),
	array( 'aydin-van-white.jpg', 'gal.c.van', 'Unser Transporter', 'Weißer Transporter von Aydın Transport & Logistik' ),
	array( 'aydin-team-1.jpg', 'gal.c.team', 'Unser Team', 'Team von Aydın Transport & Logistik' ),
	array( 'aydin-team-2.jpg', 'gal.c.team', 'Unser Team', 'Team von Aydın Transport & Logistik' ),
	array( 'aydin-team-3.jpg', 'gal.c.team', 'Unser Team', 'Team von Aydın Transport & Logistik' ),
	array( 'aydin-team-4.jpg', 'gal.c.team', 'Unser Team', 'Team von Aydın Transport & Logistik' ),
);
?>

<main id="main">

  <section class="page-hero">
    <div class="page-hero__media" data-parallax="0.1">
      <img src="<?php echo esc_url( aydin_asset( 'img/aydin-trucks.jpg' ) ); ?>" alt="Transportfahrzeuge von Aydın Transport &amp; Logistik" fetchpriority="high">
    </div>
    <div class="page-hero__overlay"></div>
    <div class="container page-hero__inner">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( aydin_page_url( 'home' ) ); ?>" data-i18n="common.home">Startseite</a><span>/</span><span aria-current="page" data-i18n="nav.gallery">Galerie</span>
      </nav>
      <h1 data-i18n="gal.hero.title">Einblicke in unsere Arbeit</h1>
      <p data-i18n="gal.hero.lead">Fahrzeuge, Team und Büro — so sind wir unterwegs und so arbeiten wir.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <div>
          <span class="eyebrow" data-reveal="fade" data-i18n="gal.eyebrow">Galerie</span>
          <h2 class="section-head__title" data-reveal data-i18n="gal.title">Bilder von Fuhrpark, Team und Büro</h2>
        </div>
        <p data-reveal data-i18n="gal.lead">Klicken Sie auf ein Bild, um es zu vergrößern.</p>
      </div>

      <div class="gallery-grid" data-reveal-group="60">
        <?php foreach ( $aydin_gallery as $item ) : ?>
        <figure class="gallery-item" data-reveal>
          <button class="gallery-item__btn" type="button" data-full="<?php echo esc_url( aydin_asset( 'img/' . $item[0] ) ); ?>" data-alt="<?php echo esc_attr( $item[3] ); ?>">
            <img src="<?php echo esc_url( aydin_asset( 'img/' . $item[0] ) ); ?>" alt="<?php echo esc_attr( $item[3] ); ?>" loading="lazy">
            <figcaption data-i18n="<?php echo esc_attr( $item[1] ); ?>"><?php echo esc_html( $item[2] ); ?></figcaption>
          </button>
        </figure>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="cta-band__media" data-parallax="0.08">
      <img src="<?php echo esc_url( aydin_asset( 'img/aydin-van-dark.jpg' ) ); ?>" alt="" aria-hidden="true" loading="lazy">
    </div>
    <div class="container cta-band__inner">
      <div class="cta-band__copy">
        <h2 data-i18n="gal.cta.title">Fragen zu Transport oder Visa?</h2>
        <p style="color:rgba(255,255,255,.74)" data-i18n="gal.cta.text">Wir beraten Sie gern persönlich.</p>
      </div>
      <div class="cta-band__actions">
        <a class="btn btn--gold btn--lg" href="<?php echo esc_url( aydin_page_url( 'contact', '#quote' ) ); ?>" data-i18n="common.quote">Angebot anfordern</a>
        <a class="btn btn--ghost-light btn--lg" href="tel:+491608016659">☎ +49 160 801 66 59</a>
      </div>
    </div>
  </section>

</main>

<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" hidden>
  <button class="lightbox__close" type="button" aria-label="Schließen" data-i18n-attr="aria-label:gal.close">×</button>
  <img class="lightbox__img" src="" alt="">
</div>

<?php
get_footer();
