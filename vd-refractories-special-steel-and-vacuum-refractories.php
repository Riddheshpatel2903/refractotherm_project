<!doctype html>
<html lang="en">

<?php
$title = "Vd Refractories Manufacturer & Supplier | Refractotherm";
$description = "VD (Vacuum Degassing) Refractories are utilized in secondary metallurgy to remove dissolved gases (hydrogen, nitrogen) and non-metallic inclusions from ...";
$keywords = "Vd Refractories, Special Steel And Vacuum Refractories, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = '';
  include 'includes/navbar.php';
  ?>
  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/RefractoryInstallation.webp');">
    </div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>SPECIAL STEEL &amp; VACUUM
        REFRACTORIES</span>
      <h2 class="page-banner-title">VD Refractories</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/spacial_steel/VDRefractories.jpg"
          alt="VD Refractories - Refractotherm" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>VD Refractories</h3>
        <p class="lead">VD (Vacuum Degassing) Refractories are utilized in secondary metallurgy to remove dissolved
          gases (hydrogen, nitrogen) and non-metallic inclusions from the steel bath.</p>
        <p>The VD process involves maintaining the ladle under a deep vacuum while vigorously stirring the melt with
          argon. Our highly durable Magnesia-Carbon bricks for the slag line and high-alumina/spinel castables for the
          ladle bottom ensure reliable performance. They resist the severe mechanical erosion caused by turbulent metal
          flow and prevent any refractory breakdown that could contaminate the clean steel.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Superior resistance to turbulent argon stirring under deep vacuum
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Prevents refractory contamination in ultra-clean steel production
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            High-strength Magnesia-Carbon slag line minimizes wear
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Ensures extended ladle campaigns in secondary metallurgy
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ENGINEERING SPECIFICS -->
  <section class="section section--alt">
    <div class="container">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Application</span>
          <h3>Standard Applications</h3>
        </div>
      </div>
      <div class="careers-timeline">
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">VOD &amp; VD Vessels</h4>
            <p class="careers-timeline-desc">High vacuum refining and secondary metallurgy.</p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Foundries & Metal Processing
            </h4>
            <p class="careers-timeline-desc">
              Suitable for melting and testing of ferrous and non-ferrous metals.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Chemical & Research Labs
            </h4>
            <p class="careers-timeline-desc">
              Provides reliable performance for high-temperature experiments.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">RH Degassers</h4>
            <p class="careers-timeline-desc">Lower vessels and snorkels for vacuum degassing.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/steel-and-vacume.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for VD Refractories </h3>
        <p>Connect with our refractory specialists to select the ideal Alumina Crucible for your laboratory,
          metallurgical, or industrial application. Custom sizes and high-purity grades are available based on your
          requirements.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:refectothermindia@gmail.com">refectothermindia@gmail.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request VD Refractories Quote</h3>
        <div class="row">
          <input type="text" class="inputsections" placeholder="Full Name" required />
          <input type="text" class="inputsections" placeholder="Company" required />
        </div>
        <div class="row">
          <input type="email" class="inputsections" placeholder="Work Email" required />
          <input type="tel" class="inputsections" placeholder="Phone" />
        </div>
        <textarea rows="4" class="inputsections"
          placeholder="Describe your quantity requirements, application temperatures, and any specific technical needs..."></textarea>
        <button type="submit" class="btn btn--primary btn--block">
          Get Product Quote <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
  </section>

  <!-- FOOTER -->

  <?php include 'includes/footer.php'; ?>

</body>

</html>