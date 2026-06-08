<!doctype html>
<html lang="en">

<?php
$title = "Fettling Mass Manufacturer & Supplier | Refractotherm";
$description = "Fettling Mass is a specialized refractory repair material used for patching, maintenance, and rebuilding worn or damaged refractory linings in furnaces,...";
$keywords = "Fettling Mass, Monolithic Refractories And Castables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <h2 class="page-banner-title">Fettling Mass</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/monolithic/FettlingMass.webp"
          alt="Fettling Mass for Induction Furnaces, Electric Arc Furnaces, Steel Ladles, Foundries and Refractory Maintenance Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Fettling Mass</h3>
        <p class="lead">Fettling Mass is a specialized refractory repair material used for patching, maintenance, and
          rebuilding worn or damaged refractory linings in furnaces, ladles, and metallurgical vessels. Manufactured
          from carefully selected refractory aggregates and binders, it provides excellent adhesion, rapid repair
          capability, and reliable resistance to high temperatures, thermal shock, and slag attack.</p>
        <p>
          Regular refractory maintenance is essential for maintaining furnace efficiency and preventing unexpected
          shutdowns. Fettling Mass is specifically designed for localized repairs of erosion-prone areas, helping
          restore refractory thickness and lining integrity without requiring complete relining. Its ease of application
          and compatibility with various refractory systems make it a widely used maintenance material in steel plants,
          foundries, and thermal processing industries.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent adhesion to existing refractory linings
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Effective for patch repairs and maintenance work
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Good thermal shock resistance for cyclic furnace operations
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Extends refractory lining life and reduces downtime
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
            <h4 class="careers-timeline-title">Induction Furnaces</h4>
            <p class="careers-timeline-desc">Used for repairing worn areas, hot spots, and localized damage in
              induction furnace linings.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">Steel Ladles</h4>
            <p class="careers-timeline-desc">Applied for repairing damaged refractory surfaces and restoring lining
              thickness in ladles used for molten steel handling.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">Foundry and Metallurgical Equipment</h4>
            <p class="careers-timeline-desc">Used in melting and holding furnaces where routine refractory maintenance
              is required to ensure continuous operation.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">Electric Arc Furnaces (EAF)</h4>
            <p class="careers-timeline-desc">Suitable for maintaining sidewalls, slag zones, and erosion-prone
              refractory sections exposed to severe operating conditions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SUGGESTED PRODUCTS -->
  <?php include 'includes/product_suggestion/monolithic.php'; ?>

  <!-- INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a quote for Gunning Mass.</h3>
        <p>
          Consult our refractory specialists to select the most suitable fettling mass formulation for your furnace,
          ladle, or metallurgical application. Customized grades are available for acidic, neutral, and basic refractory
          systems based on operating conditions and maintenance requirements.
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
  </section>

  <!-- FOOTER -->

  <?php include 'includes/footer.php'; ?>

</body>

</html>
