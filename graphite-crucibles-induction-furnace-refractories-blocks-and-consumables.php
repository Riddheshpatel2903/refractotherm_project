<!doctype html>
<html lang="en">

<?php
$title = "Graphite Crucibles Manufacturer & Supplier | Refractotherm";
$description = "Graphite Crucibles are engineered for superior thermal conductivity, excellent resistance to thermal shock, and chemical inertness. These crucibles are ...";
$keywords = "Graphite Crucibles, Induction Furnace Refractories Blocks And Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>INDUCTION FURNACE REFRACTORIES, BLOCKS &
        CONSUMABLES</span>
      <h2 class="page-banner-title">Graphite Crucibles</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/induction_furnace/GraphiteCrucibles.webp"
          alt="Graphite Crucibles for High Temperature Industrial Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Graphite Crucibles</h3>
        <p class="lead">Graphite Crucibles are engineered for superior thermal conductivity, excellent resistance to
          thermal shock, and chemical inertness. These crucibles are predominantly used for melting non-ferrous metals
          such as aluminum, copper, brass, and precious metals.</p>
        <p>Manufactured from high-grade graphite and silicon carbide, our crucibles offer outstanding oxidation
          resistance and mechanical strength at elevated temperatures. They provide a cost-effective and highly
          efficient solution for induction furnaces and fuel-fired furnaces, ensuring consistent performance and
          prolonged service life.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent thermal conductivity for faster melting
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            High resistance to thermal shock and chemical corrosion
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Non-wetting properties to prevent metal adherence
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Ideal for non-ferrous metal melting applications
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
            <h4 class="careers-timeline-title">Metallurgical Laboratories
            </h4>
            <p class="careers-timeline-desc">
              Used for metal analysis, melting, and sample preparation.
            </p>
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
            <h4 class="careers-timeline-title">
              Industrial Heat Treatment
            </h4>
            <p class="careers-timeline-desc">
              Used in controlled high-temperature processing operations.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/induction-furnace.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for Graphite Crucibles </h3>
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
        <h3>Request Graphite Crucibles Quote</h3>
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
