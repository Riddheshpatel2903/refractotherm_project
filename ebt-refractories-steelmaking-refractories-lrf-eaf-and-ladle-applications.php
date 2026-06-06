<!doctype html>
<html lang="en">

<?php
$title = "Ebt Refractories Manufacturer & Supplier | Refractotherm";
$description = "EBT (Eccentric Bottom Tapping) Refractories constitute a specialized assembly used in modern Electric Arc Furnaces to achieve rapid, slag-free tapping. ...";
$keywords = "Ebt Refractories, Steelmaking Refractories Lrf Eaf And Ladle Applications, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>STEELMAKING REFRACTORIES (LRF, EAF &amp;
        LADLE APPLICATIONS)</span>
      <h2 class="page-banner-title">EBT Refractories</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/steelmaking/EBTRefractories.jpg"
          alt="EBT Refractories for Steelmaking and Ladle Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>EBT Refractories</h3>
        <p class="lead">EBT (Eccentric Bottom Tapping) Refractories constitute a specialized assembly used in modern
          Electric Arc Furnaces to achieve rapid, slag-free tapping. The system typically comprises top blocks, taphole
          tubes, and end blocks that form the complete vertical tapping channel.</p>
        <p>Manufactured from high-grade Magnesia Carbon or Alumina-Silicon Carbide-Carbon (Al2O3-SiC-C) compositions,
          our EBT refractories are engineered to withstand severe thermal shock and the abrasive force of high-velocity
          molten steel. They maintain a precise bore diameter, ensuring a compact, focused tap stream and preventing the
          entrainment of furnace slag into the ladle.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Facilitates rapid and clean, slag-free tapping operations
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Maintains precise bore diameter against severe steel erosion
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            High thermal shock resistance prevents cracking during operation
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Complete EBT assembly solutions tailored to specific EAF designs
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
            <h4 class="careers-timeline-title">Electric Arc Furnaces (EAF)</h4>
            <p class="careers-timeline-desc">Working linings, roofs, and tapholes.</p>
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
            <h4 class="careers-timeline-title">Secondary Metallurgy (LRF)</h4>
            <p class="careers-timeline-desc">Purging, alloying, and temperature control.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/steelmaking-refractories.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for EBT Refractories </h3>
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
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted âœ“';">
        <h3>Request EBT Refractories Quote</h3>
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
