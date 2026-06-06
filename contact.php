<!doctype html>
<html lang="en">

<?php
$title = "Contact | Refractotherm";
$description = "Refractotherm engineers high-performance refractory products, flow control systems and thermal solutions for global steel, cement, foundry and power industries.";
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'contact';
  include 'includes/navbar.php';
  ?>

  <!-- 1. CONTACT BANNER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/hero-1.jfif');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Get In Touch</span>
      <h2 class="page-banner-title">Contact Us</h2>
      <p class="lead page-banner-lead">Reach out to our engineering, sales, or support teams globally for technical
        inquiries and commercial partnerships.</p>
    </div>
  </section>

  <!-- 2. CONTACT INFO & FORM -->
  <section class="section">
    <div class="container split">
      <!-- Contact Details -->
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Global Headquarters</span>
        <h3>Refractotherm India LLP</h3>
        <p class="lead">Corporate & Manufacturing Hub</p>

        <div class="contact-details-list">
          <div class="contact-details-item">
            <i class="fa-solid fa-location-dot contact-details-icon"></i>
            <div>
              <h4 class="contact-details-label">Address</h4>
              <p class="contact-details-text">FF-71, Vraj Real Estate, Paras-3,<br>
                Nr. Telephone Exchange, Bopal,<br>
                Ahmedabad 380058, Gujarat, India</p>
            </div>
          </div>

          <div class="contact-details-item">
            <i class="fa-solid fa-phone contact-details-icon"></i>
            <div>
              <h4 class="contact-details-label">Phone / Direct Line</h4>
              <p class="contact-details-text">+91 98259 57604</p>
            </div>
          </div>

          <div class="contact-details-item">
            <i class="fa-solid fa-envelope contact-details-icon"></i>
            <div>
              <h4 class="contact-details-label">Email</h4>
              <p class="contact-details-text">
                <a href="mailto:refectothermindia@gmail.com"
                  class="contact-details-link">refectothermindia@gmail.com</a><br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="split__media reveal">
        <form class="cta__form"
          onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Message Sent Ã¢Å“â€œ';">
          <h3>Send a Message</h3>

          <div class="row">
            <input type="text" class="inputsections" placeholder="First Name *" required />
            <input type="text" class="inputsections" placeholder="Last Name *" required />
          </div>

          <div class="row">
            <input type="email" class="inputsections" placeholder="Email Address *" required />
            <input type="tel" class="inputsections" placeholder="Phone Number" />
          </div>

          <select class="category inputsections" required>
            <option value="">Department / Inquiry Type *</option>
            <option>Sales & Commercial</option>
            <option>Technical Support</option>
            <option>Field Services</option>
            <option>Partnerships / Vendor</option>
            <option>Careers</option>
          </select>

          <textarea rows="4" class="inputsections contact-textarea-margin" placeholder="Message *" required></textarea>

          <button type="submit" class="btn btn--primary btn--block">
            Send Message <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- 3. MAP/FACILITY -->
  <section class="section contact-map-section" id="maps">
    <div class="container reveal">
      <div class="contact-map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3087.5321953896423!2d72.47289957958256!3d23.034224973127742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1779968994575!5m2!1sen!2sin"
          width="100%" height="100%" class="contact-map-iframe" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>


  <?php include 'includes/footer.php'; ?>
</body>

</html>
