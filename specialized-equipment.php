<!doctype html>
<html lang="en">

<?php
$title = 'Specialized Equipment | Refractotherm';
$description = "Explore Refractotherm's high-performance specialized equipment including INTERFLOW® slide gates, LININGMAN® pneumatic vibrators, and custom AOD tuyeres.";
$keywords = 'Specialized Equipment, Ladle Slide Gate Systems, Pneumatic Lining Vibrator, AOD Tuyeres, Flow Control, Refractory Ramming Mass, Refractotherm';
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'specialized-equipment';
  include 'includes/navbar.php';
  ?>

  <!-- BANNER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Industrial Engineering</span>
      <h1 class="page-banner-title">Specialized Equipment</h1>
      <p class="lead page-banner-lead">High-Performance Refractory Installation &amp; Flow Control Systems</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li class="active">Specialized Equipment</li>
    </ol>
  </nav>

  <!-- INTRODUCTION -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Productivity &amp; Control</span>
          <h3>Engineered to maximize efficiency and process safety.</h3>
        </div>
      </div>
      <p class="section-intro-text">
        In addition to high-performance refractory materials, Refractotherm designs and supplies specialized equipment that critical process vessels rely on. Our engineering products are designed to withstand aggressive melting environments, streamline lining installation, and guarantee precise process metallurgy.
      </p>
    </div>
  </section>

  <!-- PRODUCTS GRID -->
  <section class="section section--alt">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Equipment Range</span>
          <h3>Specialized Systems portfolio</h3>
        </div>
      </div>

      <div class="specialized-grid">
        <!-- Card 1: INTERFLOW Ladle Slide Gate -->
        <a href="interflow-ladle-slide-gate-systems" class="category-card">
          <div class="category-card__img" style="background-image: url('assets/images/resources/products/interflow_slide_gate.png');"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Ladle Slide Gate Systems</h4>
            <div class="category-card__hover-content">
              <p>INTERFLOW® Ladle Slide Gate Systems deliver precise and reliable molten steel flow control during ladle and continuous casting operations.</p>
              <span class="category-card__link">View Product Details <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Card 2: Pneumatic Lining Vibrator -->
        <a href="pneumatic-lining-vibrator" class="category-card">
          <div class="category-card__img" style="background-image: url('assets/images/resources/products/pneumatic_lining_vibrator.png');"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Pneumatic Lining Vibrator</h4>
            <div class="category-card__hover-content">
              <p>LININGMAN® Pneumatic Lining Vibrator ensures uniform compaction and installation of dry ramming mass in induction furnaces.</p>
              <span class="category-card__link">View Product Details <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Card 3: AOD Tuyeres -->
        <a href="aod-tuyeres" class="category-card">
          <div class="category-card__img" style="background-image: url('assets/images/resources/products/aod_tuyeres.png');"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">AOD Tuyeres</h4>
            <div class="category-card__hover-content">
              <p>Custom-engineered high-performance gas injection nozzles for Argon Oxygen Decarburization (AOD) converters.</p>
              <span class="category-card__link">View Product Details <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
