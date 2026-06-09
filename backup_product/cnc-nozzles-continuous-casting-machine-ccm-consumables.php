<!doctype html>
<html lang="en">

<?php
$title = 'Cnc Nozzles Manufacturer & Supplier | Refractotherm';
$description = 'CNC Nozzles are high-precision refractory flow-control components used in continuous casting systems to regulate the flow of molten steel from the tundi...';
$keywords = 'Cnc Nozzles, Continuous Casting Machine Ccm Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm';
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
      <h2 class="page-banner-title">CNC Nozzles</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/ccm/CNCNozzles.webp"
          alt="CNC Nozzles for Molten Steel Flow Control in Continuous Casting and Steelmaking Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>CNC Nozzles</h3>
        <p class="lead">CNC Nozzles are high-precision refractory flow-control components used in continuous casting
          systems to regulate the flow of molten steel from the tundish to downstream casting equipment. Manufactured
          with strict dimensional accuracy and advanced refractory technology, these nozzles help ensure stable steel
          flow, improved process control, and consistent casting performance throughout production campaigns.</p>
        <p>Operating under extreme temperatures and aggressive metallurgical conditions, CNC Nozzles are engineered to
          provide excellent resistance to thermal shock, erosion, oxidation, and slag attack. Their precisely machined
          internal geometry promotes smooth steel flow while minimizing turbulence and wear. By maintaining consistent
          flow characteristics throughout the casting sequence, CNC Nozzles contribute to higher productivity, improved
          steel cleanliness, and enhanced product quality.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Precision-engineered for accurate molten steel flow control
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent resistance to erosion and thermal shock
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Consistent dimensional stability during casting operations
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Supports improved steel quality and process reliability
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
            <h4 class="careers-timeline-title">Billet Casting Machines

            </h4>
            <p class="careers-timeline-desc">

              Ensures controlled steel flow and stable casting conditions during billet production.

            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">

              Bloom Casting Operations

            </h4>
            <p class="careers-timeline-desc">

              Provides reliable performance under demanding casting environments.

            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">

              Slab Continuous Casting

            </h4>
            <p class="careers-timeline-desc">

              Supports high-volume casting operations requiring precise flow regulation.

            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">

              Special Steel Manufacturing

            </h4>
            <p class="careers-timeline-desc">

              Suitable for applications where steel cleanliness and flow consistency are critical. </p>
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
        <h3>Request a Quote for CNC Nozzles</h3>
        <p>Connect with our continuous casting experts to find the right CNC Nozzle solution for your casting machine,
          steel grades, and production requirements. Customized designs and refractory compositions are available to
          optimize performance and service life.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted âœ“';">
        <h3>Request CNC Nozzles Quote</h3>
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

