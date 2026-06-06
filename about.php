<!doctype html>
<html lang="en">

<?php
$title = "About Us | Refractotherm";
$description = "Refractotherm engineers high-performance refractory products, flow control systems and thermal solutions for global steel, cement, foundry and power industries.";
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'about';
  include 'includes/navbar.php';
  ?>

  <!-- 1. PAGE BANNER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.jfif');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Our Legacy</span>
      <h2 class="page-banner-title">About REFRACTOTHERM</h2>
      <p class="lead page-banner-lead">Pioneering advanced refractory and thermal engineering solutions for over six
        decades, serving the world's most demanding heavy industries.</p>
    </div>
  </section>

  <!-- 2. COMPANY OVERVIEW -->
  <section class="section" id="overview">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/Billet&SlabCastingPlants.jpg" alt="Refractotherm industrial facility"
          loading="lazy" />
      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Company Overview</span>
        <h3>Engineering reliability at extreme temperatures.</h3>
        <p class="lead">
          REFRACTOTHERM is a global leader in the design, manufacturing, and installation of high-performance refractory
          systems. We empower the steel, cement, foundry, and power sectors with products engineered to withstand the
          harshest operating environments.
        </p>
        <p>
          Our integrated approach combines deep metallurgical expertise, state-of-the-art manufacturing capabilities,
          and dedicated field engineering. By continuously pushing the boundaries of material science, we ensure our
          clients achieve extended campaign lives, superior thermal efficiency, and uncompromised operational safety.
        </p>
        <ul class="check overview-check-list">
          <li class="overview-check-item"><i class="fa-solid fa-check overview-check-icon"></i> 1.2M+ Tonnes Annual
            Installed Capacity</li>
          <li class="overview-check-item"><i class="fa-solid fa-check overview-check-icon"></i> Global Operations
            spanning 40+ Countries</li>
          <li class="overview-check-item"><i class="fa-solid fa-check overview-check-icon"></i> End-to-end Turnkey
            Solutions</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- 3. CHAIRMAN / DIRECTOR MESSAGE -->
  <!-- <section class="section section--alt">
    <div class="container split">
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Leadership Insight</span>
        <h3>A commitment to industrial excellence.</h3>
        <p class="lead" class="leadership-quote">
          "In an era where heavy industries face unprecedented demands for efficiency and sustainability, our mission is
          to deliver refractory solutions that not only protect capital assets but actively enhance process
          productivity."
        </p>
        <p>
          At REFRACTOTHERM, we do not simply manufacture bricks and castables; we engineer thermal reliability. Our
          continuous investment in R&D and modernization reflects our unwavering commitment to our partners. We measure
          our success by the uninterrupted operations and increased output of our clients' plants worldwide.
        </p>
        <div class="leadership-name-block">
          <h5 class="leadership-name">Dr. Robert Chen</h5>
          <p class="leadership-role">Chairman & Managing Director</p>
        </div>
      </div>
      <div class="split__media reveal leadership-image-container">
        <img src="assets/images/resources/dummy_logo.png" alt="Chairman Portrait" class="leadership-image" />
      </div>
    </div>
  </section> -->

  <section class="section section--dark">
    <div class="container">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Our Purpose</span>
          <h3>Driving industrial progression.</h3>
        </div>
      </div>

      <div class="why-grid mission-vision-grid">
        <div class="why mission-vision-card">
          <i class="fa-solid fa-bullseye mission-vision-icon"></i>
          <h4 class="mission-vision-title">Our Mission</h4>
          <p class="mission-vision-desc">
            To engineer and supply superior refractory and thermal solutions that maximize operational uptime, optimize
            energy consumption, and ensure absolute safety for heavy industrial processes worldwide.
          </p>
        </div>
        <div class="why mission-vision-card">
          <i class="fa-solid fa-eye mission-vision-icon"></i>
          <h4 class="mission-vision-title">Our Vision</h4>
          <p class="mission-vision-desc">
            To be the globally recognized technical authority in thermal engineering, pioneering sustainable and
            autonomous refractory technologies for the factories of the future.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- 7. MANUFACTURING FACILITIES -->
  <section class="section">
    <div class="container split">
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Global Scale</span>
        <h3>World-class manufacturing capabilities.</h3>
        <p class="lead">
          Our four fully integrated production facilities are strategically located to ensure a robust and continuous
          supply chain for our global clientele.
        </p>
        <p>
          Equipped with fully automated batching systems, ultra-high temperature kilns exceeding 1800 °C, and
          state-of-the-art hydraulic presses, our plants deliver absolute consistency across monolithic and shaped
          refractory ranges. Advanced ERP systems track every raw material batch to finished product, guaranteeing 100%
          traceability.
        </p>
        <a href="contact.php" class="btn btn--dark plant-locations-btn">View Plant Locations <i
            class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="split__media reveal manufacturing-image-container">
        <img src="assets/images/resources/manufacture.jpg" alt="Manufacturing Plant" loading="lazy"
          class="manufacturing-image" />
      </div>
    </div>
  </section>
  <!-- 8. INNOVATION & R&D -->
  <section class="section section--alt">
    <div class="container split">
      <div class="split__media reveal rd-image-container">
        <img src="assets/images/resources/SteelFoundries.webp" alt="R&D Laboratory" loading="lazy" class="rd-image" />
      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Research & Development</span>
        <h3>Pioneering the next generation of materials.</h3>
        <p class="lead">
          The REFRACTOTHERM Technology Center is the beating heart of our innovation engine. Our team of metallurgists,
          chemists, and thermal engineers continuously develop specialized formulas.
        </p>
        <p>
          Using advanced finite element analysis (FEA), computational fluid dynamics (CFD), and thermomechanical
          simulations, we model heat transfer and stress distribution to engineer optimal lining profiles before a
          single brick is laid. This predictive approach minimizes downtime and radically improves campaign performance.
        </p>
      </div>
    </div>
  </section>

  <!-- 15. CONTACT CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url(assets/images/resources/about-2.jfif);"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Get in Touch</span>
        <h3>Discuss your refractory and thermal engineering requirements.</h3>
        <p>
          Our engineering teams respond within one business day. Share your project brief and we will match you with the
          right specialist.
        </p>
        <ul class="cta__info">
          <li>
            <i class="fa-solid fa-location-dot"></i> FF-71, Vraj Real Estate, Nr. Telephone Exchnage, Bopal, Ahmedabad
            380058, Gujarat, India
          </li>
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li>
            <i class="fa-solid fa-envelope"></i> <a
              href="mailto:refectothermindia@gmail.com">refectothermindia@gmail.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request a Quote</h3>
        <div class="row">
          <input type="text" class="inputsections" placeholder="Full Name" required />
          <input type="text" class="inputsections" placeholder="Company" required />
        </div>
        <div class="row">
          <input type="email" class="inputsections" placeholder="Work Email" required />
          <input type="tel" class="inputsections" placeholder="Phone" />
        </div>
        <select class="category inputsections" required>
          <option value="">Inquiry Type</option>
          <option>Sales & Product Info</option>
          <option>Technical Support</option>
          <option>Partnership</option>
          <option>General Information</option>
        </select>
        <textarea rows="4" class="inputsections" placeholder="How can we help?"></textarea>
        <button type="submit" class="btn btn--primary btn--block">
          Submit Inquiry <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
  </section>


  <?php include 'includes/footer.php'; ?>
</body>

</html>
