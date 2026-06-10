<!doctype html>
<html lang="en">

<?php
$title = 'News & Events | Refractotherm';
$description = 'Stay updated with the latest news, events, industry exhibitions, and announcements from Refractotherm India LLP.';
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'news-events';
  $breadcrumbs = [
    ['label' => 'Home', 'url' => 'home'],
    ['label' => 'About Us', 'url' => 'about'],
    ['label' => 'News & Events', 'url' => '']
  ];
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Latest Updates</span>
      <h1 class="page-banner-title">News & Events</h1>
      <p class="lead page-banner-lead">Keep up with our recent milestones, product launches, and upcoming industry exhibitions around the world.</p>
    </div>
  </section>
  <?php include 'includes/breadcrumb.php'; ?>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center reveal">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Announcements</span>
          <h3>Recent Happenings</h3>
        </div>
      </div>
      
      <div class="news-card-grid">
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

        <!-- Placeholder News 3 -->
        <a href="excellence-in-engineering-award" class="news-card reveal">
          <div class="news-card__img-wrapper">
            <img class="news-card__img" src="assets/images/resources/site/ourcomitment.webp" alt="Excellence in Engineering Award">
          </div>
          <div class="news-card__content">
            <span class="news-card__category">Award Recognition</span>
            <h3 class="news-card__title">Excellence in Engineering Award</h3>
            <p class="news-card__desc">Refractotherm is proud to announce we have been recognized for outstanding contributions to metallurgical engineering and thermal efficiency.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
