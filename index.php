<!doctype html>
<html lang="en">

<?php
$title = "Refractotherm — Advanced Refractory & Thermal Engineering Solutions";
$description = "Refractotherm engineers high-performance refractory products, flow control systems and thermal solutions for global steel, cement, foundry and power industries.";
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
      <div class="hero__slide is-active" style="background-image: url(assets/images/resources/hero-1.jfif)"></div>
      <div class="hero__slide" style="background-image: url(assets/images/resources/hero-2.jfif)"></div>
      <div class="hero__slide" style="background-image: url(assets/images/resources/hero-1.jfif)"></div>
      <div class="hero__slide" style="background-image: url(assets/images/resources/hero-2.jfif)"></div>
    </div>
    <div class="hero__overlay"></div>
    <div class="container hero__content">
      <span class="eyebrow"><span class="eyebrow__bar"></span>Advanced Refractory Solutions</span>
      <h2>
        Engineering High Performance<br /><span class="accent">Thermal Solutions</span>
      </h2>
      <p>
        Six decades of refractory expertise serving the world's leading steel,
        cement, foundry and power producers, delivering performance,
        reliability and operational efficiency at extreme temperatures.
      </p>
      <div class="hero__actions">
        <a href="#products" class="btn--hero-primary">Explore Products <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#contact" class="btn--hero-outline">Contact Us</a>
      </div>
    </div>
    <div class="hero__meta">
      <!-- <div class="container hero__meta-inner">
        <div><strong>60+</strong><span>Years of Engineering</span></div>
        <div><strong>40+</strong><span>Countries Served</span></div>
        <div><strong>1,200+</strong><span>Industrial Projects</span></div>
        <div><strong>ISO</strong><span>9001  Â· 14001  Â· 45001</span></div>
      </div> -->
    </div>
    <div class="hero__progress"><span id="heroProgress"></span></div>
  </section>

  <!-- ABOUT -->
  <section class="section" id="about">
    <div class="container split">
      <div class="split__media">
        <img src="assets/images/resources/about-1.jfif" alt="Refractotherm steel plant operations" loading="lazy" />
        <div class="split__badge">
          <strong><i class="fa-solid fa-certificate"></i></strong>
        </div>
      </div>
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>About the Company</span>
        <h3>A trusted partner to the world's heavy industries.</h3>
        <p class="lead">
          Refractotherm designs, manufactures and installs advanced refractory
          and thermal engineering systems for steel, cement, foundry and power
          sectors. We combine deep metallurgical expertise with world-class
          manufacturing to deliver linings that perform under the most extreme
          operating conditions.
        </p>
        <ul class="check">
          <li>
            <i class="fa-solid fa-check"></i> In-house R&D and metallurgical
            laboratories
          </li>
          <li>
            <i class="fa-solid fa-check"></i> 4 manufacturing facilities Â·
            1.2M tonnes annual capacity
          </li>
          <li>
            <i class="fa-solid fa-check"></i> Field installation and turnkey
            shutdown services
          </li>
          <li>
            <i class="fa-solid fa-check"></i> PAN India Service and Support
          </li>
        </ul>
        <a href="#" class="btn btn--dark">Read Company Profile <i class="fa-solid fa-arrow-right"></i></a>
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
        <a href="#" class="btn btn--ghost">View All Products <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="prod-grid">
        <!-- Category 1 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img" style="background-image: url(assets/images/resources/Monolithic.webp);"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Monolithic Refractories</h4>
            <div class="category-card__hover-content">
              <p>Comprehensive range of castables, ramming mass, gunning mixes and mortars for all high-temperature
                applications.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 2 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/FlowControlSystems.jfif);"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Flow Control Systems</h4>
            <div class="category-card__hover-content">
              <p>Precision-engineered slide gate plates, nozzles, and purging systems for superior steel flow
                management.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 3 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img" style="background-image: url(assets/images/resources/CCMConsumables.jfif);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">CCM Consumables</h4>
            <div class="category-card__hover-content">
              <p>Advanced SENs, shrouds, and tundish boards ensuring optimal continuous casting operations.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 4 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/induction_furnace/AluminaCrucibles.webp);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Induction Furnace Refractories</h4>
            <div class="category-card__hover-content">
              <p>High-performance crucibles, lining materials, and pre-cast blocks for efficient induction melting.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <!-- Category 5 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/SteelmakingRefractories.jpg);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Steelmaking Refractories</h4>
            <div class="category-card__hover-content">
              <p>Premium Magnesia Carbon and Alumina bricks designed for severe primary and secondary steelmaking.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
        <!-- Category 7 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/blast_furnace/BlastFurnaceTroughCastables.jpg);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Blast Furnace & DRI</h4>
            <div class="category-card__hover-content">
              <p>Robust trough castables, tap hole clay, and kiln linings for continuous ironmaking campaigns.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <a href="products.php" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/spacial_industries/CementKilnRefractories.jpg);">
          </div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Special Industry Refractories</h4>
            <div class="category-card__hover-content">
              <p>Specialized linings for cement kilns, petrochemical heaters, and waste incinerators.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
        <!-- Category 9 -->
        <a href="products.php" class="category-card">
          <div class="category-card__img"
            style="background-image: url(assets/images/resources/products/foundries/FoundryCoatings.jpg);"></div>
          <div class="category-card__overlay"></div>
          <div class="category-card__content">
            <h4 class="category-card__title">Foundry Consumables</h4>
            <div class="category-card__hover-content">
              <p>Essential coatings, pouring cups, and metallurgical fluxes for precise foundry casting.</p>
              <span class="category-card__link">Click to see more <i class="fa-solid fa-arrow-right"></i></span>
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
      <div class="industries-slider">

        <div class="industries-track">

          <!-- CARD 1 -->
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/IntegratedSteelPlants.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Integrated Steel Plants</h3>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/SecondarySteelPlants.avif">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Secondary Steel Plants</h3>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/StainlessSteelPlants.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Stainless Steel Plants</h3>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/AlloySteelPlants.avif">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Alloy Steel Plants</h3>
            </div>
          </div>

          <!-- CARD 5 -->
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/SteelFoundries.webp">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Steel Foundries</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/FerroAlloyPlants.png">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Ferro Alloy Plants</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/Billet&SlabCastingPlants.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Billet & Slab Casting Plants</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/RollingMillRefractories.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Rolling Mill Refractories</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/Continuous Casting Machines (CCM).avif">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Continuous Casting Machines (CCM)</h3>
            </div>
          </div>



          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/LadleRefiningFurnaces(LRF).jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Ladle Refining Furnaces (LRF)</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/ElectricArcFurnaces(EAF).jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Electric Arc Furnaces (EAF)</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/BlastFurnaceOperations.webp">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Blast Furnace Operations</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/InductionMeltingFurnaces.webp">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Induction Melting Furnaces</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/SpongeIron(DRI)Plants.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Sponge Iron (DRI) Plants</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/CementPlants.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Cement Plants</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/PetrochemicalIndustries.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Petrochemical Industries</h3>
            </div>
          </div>

          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/ReheatingFurnaces.jpg">

            <div class="industry-overlay"></div>

            <div class="industry-content">
              <h3>Reheating Furnaces</h3>
            </div>
          </div>

        </div>
      </div>
  </section>

  <!-- WHY US -->
  <section class="section section--alt">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Why Refractotherm</span>
          <h3>Engineering authority. Operational reliability.</h3>
        </div>
      </div>
      <div class="why-grid">
        <div class="why">
          <span class="why__num">01</span>
          <h4>Metallurgical Expertise</h4>
          <p>
            Decades of process knowledge applied to every lining design and
            product specification.
          </p>
        </div>
        <div class="why">
          <span class="why__num">02</span>
          <h4>Integrated Manufacturing</h4>
          <p>
            Vertically integrated production ensures consistent quality and
            on-time delivery worldwide.
          </p>
        </div>
        <div class="why">
          <span class="why__num">03</span>
          <h4>Field Engineering Teams</h4>
          <p>
            Certified installation crews and shutdown specialists deployed
            across four continents.
          </p>
        </div>
        <div class="why">
          <span class="why__num">04</span>
          <h4>R&D and Innovation</h4>
          <p>
            In-house labs continuously developing next-generation refractory
            chemistries and systems.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section section--dark" id="services">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Our Services</span>
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
                background-image: url(assets/images/resources/FurnaceLining.jpg);
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
                background-image: url(assets/images/resources/EAF.jpg);
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
                background-image: url(assets/images/resources/LRF.jfif);
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
        <a href="services.php" class="btn btn--ghost">All Services <i class="fa-solid fa-arrow-right"></i></a>
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
          Strong Industrial Presence
          Across Global & Indian Markets
        </h2>

        <p>
          REFRACTOTHERM delivers refractory and thermal engineering
          solutions through a strong network of manufacturing units,
          sales offices, distributors, and technical support teams
          serving industries worldwide.
        </p>

      </div>

      <!-- NETWORK WRAPPER -->
      <div class="network-wrapper">

        <!-- MAP -->
        <div class="map-box">

          <img loading="lazy" src="assets/images/resources/world_map.jpg" alt="">

          <div class="map-point india" data-title="India" data-desc="Head Office & Manufacturing">
          </div>

          <div class="map-point uae" data-title="UAE" data-desc="Regional Distribution Hub">
          </div>

          <div class="map-point usa" data-title="USA" data-desc="Technical Support Office">
          </div>

          <div class="map-point southafrica" data-title="South Africa" data-desc="Industrial Project Support">
          </div>

          <!-- TOOLTIP -->
          <div class="map-tooltip" id="tooltip">

            <h4></h4>
            <p></p>

          </div>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="network-content">

          <div class="network-card">

            <h3>20+</h3>
            <p>Export Countries</p>

          </div>

          <div class="network-card">

            <h3>8+</h3>
            <p>Regional Offices</p>

          </div>

          <div class="network-card">

            <h3>500+</h3>
            <p>Industrial Clients</p>

          </div>

          <div class="network-card">

            <h3>24/7</h3>
            <p>Technical Support</p>

          </div>

        </div>

      </div>
      <div class="container btn-cnt">
        <a href="global.php" class="btn-network btn--light btn-cnt-margin">View Global Network <i
            class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

  </section>


  <!-- MANUFACTURING -->
  <section class="section">
    <div class="container split">
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Manufacturing Facilities</span>
        <h3>Four integrated plants. One uncompromising standard.</h3>
        <p class="lead">
          Our facilities in Jamshedpur, Visakhapatnam, Bhilai and Raipur
          operate under unified quality systems with combined production
          capacity exceeding 1.2 million tonnes annually.
        </p>
      </div>
      <div class="split__media">
        <img src="assets/images/resources/manufacture.jpg" alt="Manufacturing facility" loading="lazy" />
      </div>
    </div>
  </section>

  <!-- CERTIFICATIONS -->
  <section class="section">
    <div class="container">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Certifications &
            Compliance</span>
          <h3>Quality, environment and safety , independently certified.</h3>
        </div>
      </div>
      <div class="cert-grid">
        <div class="cert">
          <i class="fa-solid fa-award"></i>
          <h4>ISO 9001:2015</h4>
          <p>Quality Management Systems</p>
        </div>
        <div class="cert">
          <i class="fa-solid fa-leaf"></i>
          <h4>ISO 14001:2015</h4>
          <p>Environmental Management</p>
        </div>
        <div class="cert">
          <i class="fa-solid fa-shield-halved"></i>
          <h4>ISO 45001:2018</h4>
          <p>Occupational Health & Safety</p>
        </div>
        <div class="cert">
          <i class="fa-solid fa-flask"></i>
          <h4>NABL Accredited Lab</h4>
          <p>Materials Testing & QA</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="
          background-image: url(assets/images/resources/about-2.jfif);
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
          <li>
            <i class="fa-solid fa-location-dot"></i> FF-71, Vraj Real Estate, Nr. Telephone Exchnage, Bopal, Ahmedabad
            380058, Gujarat, India
          </li>
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li>
            <i class="fa-solid fa-envelope"></i> <a
              href="mailto:refectothermindia@gmail.com"></a>refectothermindia@gmail.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form" onsubmit="
            event.preventDefault();
            this.querySelector('button').textContent = 'Submitted ÃƒÂ¢Ã…â€œÃ¢â‚¬Å“';
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
