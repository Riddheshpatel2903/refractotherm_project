<!doctype html>
<html lang="en">

<?php
$title = "Pouring Launders Manufacturer & Supplier | Refractotherm";
$description = "Pouring Launders are specially engineered refractory channels designed for the safe, efficient, and controlled transfer of molten metal between furnaces...";
$keywords = "Pouring Launders, Induction Furnace Refractories Blocks And Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <h2 class="page-banner-title">Pouring Launders</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/induction_furnace/PouringLaunders.webp"
          alt="Pouring Launders for Molten Metal Transfer in Aluminium, Steel, Foundry and Non-Ferrous Metal Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Pouring Launders</h3>
        <p class="lead">Pouring Launders are specially engineered refractory channels designed for the safe, efficient,
          and controlled transfer of molten metal between furnaces, holding units, ladles, casting stations, and process
          equipment. These critical refractory components provide a protected flow path that helps maintain metal
          temperature, reduce contamination, and ensure smooth metal movement throughout production operations.</p>
        <p>Continuous exposure to molten metal, thermal cycling, and mechanical wear demands exceptional refractory
          performance. Pouring Launders are manufactured using high-quality refractory materials that offer excellent
          resistance to erosion, thermal shock, chemical attack, and metal penetration. Their carefully designed flow
          profiles help minimize turbulence, reduce metal losses, and support consistent metal quality, making them an
          essential component in modern metal processing and casting facilities.
        </p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Smooth and controlled molten metal transfer
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent resistance to erosion and thermal shock
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Reduced metal temperature loss during transfer
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Improved metal cleanliness and process efficiency
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
            <h4 class="careers-timeline-title">Aluminium Processing Plants
            </h4>
            <p class="careers-timeline-desc">
              Facilitates efficient molten aluminium transfer between process stages.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Foundry Operations
            </h4>
            <p class="careers-timeline-desc">
              Supports controlled metal movement during casting and pouring operations.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Steel & Ferro Alloy Industries
            </h4>
            <p class="careers-timeline-desc">
              Provides reliable metal transfer solutions for high-temperature environments.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Non-Ferrous Metal Processing
            </h4>
            <p class="careers-timeline-desc">
              Suitable for copper, brass, bronze, zinc, and other molten metal applications.
            </p>
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
        <h3>Request a Quote for Pouring Launders </h3>
        <p>Consult our refractory specialists to identify the ideal Pouring Launder solution for your molten metal
          transfer requirements. Customized designs, dimensions, and refractory formulations are available to suit
          specific process conditions and production needs.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:refectothermindia@gmail.com">refectothermindia@gmail.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request Pouring Launders Quote</h3>
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