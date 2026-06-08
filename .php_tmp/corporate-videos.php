<!doctype html>
<html lang="en">

<?php
$title = 'Corporate Videos | Refractotherm';
$description = "Watch Refractotherm's corporate videos highlighting our manufacturing processes, product demonstrations, and corporate vision.";
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'corporate-videos';
  include 'includes/navbar.php';
  ?>

  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.jfif');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Media Center</span>
      <h2 class="page-banner-title">Corporate Videos</h2>
      <p class="lead page-banner-lead">Explore our state-of-the-art facilities and witness our high-performance solutions in action.</p>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center reveal">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Watch & Learn</span>
          <h3>Our Latest Videos</h3>
        </div>
      </div>
      
      <!-- 2 Column Video Grid -->
      <div class="video-card-grid video-card-grid--2col">
        
        <!-- Video 1 -->
        <div class="video-card reveal">
          <div class="video-thumbnail">
                 <video autoplay loop muted playsinline class="video-thumbnail-bg">
                   <source src="assets/videos/Refractory.mp4" type="video/mp4">
                 </video>
           

            
            <div class="play-btn video-play-overlay"><i class="fa-solid fa-play"></i></div>
          </div>
          <div class="video-content">
            <h3 class="video-title">Corporate Profile</h3>
            <p class="video-desc">An overview of Refractotherm India LLP, our values, and our commitment to engineering excellence.</p>
          </div>
        </div>

        <!-- Video 2 -->
        <div class="video-card reveal">
          <div class="video-thumbnail">
                 <video autoplay loop muted playsinline class="video-thumbnail-bg">
                   <source src="assets/videos/Refractory.mp4" type="video/mp4">
                 </video>
            

            
            <div class="play-btn video-play-overlay"><i class="fa-solid fa-play"></i></div>
          </div>
          <div class="video-content">
            <h3 class="video-title">Manufacturing Facility Tour</h3>
            <p class="video-desc">Take a virtual tour through our modern manufacturing plants and quality control laboratories.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
