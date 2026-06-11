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
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Client Success</span>
      <h1 class="page-banner-title">Testimonials</h1>
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
      
      <div class="testimonials-marquee-wrapper">
        <div class="testimonials-marquee-track">
          <!-- Placeholder Testimonial 1 -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"Refractotherm's flow control systems have significantly improved our ladle operations. Their slide gate plates provide consistent, reliable performance under extreme thermal shock conditions."</p>
            <h4 class="testimonial-author">- Operations Manager, Integrated Steel Plant</h4>
          </div>

          <!-- Placeholder Testimonial 2 -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"The technical support team at Refractotherm is unmatched. Their customized pre-cast shapes helped us reduce downtime in our reheat furnaces by 30%. Excellent engineering solutions."</p>
            <h4 class="testimonial-author">- Technical Director, Rolling Mills Group</h4>
          </div>

          <!-- Placeholder Testimonial 3 -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"We rely on Refractotherm for our blast furnace tap hole clay. The consistency batch after batch ensures a smooth and controlled cast every time. Highly recommended partner."</p>
            <h4 class="testimonial-author">- Blast Furnace Superintendent, Global Steel Co.</h4>
          </div>
          
          <!-- Duplicate for seamless scrolling -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"Refractotherm's flow control systems have significantly improved our ladle operations. Their slide gate plates provide consistent, reliable performance under extreme thermal shock conditions."</p>
            <h4 class="testimonial-author">- Operations Manager, Integrated Steel Plant</h4>
          </div>
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"The technical support team at Refractotherm is unmatched. Their customized pre-cast shapes helped us reduce downtime in our reheat furnaces by 30%. Excellent engineering solutions."</p>
            <h4 class="testimonial-author">- Technical Director, Rolling Mills Group</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
