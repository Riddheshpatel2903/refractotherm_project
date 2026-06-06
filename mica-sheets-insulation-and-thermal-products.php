<!doctype html>
<html lang="en">

<?php
$title = "Mica Sheets Manufacturer & Supplier | Refractotherm";
$description = "Mica Sheets (primarily Phlogopite or Muscovite based) are specialized laminate materials renowned for their dual properties of phenomenal electrical ins...";
$keywords = "Mica Sheets, Insulation And Thermal Products, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>INSULATION &amp; THERMAL PRODUCTS</span>
      <h2 class="page-banner-title">Mica Sheets</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/insulation/micasheets.jpg" alt="Mica Sheets - Thermal Insulation" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Mica Sheets</h3>
        <p class="lead">Mica Sheets (primarily Phlogopite or Muscovite based) are specialized laminate materials
          renowned for their dual properties of phenomenal electrical insulation and high thermal resistance.</p>
        <p>In the metallurgical industry, they are primarily used as a 'slip plane' between the refractory lining and
          the water-cooled induction coil. They provide critical dielectric strength to prevent electrical arcing,
          whilst allowing the refractory crucible to expand and contract freely without binding to the coil, drastically
          reducing the risk of crucible cracking.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Exceptional dielectric strength prevents electrical arcing
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Acts as a low-friction slip plane to absorb refractory expansion
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Provides a crucial safety barrier protecting induction furnace coils
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            High thermal stability and completely asbestos-free
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
            <h4 class="careers-timeline-title">Industrial Furnaces &amp; Kilns</h4>
            <p class="careers-timeline-desc">Primary hot-face linings and high-efficiency backup insulation.</p>
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
            <h4 class="careers-timeline-title">Steel Ladles &amp; Tundishes</h4>
            <p class="careers-timeline-desc">Backup boards and microporous safety insulation.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/insulation-thermal.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for Mica Sheets </h3>
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
        <h3>Request Mica Sheets Quote</h3>
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