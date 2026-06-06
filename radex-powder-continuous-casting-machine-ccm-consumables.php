<!doctype html>
<html lang="en">

<?php
$title = "Radex Powder Manufacturer & Supplier | Refractotherm";
$description = "Radex Powder is a low-density, free-flowing insulating covering compound used in ladles and tundishes during steelmaking and continuous casting operatio...";
$keywords = "Radex Powder, Continuous Casting Machine Ccm Consumables, Refractory Usage, Industrial Refractories, High Temperature Refractories, Refractotherm";
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
      <h2 class="page-banner-title">Radex Powder</h2>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="section">
    <div class="container split">
      <div class="split__media reveal">
        <img src="assets/images/resources/products/ccm/RadexPowder.jpg"
          alt="Radex Powder for Ladle and Tundish Insulation in Steelmaking and Continuous Casting Applications" />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Product Overview</span>
        <h3>Radex Powder</h3>
        <p class="lead">Radex Powder is a low-density, free-flowing insulating covering compound used in ladles and
          tundishes during steelmaking and continuous casting operations. Applied directly over the surface of molten
          steel, it forms an insulating layer that significantly reduces heat loss, helping maintain the desired steel
          temperature throughout transfer, refining, and casting processes.</p>
        <p>Maintaining temperature consistency is essential for smooth casting operations and steel quality. Radex
          Powder acts as a thermal barrier between molten steel and the atmosphere, reducing radiation heat losses while
          limiting steel reoxidation. Its lightweight and highly insulating nature enables steel plants to improve
          thermal efficiency, reduce energy consumption, and maintain stable casting conditions from the ladle to the
          tundish and mould.</p>
        <ul class="check overview-check-list">
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Excellent thermal insulation for molten steel
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Reduces heat loss during ladle and tundish operations
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Minimizes steel reoxidation and atmospheric exposure
          </li>
          <li class="overview-check-item">
            <i class="fa-solid fa-check overview-check-icon"></i>
            Improves temperature stability throughout casting
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
            <h4 class="careers-timeline-title">Ladle Insulation
            </h4>
            <p class="careers-timeline-desc">
              Applied on molten steel surfaces in ladles to reduce temperature loss during holding and transfer
              operations.
            </p>
          </div>
        </div>

        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Tundish Insulation
            </h4>
            <p class="careers-timeline-desc">
              Used in tundishes to maintain steel temperature throughout continuous casting sequences.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Secondary Metallurgy Operations
            </h4>
            <p class="careers-timeline-desc">
              Supports temperature retention during refining, alloying, and treatment processes.
            </p>
          </div>
        </div>
        <div class="careers-timeline-item reveal">
          <div class="careers-timeline-body">
            <h4 class="careers-timeline-title">
              Continuous Casting Plants
            </h4>
            <p class="careers-timeline-desc">
              Enhances casting stability by ensuring consistent molten steel temperatures from ladle to mould.
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
    <div class="cta__bg" style="background-image: url('assets/images/resources/about-2.jfif');"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Inquiry</span>
        <h3>Request a Quote for Radex Powder</h3>
        <p>Connect with our steelmaking specialists to select the most suitable Radex Powder grade for your ladle
          capacity, tundish operation, steel grades, and casting requirements. Customized insulation solutions are
          available for a wide range of steelmaking applications.</p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:refectothermindia@gmail.com">refectothermindia@gmail.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Request Radex Powder Quote</h3>
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