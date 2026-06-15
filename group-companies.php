<!doctype html>
<html lang="en">

<?php
$title = 'Group Companies | Refractotherm';
$description = "Refractotherm's global network and affiliated group companies driving excellence in the refractory industry.";
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'group-companies';
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Our Network</span>
      <h1 class="page-banner-title">Group Companies</h1>
      <p class="lead page-banner-lead">Discover our affiliated companies and strategic partners working together to deliver global refractory solutions.</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li><a href="about">About Us</a></li>
      <li class="active">Group Companies</li>
    </ol>
  </nav>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center reveal">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Global Reach</span>
          <h3>Our Affiliated Entities</h3>
        </div>
      </div>
      
      <div class="image-card-grid">
        <!-- Placeholder Company 1 -->
        <a href="#" class="image-card reveal" style="background-image: url('assets/images/resources/site/steelplants.webp');">
          <div class="image-card__content">
            <div class="image-card__icon">
              <i class="fa-solid fa-building"></i>
            </div>
            <h3 class="image-card__title">Refractotherm Manufacturing Hub</h3>
            <p class="image-card__desc">Our primary production facility equipped with state-of-the-art machinery for high-volume, precision manufacturing of refractory products.</p>
          </div>
        </a>

        <!-- Placeholder Company 2 -->
        <a href="#" class="image-card reveal" style="background-image: url('assets/images/resources/site/companyoverview.webp');">
          <div class="image-card__content">
            <div class="image-card__icon">
              <i class="fa-solid fa-flask"></i>
            </div>
            <h3 class="image-card__title">Advanced Material Labs R&D</h3>
            <p class="image-card__desc">Our dedicated research and development center focused on creating next-generation thermal and metallurgical solutions.</p>
          </div>
        </a>

        <!-- Placeholder Company 3 -->
        <a href="#" class="image-card reveal" style="background-image: url('assets/images/resources/site/steelplants.webp');">
          <div class="image-card__content">
            <div class="image-card__icon">
              <i class="fa-solid fa-globe"></i>
            </div>
            <h3 class="image-card__title">Global Distribution Partners</h3>
            <p class="image-card__desc">Our international logistics and distribution arm ensuring timely delivery of products across global markets.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
