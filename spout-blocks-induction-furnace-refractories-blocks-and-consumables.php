<!doctype html>
<html lang="en">

<?php
$title = "Spout Blocks Manufacturer & Supplier | Refractotherm";
$description = "Spout Blocks are precision-engineered precast refractory components designed for molten metal tapping, pouring, transfer, and discharge applications in ...";
$keywords = "Spout Blocks, Induction Furnace Refractories Blocks And Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <h2 class="page-banner-title">Spout Blocks</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/induction_furnace/SpoutBlocks.webp"
          alt="Spout Blocks for Molten Metal Transfer, Tapping and Casting Applications in Steel Plants and Foundries" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Spout Blocks</h3>
        <p class="lead">Spout Blocks are precision-engineered precast refractory components designed for molten metal
          tapping, pouring, transfer, and discharge applications in steel plants, foundries, and metallurgical
          industries. These blocks form a critical part of metal flow systems, ensuring smooth and controlled movement
          of molten metal while protecting surrounding equipment from extreme temperatures and erosion.</p>
        <p>Areas exposed to continuous molten metal flow experience severe thermal, mechanical, and chemical stresses.
          Spout Blocks are manufactured from carefully selected refractory materials to provide excellent resistance to
          thermal shock, metal erosion, slag attack, and abrasion. Their accurately engineered flow channels help
          maintain consistent metal flow characteristics, reducing turbulence and improving process efficiency. The
          precast design ensures dimensional accuracy, ease of installation, and reliable long-term performance.
        </p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent resistance to molten metal erosion
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Superior thermal shock and spalling resistance
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Accurate flow channel design for smooth metal transfer
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Long service life with reduced maintenance requirements
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
            <h4 class="careers-timeline-title">Steel Tapping Systems
            </h4>
            <p class="careers-timeline-desc">
              Facilitates controlled molten steel discharge from furnaces and vessels.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Foundry Pouring Operations
            </h4>
            <p class="careers-timeline-desc">
              Provides reliable molten metal flow during casting processes.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Metal Transfer Systems
            </h4>
            <p class="careers-timeline-desc">
              Supports efficient movement of molten metal between process stages.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Non-Ferrous Metal Processing
            </h4>
            <p class="careers-timeline-desc">
              Suitable for aluminium, copper, brass, and other molten metal applications.
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
        <h3>Request a Quote for Spout Blocks </h3>
        <p>Consult our refractory specialists to select the ideal Spout Block solution for your tapping, pouring, or
          molten metal transfer application. Customized designs and refractory compositions are available to meet
          specific process and performance requirements.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request Spout Blocks Quote</h3>
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