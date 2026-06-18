<!doctype html>
<html lang="en">

<?php
$title = 'Excellence in Engineering Award | News & Events | Refractotherm';
$description = 'Refractotherm is proud to announce we have been recognized for outstanding contributions to metallurgical engineering and thermal efficiency.';
$connonical_url = 'refractotherm.com';
$indexing = 'index, follow';

include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'news-events';
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/ourcomitment.webp'); opacity: 0.2;"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Award Recognition</span>
      <h1 class="page-banner-title">Excellence in Engineering Award</h1>
      <p class="lead page-banner-lead">May 20, 2026</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li><a href="news-events">News &amp; Events</a></li>
      <li class="active">Excellence in Engineering Award</li>
    </ol>
  </nav>

  <!-- ARTICLE VIEW -->
  <section class="section">
    <div class="container news-detail-container">
      <!-- LEFT ARTICLE CONTENT -->
      <article class="news-detail-content">
        <div class="news-detail-img-wrapper">
          <img src="assets/images/resources/site/ourcomitment.webp" alt="Excellence in Engineering Award" class="news-detail-img" />
        </div>
        <div class="news-detail-body">
          <p>Refractotherm India LLP is proud and honored to announce that we have been awarded the prestigious <strong>Excellence in Engineering Award 2026</strong> by the National Metallurgy & Refractories Association. This recognition highlights our team's continuous dedication to high-temperature engineering research, thermal efficiency enhancement, and innovative material science.</p>
          
          <h2>Recognizing Innovation in Thermal Refractories</h2>
          <p>The engineering award specifically recognizes Refractotherm's breakthroughs in designing energy-saving, low-thermal-conductivity backup insulation materials and nano-bonded castable solutions. These advanced products have successfully helped our clients in the cement and steelmaking industries reduce energy loss, optimize heat retention, and lower overall furnace fuel consumption, resulting in a measurable reduction of carbon dioxide emissions.</p>
          
          <div class="news-detail-quote">
            <p>"This award is a testament to the hard work and passion of our entire research and development team, who strive every day to push the boundaries of refractory engineering and deliver sustainable value to our clients."</p>
            <cite>— Managing Partner, Refractotherm India LLP</cite>
          </div>

          <h2>Our Commitment to Continuous Progress</h2>
          <p>We extend our deepest gratitude to all our clients and business partners whose trust and collaboration have motivated our engineering innovations. Moving forward, Refractotherm remains dedicated to investing in metallurgical research, refining our custom casting formulations, and engineering solutions that contribute to a greener, more energy-efficient industrial landscape.</p>
        </div>
        <div class="news-detail-back-wrapper">
          <a href="news-events" class="btn btn--secondary"><i class="fa-solid fa-arrow-left"></i> Back to News & Events</a>
        </div>
      </article>

      <!-- MORE NEWS AT BOTTOM -->
      <div class="news-detail-more">
        <h3 class="news-detail-more-title">More News</h3>
        <div class="news-detail-more-grid">
          <!-- Placeholder News 1 -->
          <a href="global-steel-tech-expo-2026" class="news-card reveal">
            <div class="news-card__img-wrapper">
              <img class="news-card__img" src="assets/images/resources/site/steelplants.webp" alt="Global Steel Tech Expo 2026">
            </div>
            <div class="news-card__content">
              <span class="news-card__category">Upcoming Exhibition</span>
              <h3 class="news-card__title">Global Steel Tech Expo 2026</h3>
              <p class="news-card__desc">Join Refractotherm at the upcoming international steel exhibition where we will be showcasing our newest ultra-low cement castable formulations.</p>
            </div>
          </a>

          <!-- Placeholder News 2 -->
          <a href="new-manufacturing-line-inauguration" class="news-card reveal">
            <div class="news-card__img-wrapper">
              <img class="news-card__img" src="assets/images/resources/site/expandingcapabilities.webp" alt="New Manufacturing Line Inauguration">
            </div>
            <div class="news-card__content">
              <span class="news-card__category">Corporate Milestone</span>
              <h3 class="news-card__title">New Manufacturing Line Inauguration</h3>
              <p class="news-card__desc">We have successfully launched our new automated production line for high-purity alumina slide gate plates, increasing our global capacity.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
