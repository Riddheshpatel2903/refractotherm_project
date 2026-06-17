<!doctype html>
<html lang="en">

<?php
$title = 'Sillimanite Bricks Manufacturer & Supplier | Refractotherm';
$description = 'Sillimanite Bricks are high-grade alumino-silicate refractories (approx. 55-65% Al2O3) manufactured from natural sillimanite or kyanite minerals. They a...';
$keywords = 'Sillimanite Bricks, Pre Cast Shapes And Refractory Bricks, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm';
$connonical_url = 'refractotherm.com';
$indexing = 'index';

include 'includes/head.php';
?>

<body>
  <?php
  $activePage = '';
  include 'includes/navbar.php';
  ?>
  <!-- PAGE HEADER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');">
    </div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>PRE-CAST SHAPES &amp; REFRACTORY
        BRICKS</span>
      <h2 class="page-banner-title">Sillimanite Bricks</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/precast_shape/SillimaniteBricks.webp"
          alt="Sillimanite Bricks - Pre-Cast Shapes and Bricks" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Sillimanite Bricks</h3>
        <p class="lead">Sillimanite Bricks are high-grade alumino-silicate refractories (approx. 55-65% Al2O3)
          manufactured from natural sillimanite or kyanite minerals. They are renowned for their exceptional
          high-temperature stability.</p>
        <p>These bricks exhibit practically zero shrinkage (and in some cases, slight expansion) at operating
          temperatures, making them highly resistant to creep under load. They are the refractory of choice for glass
          tank regenerators, blast furnace stoves, and severe thermal shock zones where structural deformation must be
          avoided at all costs.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Exceptional volume stability and extremely low creep under load
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Outstanding resistance to thermal shock and rapid temperature cycling
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            High resistance to corrosion by glass melts and alkaline vapors
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Ideal for glass tank regenerators and hot blast stove checkers
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
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.webp');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for Sillimanite Bricks </h3>
        <p>Connect with our refractory specialists to select the ideal Alumina Crucible for your laboratory,
          metallurgical, or industrial application. Custom sizes and high-purity grades are available based on your
          requirements.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request Sillimanite Bricks Quote</h3>
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