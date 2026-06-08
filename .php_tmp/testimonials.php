<!doctype html>
<html lang="en">

<?php
$title = 'Testimonials | Refractotherm';
$description = "Read success stories and testimonials from global industries relying on Refractotherm's high-performance refractory products.";
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'testimonials';
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.jfif');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Client Success</span>
      <h2 class="page-banner-title">Testimonials</h2>
      <p class="lead page-banner-lead">Hear directly from our global partners and customers who trust our engineered refractory solutions.</p>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center reveal">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Feedback</span>
          <h3>What Our Clients Say</h3>
        </div>
      </div>
      
      <div class="premium-why-grid">
        <!-- Placeholder Testimonial 1 -->
        <div class="premium-why-card reveal">
          <div class="premium-why-icon">
            <i class="fa-solid fa-quote-left"></i>
          </div>
          <p class="premium-why-desc" style="font-style: italic;">"Refractotherm's flow control systems have significantly improved our ladle operations. Their slide gate plates provide consistent, reliable performance under extreme thermal shock conditions."</p>
          <h3 class="premium-why-title" style="margin-top: 15px; font-size: 1.1rem;">- Operations Manager, Integrated Steel Plant</h3>
        </div>

        <!-- Placeholder Testimonial 2 -->
        <div class="premium-why-card reveal">
          <div class="premium-why-icon">
            <i class="fa-solid fa-quote-left"></i>
          </div>
          <p class="premium-why-desc" style="font-style: italic;">"The technical support team at Refractotherm is unmatched. Their customized pre-cast shapes helped us reduce downtime in our reheat furnaces by 30%. Excellent engineering solutions."</p>
          <h3 class="premium-why-title" style="margin-top: 15px; font-size: 1.1rem;">- Technical Director, Rolling Mills Group</h3>
        </div>

        <!-- Placeholder Testimonial 3 -->
        <div class="premium-why-card reveal">
          <div class="premium-why-icon">
            <i class="fa-solid fa-quote-left"></i>
          </div>
          <p class="premium-why-desc" style="font-style: italic;">"We rely on Refractotherm for our blast furnace tap hole clay. The consistency batch after batch ensures a smooth and controlled cast every time. Highly recommended partner."</p>
          <h3 class="premium-why-title" style="margin-top: 15px; font-size: 1.1rem;">- Blast Furnace Superintendent, Global Steel Co.</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
