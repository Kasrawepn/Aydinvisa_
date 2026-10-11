<?php
/**
 * Visa & Aufenthalt — Visa- und Aufenthaltsberatung
 */

/*
Template Name: Visa & Aufenthalt
*/

get_header();

$aydin_visa_services = array(
	's1' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/>',
	's2' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2M3 13h18"/>',
	's3' => '<path d="M4 18V9l8-5 8 5v9"/><path d="M9 18v-6h6v6"/>',
	's4' => '<path d="m12 4 10 5-10 5L2 9l10-5Z"/><path d="M6 11.5V16c0 1.5 3 3 6 3s6-1.5 6-3v-4.5"/>',
	's5' => '<rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 9h8M8 13h8M8 17h5"/>',
	's6' => '<circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 19c0-3.3 2.7-6 6-6s6 2.7 6 6M15 14.2c3 .2 6 1.4 6 4.8"/>',
	's7' => '<rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M6 16c.5-1.5 1.7-2 3-2s2.5.5 3 2M15 10h3M15 14h3"/>',
);
$aydin_visa_de = array(
	's1' => array( 'Touristenvisum', 'Reise, Urlaub und Besuch — wir helfen bei Antrag und Unterlagen.' ),
	's2' => array( 'Geschäftsvisum', 'Für Geschäftsreisen, Messen und Termine bei Partnern.' ),
	's3' => array( 'Familienbesuchsvisum', 'Besuch bei Verwandten — mit Einladung und vollständigen Nachweisen.' ),
	's4' => array( 'Studentenvisum', 'Studium und Sprachkurs: Zulassung, Nachweise und Antrag.' ),
	's5' => array( 'Arbeitsvisum', 'Beschäftigung in Europa: Unterlagen, Ablauf und Antragstellung.' ),
	's6' => array( 'Familienzusammenführung', 'Nachzug von Ehepartnern und Kindern — Schritt für Schritt begleitet.' ),
	's7' => array( 'Aufenthaltserlaubnis', 'Erstantrag und Verlängerung von Aufenthaltstiteln.' ),
);
?>

