<!doctype html>
<html lang="en">

<?php
$title = 'Gunning Mass Manufacturer & Supplier | Refractotherm';
$description = 'Gunning Mass is a specially engineered monolithic refractory material designed for pneumatic application onto refractory linings for maintenance, repair...';
$keywords = 'Gunning Mass, Monolithic Refractories And Castables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm';
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Monolithic Refractories & Castables</span>
      <h1 class="page-banner-title">Gunning Mass</h1>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li><a href="products">Products</a></li>
      <li><a href="products#monolithic-refractories-and-castables">Monolithic Refractories & Castables</a></li>
      <li class="active">Gunning Mass Details</li>
    </ol>
  </nav>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/aod/GunningMass.webp"
          alt="Gunning Mass for Refractory Repairs in Steel Ladles, Electric Arc Furnaces, Cement Kilns and Industrial Thermal Processing Equipment" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Gunning Mass</h3>
        <p class="lead">Gunning Mass is a specially engineered monolithic refractory material designed for pneumatic
          application onto refractory linings for maintenance, repair, and lining build-up operations. Applied using
          gunning equipment, the material adheres effectively to refractory surfaces, allowing rapid restoration of worn
          areas without the need for complete shutdowns or extensive refractory replacement.</p>
        <p>
          Widely used in steel plants, foundries, cement plants, and thermal processing industries, Gunning Mass
          provides an efficient solution for extending refractory lining life while minimizing downtime. Available in
          alumina-based, magnesia-based, silica-based, and specialized formulations, the material is selected according
          to operating conditions, process temperatures, and slag chemistry to ensure optimum performance.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent adhesion to existing refractory linings
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Suitable for both hot and cold repair applications
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Rapid installation with minimal operational interruption
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Extends refractory campaign life and reduces maintenance costs
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
            <h4 class="careers-timeline-title">Steel Ladles</h4>
            <p class="careers-timeline-desc">Used for repairing sidewalls, slag lines, and worn refractory zones in
              steel ladles to restore lining thickness and performance.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">Electric Arc Furnaces (EAF)</h4>
            <p class="careers-timeline-desc">Applied for maintenance of furnace sidewalls, hot spots, and erosion-prone
              areas exposed to severe thermal and chemical attack.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">Basic Oxygen Furnaces and Converters</h4>
            <p class="careers-timeline-desc">Suitable for patch repairs and refractory maintenance in steelmaking
              vessels operating under aggressive conditions.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">Cement Kilns and Industrial Furnaces</h4>
            <p class="careers-timeline-desc">Used for repairing damaged refractory sections in kilns, combustion
              chambers, and thermal processing equipment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/monolithic.php'; ?>

  <!-- INQUIRY CTA -->
  <!-- <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.webp');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a quote for Gunning Mass.</h3>
        <p>
          Contact our refractory specialists to select the most suitable gunning mass for your furnace, ladle, or kiln
          application. Customized formulations are available based on operating temperatures, refractory type,
          process conditions, and required installation method.
        </p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted âœ“';">
        <h3>Request Product Quote</h3>
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
  </section> -->


  <?php include 'includes/footer.php'; ?>

</body>

</html>
