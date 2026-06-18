<!doctype html>
<html lang="en">

<?php
$title = 'Products | Refractotherm';
$description = 'Refractotherm engineers high-performance refractory products, flow control systems and thermal solutions for global steel, cement, foundry and power industries.';
$connonical_url = 'refractotherm.com';
$indexing = 'index, follow';

include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'products';
  include 'includes/navbar.php';
  ?>

  <!-- 1. PRODUCTS BANNER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Engineered Materials</span>
      <h1 class="page-banner-title">Refractory Products</h1>
      <p class="lead page-banner-lead">Complete Refractory, Metallurgical & Thermal Engineering Solutions</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li class="active">Products</li>
    </ol>
  </nav>

  <!-- 3. PRODUCT CATEGORIES GRID -->
  <section class="section section--alt" id="section">
    <div class="container">
      <div class="section__head">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Our Portfolio</span>
          <h3>Product Categories.</h3>
        </div>
        <div class="category-filter" id="categoryFilter">
          <!-- Buttons dynamically generated via products.js -->
        </div>

      </div>

      <div class="prod-grid" id="productsGrid">
        <!-- Products dynamically generated via products.js -->
      </div>
    </div>
  </section>


  <!-- 8. DOWNLOAD CATALOGUE SECTION -->
  <section class="section section--dark section--ink-bg">
    <div class="container download-catalogue-box">
      <div class="download-catalogue-content">
        <h3 class="download-catalogue-title">Technical Product Catalogue</h3>
        <p class="download-catalogue-desc">Download our comprehensive technical specifications manual including
          chemical compositions, physical properties, and application guidelines.</p>
      </div>
      <div class="download-catalogue-action">
        <a href="#" class="btn btn--primary btn--download-padding">Download PDF <i class="fa-solid fa-download"></i></a>
      </div>
    </div>
  </section>

  <!-- 9. PRODUCT INQUIRY CTA -->
  <section class="cta" id="contact">
    <div class="cta__bg" style="background-image: url(assets/images/resources/about-1.webp);"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Product Inquiry</span>
        <h3>Request technical specifications or a commercial quote.</h3>
        <p>
          Our application engineers are available to review your operational parameters and recommend the exact
          refractory grade for your specific thermal challenges.
        </p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-phone"></i> +91 98259 57604</li>
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:refectothermindia@gmail.com">refectothermindia@gmail.com</a>
          </li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Submitted Ã¢Å“â€œ';">
        <h3>Product Inquiry</h3>
        <div class="row">
          <input type="text" class="inputsections" placeholder="Full Name" required />
          <input type="text" class="inputsections" placeholder="Company" required />
        </div>
        <div class="row">
          <input type="email" class="inputsections" placeholder="Work Email" required />
          <input type="tel" class="inputsections" placeholder="Phone" />
        </div>
        <select class="category inputsections" required>
          <option value="">Select Product Category</option>
          <option>Monolithic Refractories</option>
          <option>Flow Control Systems</option>
          <option>CCM Consumables</option>
          <option>Furnace Products</option>
          <option>Steelmaking Refractories</option>
          <option>Thermal Insulation</option>
        </select>
        <textarea rows="4" class="inputsections"
          placeholder="Please specify product grade or application requirements"></textarea>
        <button type="submit" class="btn btn--primary btn--block">
          Request Quote <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <script src="./assets/js/products.js"></script>
</body>

</html>
