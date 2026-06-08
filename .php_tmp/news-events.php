<!doctype html>
<html lang="en">

<?php
$title = 'News & Events | Refractotherm';
$description = 'Stay updated with the latest news, events, industry exhibitions, and announcements from Refractotherm India LLP.';
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'news-and-events';
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.jfif');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Latest Updates</span>
      <h2 class="page-banner-title">News & Events</h2>
      <p class="lead page-banner-lead">Keep up with our recent milestones, product launches, and upcoming industry exhibitions around the world.</p>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center reveal">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Announcements</span>
          <h3>Recent Happenings</h3>
        </div>
      </div>
      
      <div class="premium-why-grid">
        <!-- Placeholder News 1 -->
        <div class="premium-why-card reveal">
          <div class="premium-why-icon">
            <i class="fa-solid fa-calendar-check"></i>
          </div>
          <span style="display: block; font-size: 0.9rem; color: var(--orange); margin-bottom: 10px; font-weight: bold;">Upcoming Exhibition</span>
          <h3 class="premium-why-title">Global Steel Tech Expo 2026</h3>
          <p class="premium-why-desc">Join Refractotherm at the upcoming international steel exhibition where we will be showcasing our newest ultra-low cement castable formulations.</p>
        </div>

        <!-- Placeholder News 2 -->
        <div class="premium-why-card reveal">
          <div class="premium-why-icon">
            <i class="fa-solid fa-industry"></i>
          </div>
          <span style="display: block; font-size: 0.9rem; color: var(--orange); margin-bottom: 10px; font-weight: bold;">Corporate Milestone</span>
          <h3 class="premium-why-title">New Manufacturing Line Inauguration</h3>
          <p class="premium-why-desc">We have successfully launched our new automated production line for high-purity alumina slide gate plates, increasing our global capacity.</p>
        </div>

        <!-- Placeholder News 3 -->
        <div class="premium-why-card reveal">
          <div class="premium-why-icon">
            <i class="fa-solid fa-award"></i>
          </div>
          <span style="display: block; font-size: 0.9rem; color: var(--orange); margin-bottom: 10px; font-weight: bold;">Award Recognition</span>
          <h3 class="premium-why-title">Excellence in Engineering Award</h3>
          <p class="premium-why-desc">Refractotherm is proud to announce we have been recognized for outstanding contributions to metallurgical engineering and thermal efficiency.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
