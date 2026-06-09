<!doctype html>
<html lang="en">

<?php
$title = 'Fnc Nozzles Manufacturer & Supplier | Refractotherm';
$description = 'FNC Nozzles are specialized refractory flow-control components used in continuous casting operations to ensure controlled and uninterrupted transfer of ...';
$keywords = 'Fnc Nozzles, Continuous Casting Machine Ccm Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm';
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>CONTINUOUS CASTING MACHINE (CCM)
        CONSUMABLES</span>
      <h2 class="page-banner-title">FNC Nozzles</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/ccm/FNCNozzles.webp"
          alt="FNC Nozzles for Continuous Casting Molten Steel Flow Control and Steelmaking Applicationsss" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>FNC Nozzles</h3>
        <p class="lead">FNC Nozzles are specialized refractory flow-control components used in continuous casting
          operations to ensure controlled and uninterrupted transfer of molten steel. Designed to perform under
          demanding casting conditions, these nozzles help maintain stable steel flow, improve casting consistency, and
          support the production of high-quality steel products across a wide range of casting applications.</p>
        <p>Manufactured from carefully selected refractory materials, FNC Nozzles are engineered to withstand severe
          thermal shock, molten steel erosion, oxidation, and slag attack. Their optimized internal design promotes
          smooth steel flow while minimizing turbulence and reducing the risk of clogging. By maintaining consistent
          flow characteristics throughout the casting sequence, FNC Nozzles contribute to improved process reliability,
          enhanced steel cleanliness, and increased operational efficiency.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Reliable molten steel flow regulation

          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent thermal shock and erosion resistance

          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Reduced risk of nozzle clogging

          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Supports stable and efficient casting operations
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
            <h4 class="careers-timeline-title">Billet Continuous Casting
            </h4>
            <p class="careers-timeline-desc">
              Provides controlled steel flow and consistent casting performance for billet production.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Bloom Casting Operations
            </h4>
            <p class="careers-timeline-desc">
              Ensures dependable flow control under demanding production conditions.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Slab Continuous Casting
            </h4>
            <p class="careers-timeline-desc">
              Suitable for high-throughput casting systems requiring reliable nozzle performance.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Special Steel Manufacturing
            </h4>
            <p class="careers-timeline-desc">
              Supports clean steel production and precise flow management for critical steel grades.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/ccm.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.webp');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for FNC Nozzles</h3>
        <p>Consult our continuous casting specialists to select the most suitable FNC Nozzle solution for your casting
          machine, steel grades, and production objectives. Customized nozzle designs and refractory compositions are
          available to meet specific operational requirements.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted âœ“';">
        <h3>Request FNC Nozzles Quote</h3>
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
