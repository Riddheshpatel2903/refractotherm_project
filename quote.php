<!doctype html>
<html lang="en">

<?php
$title = 'Get a Quote | Refractotherm';
$description = 'Request a commercial quotation for Refractotherm refractory castables, monolithic mixes, flow control, and continuous casting refractories.';
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
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Commercial Portal</span>
      <h1 class="page-banner-title">Request a Commercial Quote</h1>
      <p class="lead page-banner-lead">Submit your custom technical specifications and quantity needs to receive a
        formal quotation from our engineering team within one business day.</p>
    </div>
  </section>

  <!-- FORM SECTION -->
  <section class="section">
    <div class="container split">
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Global Fulfillment</span>
        <h3>Request Technical Quote.</h3>
        <p class="lead">
          REFRACTOTHERM manages end-to-end industrial supply chains, exporting custom-engineered high-temperature
          solutions to over 40 countries.
        </p>
        <p>
          Our application engineers will review your thermal, chemical, and physical load requirements to ensure the
          selected product grade matches your campaign objectives.
        </p>

        <div style="margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
          <div
            style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); padding: 20px; border-radius: 8px;">
            <i class="fa-solid fa-truck-ramp-box"
              style="color: var(--orange); font-size: 1.5rem; margin-bottom: 10px;"></i>
            <h4 style="color: #fff; font-size: 0.95rem; margin-bottom: 5px;">Export Grade Packing</h4>
            <p style="font-size: 0.8rem; color: #94a3b8; margin: 0; line-height: 1.4;">25kg/50kg multi-layer bags, 1.2MT
              Big Bags, or custom palletized shrink-wrapping.</p>
          </div>
          <div
            style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); padding: 20px; border-radius: 8px;">
            <i class="fa-solid fa-certificate"
              style="color: var(--orange); font-size: 1.5rem; margin-bottom: 10px;"></i>
            <h4 style="color: #fff; font-size: 0.95rem; margin-bottom: 5px;">ISO 9001:2015 QC</h4>
            <p style="font-size: 0.8rem; color: #94a3b8; margin: 0; line-height: 1.4;">Every batch is certified by our
              NABL-accredited labs for density, CCS, and HMOR.</p>
          </div>
        </div>
      </div>

      <div class="split__media reveal" style="box-shadow: var(--shadow);">
        <form class="cta__form" id="quoteForm" onsubmit="event.preventDefault(); handleQuoteSubmit();"
          style="width: 100%;">
          <h3>RFQ Request Details</h3>

          <div class="row">
            <div>
              <label
                style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Full
                Name *</label>
              <input type="text" class="inputsections" placeholder="Full Name" required />
            </div>
            <div>
              <label
                style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Company
                Name *</label>
              <input type="text" class="inputsections" placeholder="Company" required />
            </div>
          </div>

          <div class="row">
            <div>
              <label
                style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Work
                Email *</label>
              <input type="email" class="inputsections" placeholder="Work Email" required />
            </div>
            <div>
              <label
                style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Phone
                Number</label>
              <input type="tel" class="inputsections" placeholder="Phone" />
            </div>
          </div>

          <div class="row">
            <div>
              <label
                style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Product
                Category *</label>
              <select class="category inputsections" id="quoteCategory" required onchange="updateProductsDropdown();"
                style="padding-top: 13px; padding-bottom: 13px;">
                <option value="">Select Category</option>
                <option value="monolithic">Monolithic Refractories & Castables</option>
                <option value="flow-control">Flow Control & Slide Gate Systems</option>
                <option value="ccm">CCM Consumables</option>
                <option value="furnace">Induction Furnace Blocks & Consumables</option>
                <option value="steelmaking">Steelmaking Refractories (EAF, LRF, Ladle)</option>
                <option value="aod-bf">AOD, Converter & Blast Furnace Refractories</option>
              </select>
            </div>
            <div>
              <label
                style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Select
                Product *</label>
              <select class="category inputsections" id="quoteProduct" required disabled
                style="padding-top: 13px; padding-bottom: 13px;">
                <option value="">Select Product</option>
              </select>
            </div>
          </div>

          <div style="margin-top: 16px;">
            <label
              style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 6px; font-weight: 500;">Message</label>
            <textarea rows="4" class="inputsections" placeholder="Write your message here..."></textarea>
          </div>

          <button type="submit" class="btn btn--primary btn--block" id="quoteSubmitBtn" style="margin-top: 10px;">
            Submit Request <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

</body>

</html>
