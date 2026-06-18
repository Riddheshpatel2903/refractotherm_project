<!doctype html>
<html lang="en">

<?php
$title = 'Testimonials | Refractotherm';
$description = "Read success stories and testimonials from global industries relying on Refractotherm's high-performance refractory products.";
$connonical_url = 'refractotherm.com';
$indexing = 'index, follow';

include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'testimonials';
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Client Success</span>
      <h1 class="page-banner-title">Testimonials</h1>
      <p class="lead page-banner-lead">Hear directly from our global partners and customers who trust our engineered refractory solutions.</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li><a href="about">About Us</a></li>
      <li class="active">Testimonials</li>
    </ol>
  </nav>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center reveal">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Feedback</span>
          <h2>What Our Clients Say</h2>
        </div>
      </div>
      
      <div class="testimonials-marquee-wrapper">
        <div class="testimonials-marquee-track">
          <!-- Placeholder Testimonial 1 -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"Refractotherm's flow control systems have significantly improved our ladle operations. Their slide gate plates provide consistent, reliable performance under extreme thermal shock conditions."</p>
            <h3 class="testimonial-author">- Operations Manager</h3>
          </div>

          <!-- Placeholder Testimonial 2 -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"The technical support team at Refractotherm is unmatched. Their customized pre-cast shapes helped us reduce downtime in our reheat furnaces by 30%. Excellent engineering solutions."</p>
            <h3 class="testimonial-author">- Technical Director</h3>
          </div>

          <!-- Placeholder Testimonial 3 -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"We rely on Refractotherm for our blast furnace tap hole clay. The consistency batch after batch ensures a smooth and controlled cast every time. Highly recommended partner."</p>
            <h3 class="testimonial-author">- Blast Furnace Superintendent</h3>
          </div>
          
          <!-- Duplicate for seamless scrolling -->
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"Refractotherm's flow control systems have significantly improved our ladle operations. Their slide gate plates provide consistent, reliable performance under extreme thermal shock conditions."</p>
            <h3 class="testimonial-author">- Operations Manager</h3>
          </div>
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"The technical support team at Refractotherm is unmatched. Their customized pre-cast shapes helped us reduce downtime in our reheat furnaces by 30%. Excellent engineering solutions."</p>
            <h3 class="testimonial-author">- Technical Director</h3>
          </div>
          <div class="testimonial-item">
            <i class="fa-solid fa-quote-left testimonial-icon"></i>
            <p class="testimonial-text">"We rely on Refractotherm for our blast furnace tap hole clay. The consistency batch after batch ensures a smooth and controlled cast every time. Highly recommended partner."</p>
            <h3 class="testimonial-author">- Blast Furnace Superintendent</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
