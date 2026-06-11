<!doctype html>
<html lang="en">

<?php
$title = 'Services | Refractotherm';
$description = 'Refractotherm provides comprehensive refractory installation, maintenance, inspection, and engineering support services designed to improve operational reliability.';
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'services';
  include 'includes/navbar.php';
  ?>

  <!-- 1. TECHNICAL SERVICES BANNER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/RefractoryInstallation.webp');">
    </div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Technical Services</span>
      <h1 class="page-banner-title">Comprehensive Installation, Maintenance & Engineering Support Services</h1>
      <p class="lead page-banner-lead">We provide comprehensive refractory installation, maintenance, inspection, and engineering support services designed to improve operational reliability, enhance furnace performance, maximize refractory service life, and optimize overall plant efficiency.</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li class="active">Technical Services</li>
    </ol>
  </nav>

  <!-- 3. TECHNICAL SERVICES LIST (Alternating Rows) -->
  <section class="section section--alt">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Core Services</span>
          <h3>Services Include.</h3>
        </div>
      </div>

      <div class="service-alternate-list">
        <!-- Service 1: Refractory Installation -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/RefractoryInstallationservices.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Refractory Installation</h3>
            <p>Precision execution of brickwork, castable placing, gunning, and ramming using computerized machinery.
              Our highly trained supervision teams ensure flawless alignment and lining thickness control.</p>
          </div>
        </div>

        <!-- Service 2: Furnace Lining & Relining -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/FurnaceLining&Reliningservices.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Furnace Lining & Relining</h3>
            <p>End-to-end structural shell lining replacement. Includes wrecking, wall repair, anchoring, insulation
              backing layers, and high-performance wear-lining masonry for severe metallurgy environments.</p>
          </div>
        </div>

        <!-- Service 3: Ladle Refractory Lining -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/LadleRefractoryLining.webp');"></div>
          <div class="service-alternate-body">
            <h3>Ladle Refractory Lining</h3>
            <p>Complete masonry and casting configurations for transfer and treatment steel ladles, optimized to handle
              excessive liquid metal temperatures and mechanical shear stress.</p>
          </div>
        </div>

        <!-- Service 4: CCM Tundish Setup -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/CCMTundishRefractorySetup.webp');"></div>
          <div class="service-alternate-body">
            <h3>CCM Tundish Setup</h3>
            <p>Complete flow control and continuous casting layout. Precision setup of tundish safety linings, dry spray
              linings, flow dividers, dams, and submerged entry nozzle (SEN) assemblies.</p>
          </div>
        </div>

        <!-- Service 5: Shutdown Maintenance Services -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/ShutdownMaintenanceServices.webp');"></div>
          <div class="service-alternate-body">
            <h3>Shutdown Maintenance Services</h3>
            <p>Emergency hot repair spraying, planned maintenance, and rapid cooling relining support to maximize
              metallurgical furnace operating campaign length.</p>
          </div>
        </div>

        <!-- Service 6: Heat-Up & Dry-Out Services -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/Heat-Up&Dry-OutServices.webp');"></div>
          <div class="service-alternate-body">
            <h3>Heat-Up & Dry-Out Services</h3>
            <p>Controlled thermal dry-out profiling utilizing specialized high-velocity gas burners. Prevents lining
              spalling by evaporating chemical water safely and steadily.</p>
          </div>
        </div>

        <!-- Service 7: Technical Supervision -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/TechnicalSupervision.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Technical Supervision</h3>
            <p>On-site quality supervision by certified senior Refractotherm specialists, auditing mixing consistency,
              anchoring parameters, and lining curing cycles.</p>
          </div>
        </div>

        <!-- Service 8: Furnace Inspection & Condition Assessment -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/FurnaceInspectionSupport.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Furnace Inspection & Condition Assessment</h3>
            <p>Visual and mechanical thickness surveys of working vessel hearths and walls, generating critical data for
              predictive maintenance scheduling.</p>
          </div>
        </div>

        <!-- Service 9: Refractory Performance Audits -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/RefractoryPerformanceAudits.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Refractory Performance Audits</h3>
            <p>In-depth structural audits investigating premature wear phenomena, profiling refractory-slag reactions,
              and optimizing chemical compositions.</p>
          </div>
        </div>

        <!-- Service 10: Furnace Performance Optimization -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/FurnacePerformanceOptimization.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Furnace Performance Optimization</h3>
            <p>Redesigning refractory zone layouts using FEM simulations to increase overall campaign life and reduce
              energy-intensive process cycles.</p>
          </div>
        </div>

        <!-- Service 11: Energy Saving Thermal Solutions -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/EnergySavingThermalSolutions.webp');"></div>
          <div class="service-alternate-body">
            <h3>Energy Saving Thermal Solutions</h3>
            <p>Pioneering monolithic and board systems featuring extremely low thermal conductivity to retain maximum
              process heat, reducing active CO2 emissions.</p>
          </div>
        </div>

        <!-- Service 12: Annual Maintenance Contracts (AMC) -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/AnnualMaintenanceContracts(AMC).webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Annual Maintenance Contracts (AMC)</h3>
            <p>All-inclusive plant management contracts covering routine vessel profiling, hot repair spraying, flow
              gate mechanical services, and emergency standby crews.</p>
          </div>
        </div>

        <!-- Service 13: Turnkey Refractory Projects -->
        <div class="service-alternate-row reveal">
          <div class="service-alternate-img"
            style="background-image: url('assets/images/resources/services/CompleteRefractoryTurnkeyProjects.webp');">
          </div>
          <div class="service-alternate-body">
            <h3>Turnkey Refractory Projects</h3>
            <p>Single-source responsibility starting from custom material selection, manufacturing, international
              logistics, installation execution, drying, and final handover.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications Section -->
  <section class="section" id="industries" style="padding-bottom: 30px;">
    <div class="container">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Industries Served</span>
          <h3>Applications.</h3>
        </div>
      </div>
      <div class="industries-slider" style="margin-top: 40px;">
        <div class="industries-track">
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/steelplants.webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Steel Plants</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/LadleRefiningFurnaces(LRF).webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Induction Melting Furnaces</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/ElectricArcFurnaces(EAF).webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Electric Arc Furnaces (EAF)</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/LadleRefiningFurnaces(LRF).webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Ladle Refining Furnaces (LRF)</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/ContinuousCastingMachines(CCM).webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Continuous Casting Machines (CCM)</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/beginning of industry.webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Steel Ladles & Tundishes</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/steelplants.webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Foundries</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/expandingcapabilities.webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Ferro Alloy Plants</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/LimePlants.webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>Lime Plants</h3></div>
          </div>
          <div class="industry-card">
            <img loading="lazy" src="assets/images/resources/services/application/HighTemperatureProcessIndustries.webp">
            <div class="industry-overlay"></div>
            <div class="industry-content"><h3>High-Temperature Process Industries</h3></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Benefits Section -->
  <section class="section section--alt">
    <div class="container">
      <div class="section__head ">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Value Added</span>
          <h3>Key Benefits.</h3>
        </div>
      </div>
      
      <div class="benefit-list-container">
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Enhanced Operational Reliability</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Extended Refractory Service Life</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Improved Furnace Performance</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Reduced Maintenance Downtime</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Increased Plant Productivity</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Optimized Energy Efficiency</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Lower Operating Costs</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Improved Process Stability</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Professional Technical Support</h4>
        </div>
        <div class="benefit-list-item reveal">
          <i class="fa-solid fa-check benefit-tick"></i>
          <h4 class="benefit-text">Complete Turnkey Execution</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. INQUquiry CTA -->
  <!-- <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url(assets/images/resources/about-2.webp);"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Service Inquiry</span>
        <h3>Schedule a site audit or shutdown consultation.</h3>
        <p>
          Our project management team will work closely with your plant managers to integrate our relining schedule
          seamlessly into your planned outage.
        </p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a></li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted ?';">
        <h3>Request Services</h3>
        <div class="row">
          <input type="text" class="inputsections" placeholder="Full Name" required />
          <input type="text" class="inputsections" placeholder="Company" required />
        </div>
        <div class="row">
          <input type="email" class="inputsections" placeholder="Work Email" required />
          <input type="tel" class="inputsections" placeholder="Phone" />
        </div>
        <select class="category inputsections" required>
          <option value="">Select Service Required</option>
          <option>Refractory Installation</option>
          <option>Shutdown Maintenance</option>
          <option>Turnkey Relining</option>
          <option>Technical Audit & Inspection</option>
          <option>Heat-Up & Dry-Out</option>
        </select>
        <textarea rows="4" class="inputsections"
          placeholder="Project details, target dates, and scope of work"></textarea>
        <button type="submit" class="btn btn--primary btn--block">
          Submit Request <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
  </section> -->

  <?php include 'includes/footer.php'; ?>
</body>

</html>
