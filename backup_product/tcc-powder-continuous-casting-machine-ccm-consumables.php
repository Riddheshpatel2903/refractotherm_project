<!doctype html>
<html lang="en">

<?php
$title = 'Tcc Powder Manufacturer & Supplier | Refractotherm';
$description = 'TCC Powder (Tundish Covering Compound) is a specialized insulating and protective material applied to the surface of molten steel in tundishes during co...';
$keywords = 'Tcc Powder, Continuous Casting Machine Ccm Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm';
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
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>CONTINUOUS CASTING MACHINE (CCM)
        CONSUMABLES</span>
      <h2 class="page-banner-title">LCC Powder</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/ccm/LCCPowder.webp"
          alt="LCC Powder Ladle Covering Compound for Molten Steel Insulation and Steelmaking Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>TCC Powder</h3>
        <p class="lead">TCC Powder (Tundish Covering Compound) is a specialized insulating and protective material
          applied to the surface of molten steel in tundishes during continuous casting operations. It forms a
          protective covering layer that helps minimize heat loss, reduce steel reoxidation, and maintain stable casting
          temperatures throughout the casting sequence.</p>
        <p>As molten steel remains exposed in the tundish for extended periods, controlling temperature loss and
          preventing contamination become critical for maintaining steel quality. TCC Powder creates an insulating
          barrier over the molten steel surface, reducing thermal losses while protecting the steel from direct
          atmospheric contact. The compound also assists in controlling slag formation and contributes to cleaner steel
          production by supporting stable tundish operating conditions.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Minimizes heat loss from molten steel in the tundish
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Reduces steel reoxidation and atmospheric contamination
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Supports stable casting temperatures
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Improves steel cleanliness and casting consistency
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
              Maintains thermal stability and steel quality during billet production.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Bloom Casting Operations
            </h4>
            <p class="careers-timeline-desc">
              Provides effective molten steel protection throughout casting campaigns.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Slab Continuous Casting
            </h4>
            <p class="careers-timeline-desc">
              Supports long casting sequences by reducing heat loss and oxidation.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Special Steel Production
            </h4>
            <p class="careers-timeline-desc">
              Suitable for demanding applications requiring high steel cleanliness and process control.
            </p>
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
        <h3>Request a Quote for TCC Powder</h3>
        <p>Speak with our continuous casting specialists to select the most suitable TCC Powder formulation for your
          tundish design, casting sequence, and steel production requirements. Customized covering compounds are
          available for various steel grades and operating conditions.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request TCC Powder Quote</h3>
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