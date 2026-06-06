<!doctype html>
<html lang="en">

<?php
$title = "Fire Clay Bricks Manufacturer & Supplier | Refractotherm";
$description = "Fire Clay Bricks are alumino-silicate refractories containing typically 30% to 45% alumina. They provide a cost-effective, reliable solution for low to ...";
$keywords = "Fire Clay Bricks, Pre Cast Shapes And Refractory Bricks, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>PRE-CAST SHAPES &amp; REFRACTORY
        BRICKS</span>
      <h2 class="page-banner-title">Fire Clay Bricks</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/precast_shape/fireclaybricks.jfif"
          alt="Fire Clay Bricks - Pre-Cast Shapes and Bricks" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Fire Clay Bricks</h3>
        <p class="lead">Fire Clay Bricks are alumino-silicate refractories containing typically 30% to 45% alumina. They
          provide a cost-effective, reliable solution for low to medium temperature zones in a wide variety of
          industrial furnaces.</p>
        <p>Manufactured from high-quality calcined flint clay and plastic refractory clays, they offer good thermal
          shock resistance, low thermal conductivity, and adequate structural strength. They are extensively used in
          boiler linings, backup safety layers in ladles, blast furnace stacks, and general masonry construction.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Cost-effective solution for general-purpose furnace linings
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Good thermal shock resistance and moderate thermal conductivity
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent volume stability in low to medium temperature zones
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Ideal for boiler linings, flues, chimneys, and backup layers
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
            <h4 class="careers-timeline-title">Steel Reheating Furnaces</h4>
            <p class="careers-timeline-desc">Walking beams, hearth blocks, and burner quarls.</p>
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
            <h4 class="careers-timeline-title">General Industrial Boilers</h4>
            <p class="careers-timeline-desc">Fireclay masonry, arches, flues, and suspended roofs.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
    <?php include 'includes/product_suggestion/precast-shapes.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for Fire Clay Bricks </h3>
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
        <h3>Request Fire Clay Bricks Quote</h3>
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