<main id="main">

  <section class="page-hero">
    <div class="page-hero__media" data-parallax="0.1">
      <img src="<?php echo esc_url( aydin_asset( 'img/aydin-office.jpg' ) ); ?>" alt="Besprechungsraum von Aydın Beratung &amp; Logistik" fetchpriority="high">
    </div>
    <div class="page-hero__overlay"></div>
    <div class="container page-hero__inner">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( aydin_page_url( 'home' ) ); ?>" data-i18n="common.home">Startseite</a><span>/</span><span aria-current="page" data-i18n="nav.visa">Visa &amp; Aufenthalt</span>
      </nav>
      <h1 data-i18n="visa.hero.title">Visa- und Aufenthaltsberatung für Europa</h1>
      <p data-i18n="visa.hero.lead">Wir begleiten Sie bei Anträgen für alle europäischen Länder — vom ersten Gespräch bis zur Einreichung.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="split">
        <div class="split__text">
          <span class="eyebrow" data-reveal="fade" data-i18n="visa.intro.eyebrow">Beratung</span>
          <h2 data-reveal data-i18n="visa.intro.title">Professionelle Unterstützung von Anfang bis Ende</h2>
          <p class="lead" data-reveal data-i18n="visa.intro.lead">Unser Unternehmen berät bei Visa- und Aufenthaltsanträgen für europäische Länder und begleitet den gesamten Antragsprozess.</p>
          <p data-reveal data-i18n="visa.intro.body">Sie sagen uns Ihr Ziel — wir klären die nötigen Unterlagen, prüfen Ihre Anträge und bereiten alles für die Einreichung vor.</p>
          <div class="split__actions" data-reveal="fade">
            <a class="btn btn--navy" href="<?php echo esc_url( aydin_page_url( 'contact', '#quote' ) ); ?>" data-i18n="common.cta">Kontakt aufnehmen</a>
          </div>
        </div>
        <div class="split__media" data-reveal="scale">
          <div class="panel-media panel-media--wide img-zoom">
            <img src="<?php echo esc_url( aydin_asset( 'img/aydin-office.jpg' ) ); ?>" alt="Beratungsgespräch im Büro" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--soft" id="visa-services">
    <div class="container">
      <div class="section-head">
        <div>
          <span class="eyebrow" data-reveal="fade" data-i18n="visa.list.eyebrow">Unsere Leistungen</span>
          <h2 class="section-head__title" data-reveal data-i18n="visa.list.title">Visa und Aufenthalt — was wir für Sie tun</h2>
        </div>
        <p data-reveal data-i18n="visa.list.lead">Für jeden Zweck die passende Beratung.</p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.25rem" data-reveal-group="70">
        <?php foreach ( $aydin_visa_services as $key => $icon ) : ?>
        <article class="card" data-reveal>
          <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $icon; // phpcs:ignore WordPress.Security.EscapeOutput -- fixed markup above. ?></svg></div>
          <h3 data-i18n="visa.<?php echo esc_attr( $key ); ?>.title"><?php echo esc_html( $aydin_visa_de[ $key ][0] ); ?></h3>
          <p data-i18n="visa.<?php echo esc_attr( $key ); ?>.text"><?php echo esc_html( $aydin_visa_de[ $key ][1] ); ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="split split--reverse">
        <div class="split__text">
          <span class="eyebrow" data-reveal="fade" data-i18n="visa.process.eyebrow">Ablauf</span>
          <h2 data-reveal data-i18n="visa.process.title">So läuft die Beratung</h2>
          <p class="lead" data-reveal data-i18n="visa.process.lead">Drei klare Schritte bis zum fertigen Antrag.</p>
          <ul class="feature-list" data-reveal-group="80">
            <li data-reveal><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n-html="visa.process.b1"><strong>Erstgespräch.</strong> Wir klären Land, Zweck und Ihre Situation.</span></li>
            <li data-reveal><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n-html="visa.process.b2"><strong>Unterlagen.</strong> Sie erhalten eine genaue Liste, wir prüfen alles gemeinsam.</span></li>
            <li data-reveal><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span data-i18n-html="visa.process.b3"><strong>Antrag.</strong> Wir bereiten die Einreichung vor und begleiten Sie bis zum Abschluss.</span></li>
          </ul>
          <p class="visa-note" data-reveal data-i18n="visa.note">Hinweis: Wir beraten und unterstützen bei der Antragstellung. Die Entscheidung über Visa und Aufenthaltstitel treffen allein die zuständigen Behörden; ein Erfolg kann nicht garantiert werden.</p>
        </div>
        <div class="split__media" data-reveal="scale">
          <div class="panel-media panel-media--wide img-zoom">
            <img src="<?php echo esc_url( aydin_asset( 'img/aydin-team-1.jpg' ) ); ?>" alt="Ansprechpartner von Aydın Beratung &amp; Logistik" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="cta-band__media" data-parallax="0.08">
      <img src="<?php echo esc_url( aydin_asset( 'img/aydin-office.jpg' ) ); ?>" alt="" aria-hidden="true" loading="lazy">
    </div>
    <div class="container cta-band__inner">
      <div class="cta-band__copy">
        <span class="eyebrow eyebrow--light" data-i18n="visa.cta.eyebrow">Ihr Anliegen</span>
        <h2 data-i18n="visa.cta.title">Welches Visum brauchen Sie?</h2>
        <p style="color:rgba(255,255,255,.74)" data-i18n="visa.cta.text">Schreiben Sie uns per WhatsApp oder rufen Sie an — wir sagen Ihnen, welche Unterlagen nötig sind.</p>
      </div>
      <div class="cta-band__actions">
        <a class="btn btn--whatsapp btn--lg" href="https://wa.me/491608016659" target="_blank" rel="noopener" data-i18n="common.whatsapp">WhatsApp schreiben</a>
        <a class="btn btn--ghost-light btn--lg" href="tel:+491608016659">☎ +49 160 801 66 59</a>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
