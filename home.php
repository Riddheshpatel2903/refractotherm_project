<!doctype html>
<html lang="en">

<?php
$title = 'Refractotherm | Advanced Refractory & Thermal Engineering Solutions';
$description = 'Refractotherm engineers high-performance refractory products, flow control systems and thermal solutions for global steel, cement, foundry and power industries.';
$connonical_url = 'refractotherm.com';
$indexing = 'index, follow';

include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'home';
  include 'includes/navbar.php';
  ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero__slides" id="heroSlides">
      <div class="hero__slide is-active" style="background-image: url(assets/images/resources/hero-3.webp)"></div>
      <div class="hero__slide" style="background-image: url(assets/images/resources/hero-5.webp)"></div>
      <div class="hero__slide" style="background-image: url(assets/images/resources/hero-3.webp)"></div>
    </div>

    <div class="hero__overlay"></div>

    <div class="container hero__content">

      <span class="eyebrow"><span class="eyebrow__bar"></span>Pioneering Advanced Refractory & Thermal Solutions</span>
      <h1>Global Partner for Advanced Refractory, Metallurgical & Thermal Engineering Solutions</h1>
      <p class="lead">
        Delivering Reliable Refractory, Metallurgical & Thermal Solutions to Steel, Foundry and Process Industries Worldwide
      </p>
      <div class="hero__actions">
        <a href="products" class="btn--hero-primary">Explore Products <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#contact" class="btn--hero-outline">Contact Us</a>
      </div>
    </div>
    <div class="hero__progress"><span id="heroProgress"></span></div>
  </section>

  <!-- ABOUT -->
  <section class="section" id="about">
    <div class="container split">
      <div class="split__media">
        <img src="assets/images/resources/site/companyoverview-1.webp" alt="Refractotherm steel plant operations" loading="lazy"  />

      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>About Us</span>
        <h3>Refractotherm India LLP</h3>
        <p class="lead">
          Refractotherm India LLP is a trusted manufacturer, supplier, and export partner of high-performance refractory and metallurgical products for the steel, foundry, ferro alloy, and process industries.
        </p>
        <p class="lead">
          Built on nearly three decades of industry experience, we deliver reliable products, technical expertise, and engineering solutions that help customers improve operational efficiency, maximize productivity, reduce downtime, and achieve sustainable growth in demanding high-temperature environments.
        </p>
        <p class="lead">
          With a strong commitment to quality, innovation, and customer satisfaction, we provide solutions that meet the evolving needs of modern industries across India and international markets.
        </p>
        <h5 style="margin-top: 1.5rem; color: var(--orange); font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">
          Engineering Excellence. Delivering Reliability. Building Long-Term Partnerships.
        </h5>
        <a href="#" class="btn btn--dark" style="margin-top: 1.5rem;">Read Company Profile <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="section section--dark" id="products">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Our Products</span>
          <h3>
            Engineered refractory systems for every<br />high-temperature
            application.
          </h3>
        </div>
        <a href="products" class="btn btn--ghost">View All Products <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="prod-grid">
        <!-- Category 1 -->
        <a href="products#monolithic-refractories-and-castables" class="category-card">
          <div class="category-card__img" style="background-image: url(assets/images/resources/products/MONOLITHIC-REFRACTORIES-CASTABLES.webp);"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Monolithic Refractories</h4>
            <div class="category-card__hover-content">
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 2 -->
        <a href="products#flow-control-and-ladle-slide-gate-systems" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/flowcontrol/FlowControlSystems.webp);"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Flow Control Systems</h4>
            <div class="category-card__hover-content">
              
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 3 -->
        <a href="products#continuous-casting-machine-ccm-consumables" class="category-card">
          <div class="category-card__img" style="background-image: url(assets/images/resources/products/ccm.webp);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">CCM Consumables</h4>
            <div class="category-card__hover-content">
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 4 -->
        <a href="products#induction-furnace-refractories-blocks-and-consumables" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/induction.webp);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Induction Furnace Refractories</h4>
            <div class="category-card__hover-content">
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 5 -->
        <a href="products#steelmaking-refractories-lrf-eaf-and-ladle-applications" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/Steelmaking.webp);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Steelmaking Refractories</h4>
            <div class="category-card__hover-content">
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
        <!-- Category 7 -->
        <a href="products#blast-furnace-and-dri-refractories" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/BlastFurnace.webp);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Blast Furnace & DRI</h4>
            <div class="category-card__hover-content">    
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <a href="products#special-industry-refractories" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/special_industries.webp);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Special Industry Refractories</h4>
            <div class="category-card__hover-content">  
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
        <!-- Category 9 -->
        <a href="products#foundry-and-metallurgical-consumables" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/Fundry_consumables.webp);"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Foundry Consumables</h4>
            <div class="category-card__hover-content">
              <span class="category-card__link">View more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- INDUSTRIES -->

  <section class="section" id="industries">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Industries Served</span>
          <h3>Trusted across the world's most demanding industries.</h3>
        </div>
      </div>
      <div class="home-industries-grid">
        <!-- Card 1: Steel & Metallurgical Industries -->
        <a href="industries-we-serve#steel-metallurgical" class="home-industry-card reveal">
          <div class="home-industry-card-bg" style="background-image: url('assets/images/resources/hero-4.webp');"></div>
          <div class="home-industry-card-overlay"></div>
          <div class="home-industry-card-content">
            <h4 class="home-industry-card-title">Steel & Metallurgical Industries</h4>
            <div class="home-industry-card-btn">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </a>

        <!-- Card 2: Furnace & Casting Operations -->
        <a href="industries-we-serve#furnace-casting" class="home-industry-card reveal">
          <div class="home-industry-card-bg" style="background-image: url('assets/images/resources/ElectricArcFurnaces(EAF).webp');"></div>
          <div class="home-industry-card-overlay"></div>
          <div class="home-industry-card-content">
            <h4 class="home-industry-card-title">Furnace & Casting Operations</h4>
            <div class="home-industry-card-btn">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </a>

        <!-- Card 3: Process Industries -->
        <a href="industries-we-serve#process-industries" class="home-industry-card reveal">
          <div class="home-industry-card-bg" style="background-image: url('assets/images/resources/CementPlants.webp');"></div>
          <div class="home-industry-card-overlay"></div>
          <div class="home-industry-card-content">
            <h4 class="home-industry-card-title">Process Industries</h4>
            <div class="home-industry-card-btn">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </a>
      </div>
  </section>

  <!-- WHY US -->
  <section class="section section--alt premium-why-section">
    <div class="container">
      <div class="section__head text-center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Why Choose Us</span>
          <h3>Why Choose Refractotherm India LLP</h3>
        </div>
      </div>
      <div class="premium-why-grid">
        <!-- Card 1 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-clock-rotate-left"></i>
          </div>
          <div class="p-why-content">
            <h4>Industry Experience Since 1998</h4>
            <p>Over two decades of proven excellence and deep domain expertise in refractory solutions.</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-gem"></i>
          </div>
          <div class="p-why-content">
            <h4>High-Quality Refractory & Metallurgical Products</h4>
            <p>Engineered with precision for durability and optimal performance in severe conditions.</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-microchip"></i>
          </div>
          <div class="p-why-content">
            <h4>Strong Technical & Engineering Expertise</h4>
            <p>Backed by leading engineers to provide innovative design and technical support.</p>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-truck-fast"></i>
          </div>
          <div class="p-why-content">
            <h4>Reliable Supply Chain & Timely Deliveries</h4>
            <p>Robust global logistics ensuring your critical operations never face downtime.</p>
          </div>
        </div>
        <!-- Card 5 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-sliders"></i>
          </div>
          <div class="p-why-content">
            <h4>Customized Solutions for Critical Applications</h4>
            <p>Tailor-made refractory designs crafted specifically for your unique process parameters.</p>
          </div>
        </div>
        <!-- Card 6 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-user-gear"></i>
          </div>
          <div class="p-why-content">
            <h4>Customer-Focused Service & Support</h4>
            <p>Dedicated assistance available 24/7, keeping your satisfaction at the forefront.</p>
          </div>
        </div>
        <!-- Card 7 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div class="p-why-content">
            <h4>Commitment to Quality, Safety & Performance</h4>
            <p>Strict adherence to international safety and quality standards (ISO certified).</p>
          </div>
        </div>
        <!-- Card 8 -->
        <div class="premium-why-card">
          <div class="p-why-icon">
            <i class="fa-solid fa-handshake-angle"></i>
          </div>
          <div class="p-why-content">
            <h4>Trusted Partner for Steel & Foundry Industries</h4>
            <p>A globally recognized and trusted ally for the most demanding high-temperature applications.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section section--dark" id="services">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Our Technical Services</span>
          <h3>End-to-end refractory engineering<br />and field services.</h3>
        </div>
      </div>
      <div class="serv-grid">
        <div class="serv">
          <div class="serv__img" style="
                background-image: url(assets/images/resources/RefractoryInstallation.webp);
              "></div>
          <div class="serv__body">
            <h4>Refractory Installation</h4>
            <p>
              Turnkey installation of complete lining systems for vessels of
              every size and complexity.
            </p>
          </div>
        </div>
        <div class="serv">
          <div class="serv__img" style="
                background-image: url(assets/images/resources/FurnaceLining.webp);
              "></div>
          <div class="serv__body">
            <h4>Furnace Lining & Relining</h4>
            <p>
              Custom-engineered linings for EAF, BOF, ladles, tundishes and
              rotary kilns.
            </p>
          </div>
        </div>
        <div class="serv">
          <div class="serv__img" style="
                background-image: url(assets/images/resources/EAF.webp);
              "></div>
          <div class="serv__body">
            <h4>EAF Refractory Installation</h4>
            <p>
              Planned and emergency shutdown crews delivering inspection,
              repair and relining at speed.
            </p>
          </div>
        </div>
        <div class="serv">
          <div class="serv__img" style="
                background-image: url(assets/images/resources/LRF.webp);
              "></div>
          <div class="serv__body">
            <h4>LRF Refractory Installation</h4>
            <p>
              On-site engineers, performance monitoring and root-cause
              analysis to extend campaign life.
            </p>
          </div>
        </div>
      </div>
      <div class="container btn-cnt">
        <a href="technical-services" class="btn btn--ghost">View All <i class="fa-solid fa-arrow-right"></i></a>
      </div>

    </div>
  </section>


  <section class="network-section">

    <div class="container">

      <!-- SECTION HEADING -->
      <div class="network-heading">

        <div class="section__head">
          <div>
            <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>GLOBAL & NATIONAL NETWORK</span>
          </div>
        </div>

        <h2 class="section-title">
          Markets We Serve
        </h2>

        <p>
          REFRACTOTHERM delivers refractory and thermal engineering
          solutions through a strong network of manufacturing units,
          sales offices, distributors, and technical support teams
          serving industries worldwide.
        </p>

      </div>

      <!-- NETWORK WRAPPER -->
      <div class="network-wrapper network-wrapper-center">

        <!-- MAP -->
        <div class="map-box">

          <img loading="lazy" src="assets/images/resources/world_map.webp" alt="">

          <div class="map-point india" data-title="India" data-desc="Head Office & Manufacturing">
          </div>

          <div class="map-point uae" data-title="Middle East" data-desc="Regional Distribution Hub & UAE Office">
          </div>

          <div class="map-point usa" data-title="North America" data-desc="Technical Support Office (USA & Canada)">
          </div>

          <div class="map-point southafrica" data-title="South Africa & Africa" data-desc="Industrial Project Support">
          </div>

          <div class="map-point southamerica" data-title="South America" data-desc="Export Operations">
          </div>

          <div class="map-point europe" data-title="Europe" data-desc="Technical Sales & Distribution">
          </div>

          <div class="map-point russia" data-title="Russia & CIS" data-desc="Industrial Supply & Distribution">
          </div>

          <div class="map-point southeastasia" data-title="South East Asia" data-desc="Regional Sales & Support">
          </div>

          <div class="map-point australia" data-title="Australia & New Zealand" data-desc="Export Operations & Supply">
          </div>

          <!-- TOOLTIP -->
          <div class="map-tooltip" id="tooltip">

            <h4></h4>
            <p></p>

          </div>

        </div>

        <!-- MOBILE TICK LIST -->
        <div class="mobile-network-list">
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>India</strong>
              <span>Ahmedabad (Global HQ & Manufacturing), Mumbai, Delhi, Kolkata</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>Middle East</strong>
              <span>UAE (Regional Distribution Hub & UAE Office)</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>North America</strong>
              <span>USA & Canada (Technical Support Office)</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>South Africa & African Markets</strong>
              <span>Industrial Project Support</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>South East Asia</strong>
              <span>Regional Sales & Support</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>Europe</strong>
              <span>Technical Sales & Distribution</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>South America</strong>
              <span>Export Operations</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>Australia & New Zealand</strong>
              <span>Export Operations & Supply</span>
            </div>
          </div>
          <div class="network-list-item">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <strong>Russia & CIS Region</strong>
              <span>Industrial Supply & Distribution</span>
            </div>
          </div>
        </div>

      </div>
      <div class="container btn-cnt">
        <a href="global-presence" class="btn-network btn--light btn-cnt-margin">View Global Network <i
            class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

  </section>


  <!-- OUR MISSION -->
  <section class="section section--alt" id="mission">
    <div class="container split">
      <div class="split__media">
        <img src="assets/images/resources/site/ourmission.webp" alt="Refractotherm industrial mission" loading="lazy" />
      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Our Mission</span>
        <h3>Our Mission</h3>
        <p class="lead" style="font-size: 1.15rem; line-height: 1.8; color: #334155;">
          To deliver innovative refractory, metallurgical, and thermal engineering solutions that enhance industrial performance, improve operational efficiency, and create long-term value for our customers.
        </p>
      </div>
    </div>
  </section>

  <!-- OUR VISION -->
  <section class="section" id="vision">
    <div class="container split">
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Our Vision</span>
        <h3>Our Vision</h3>
        <p class="lead" style="font-size: 1.15rem; line-height: 1.8; color: #334155;">
          To become a globally trusted partner in refractory, metallurgical, and thermal engineering solutions through quality, innovation, and engineering excellence.
        </p>
      </div>
      <div class="split__media">
        <img src="assets/images/resources/site/ourvision.webp" alt="Refractotherm industrial vision" loading="lazy" />
      </div>
    </div>
  </section>

  <!-- CONTACT CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="
          background-image: url(assets/images/resources/about-1.webp);
        "></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Get in Touch</span>
        <h3>Discuss your refractory and thermal engineering requirements.</h3>
        <p>
          Our engineering teams respond within one business day. Share your
          project brief and we will match you with the right specialist.
        </p>
        <ul class="cta__info">
          <li> <a href="https://maps.app.goo.gl/WTdRfAkDKHLtUGVf8" target="_blank">
            <i class="fa-solid fa-location-dot"></i> FF-71, Vraj Real Estate, Near Telephone Exchange Road, Bopal, Ahmedabad, 380058, Gujarat, India
</a></li>
          <li><i class="fa-solid fa-phone"> <a href="tel:+919825957604"></i> +91 98259 57604</a></li>
          <li>
            <i class="fa-solid fa-envelope"></i> <a href="mailto:info@refractotherm.com"></a>info@refractotherm.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form" onsubmit="
            event.preventDefault();
            this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';
          ">
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
          <option value="">Product Category</option>
          <option>Monolithic Refractories</option>
          <option>Flow Control Systems</option>
          <option>CCM Consumables</option>
          <option>Furnace Products</option>
          <option>Steelmaking Refractories</option>
          <option>Thermal Insulation</option>
        </select>
        <textarea rows="4" class="inputsections" placeholder="Project requirements"></textarea>
        <button type="submit" class="btn btn--primary btn--block">
          Submit Inquiry <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
</body>

</html>
