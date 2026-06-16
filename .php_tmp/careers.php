<!doctype html>
<html lang="en">

<?php
$title = 'Careers | Refractotherm';
$description = 'Refractotherm engineers high-performance refractory products, flow control systems and thermal solutions for global steel, cement, foundry and power industries.';
include 'includes/head.php';
?>

<body>
  <?php
  $activePage = 'careers';
  include 'includes/navbar.php';
  ?>

  <!-- 1. CAREERS BANNER -->
  <section class="section section--dark page-banner-section">
    <div class="page-banner-bg" style="background-image: url('assets/images/resources/site/banner.webp');"></div>
    <div class="container page-banner-container">
      <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Join Our Team</span>
      <h1 class="page-banner-title">Careers at Refractotherm</h1>
      <p class="lead page-banner-lead">Build a career engineering solutions for the world's most extreme industrial
        environments.</p>
    </div>
  </section>

  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li><a href="home">Home</a></li>
      <li class="active">Careers</li>
    </ol>
  </nav>

  <!-- 2. WORK CULTURE -->
  <section class="section">
    <div class="container split">
      <div class="split__body reveal">
        <span class="eyebrow"><span class="eyebrow__bar"></span>Life at Refractotherm</span>
        <h3>Engineering Excellence Driven by People.</h3>
        <p class="lead">
          We operate at the intersection of material science, heavy manufacturing, and field engineering.
        </p>
        <p>
          Our team comprises metallurgical engineers, ceramic scientists, and seasoned field technicians who thrive on
          solving complex thermal challenges. We foster a culture of continuous learning, rigorous safety standards, and
          uncompromising technical integrity.
        </p>
      </div>
      <div class="split__media reveal">
        <img src="assets/images/resources/team.webp" alt="Engineering Team" loading="lazy" class="careers-image" />
      </div>
    </div>
  </section>

    <!-- 6. APPLICATION FORM -->
  <section class="cta" id="apply">
    <div class="cta__bg" style="background-image: url(assets/images/resources/hero-2.webp);"></div>
    <div class="container cta__grid">
      <div class="cta__intro">
        <span class="eyebrow eyebrow--light"><span class="eyebrow__bar"></span>Join Us</span>
        <h3>Submit Your Application.</h3>
        <p>
          Don't see a role that fits your exact profile? We are always looking for exceptional talent in refractory
          engineering. Submit your resume to our global talent pool.
        </p>
        <ul class="cta__info">
          <li><i class="fa-solid fa-envelope"></i> <a
              href="mailto:info@refractotherm.com">info@refractotherm.com</a></li>
        </ul>
      </div>
      <form class="cta__form"
        onsubmit="event.preventDefault(); this.querySelector('button').textContent = 'Application Submitted âœ“';">
        <h3>Application Form</h3>
        <div class="row">
          <input type="text" class="inputsections" placeholder="First Name" required />
          <input type="text" class="inputsections" placeholder="Last Name" required />
        </div>
        <div class="row">
          <input type="email" class="inputsections" placeholder="Email Address" required />
          <input type="tel" class="inputsections" placeholder="Phone Number" required />
        </div>
        <select class="category inputsections" required>
          <option value="">Position Applied For</option>
          <option>Senior Application Engineer - Steel</option>
          <option>R&D Scientist - Monolithics</option>
          <option>Refractory Installation Supervisor</option>
          <option>Technical Sales Manager</option>
          <option>Graduate Engineering Trainee (GET)</option>
          <option>General / Other Application</option>
        </select>
        <div class="careers-form-group">
          <label class="careers-file-label">Upload Resume/CV (PDF/DOCX, Max 5MB)</label>
          <input type="file" class="inputsections careers-file-input" accept=".pdf,.doc,.docx" required />
        </div>
        <textarea rows="3" class="inputsections" placeholder="Cover Letter / Brief Summary of Experience"></textarea>
        <button type="submit" class="btn btn--primary btn--block">
          Submit Application <i class="fa-solid fa-paper-plane"></i>
        </button>
      </form>
    </div>
  </section>

  <!-- 3. WHY JOIN US GRID -->
  <section class="section section--alt">
    <div class="container">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Value Proposition</span>
          <h3>Why Build Your Career With Us?</h3>
        </div>
      </div>

      <div class="cert-grid careers-benefit-grid">
        <div class="cert careers-benefit-card">
          <i class="fa-solid fa-earth-americas careers-benefit-icon"></i>
          <h4>Global Exposure</h4>
          <p class="careers-benefit-desc">Work on critical infrastructure projects across multiple continents.</p>
        </div>
        <div class="cert careers-benefit-card">
          <i class="fa-solid fa-flask careers-benefit-icon"></i>
          <h4>Advanced R&D</h4>
          <p class="careers-benefit-desc">Access to state-of-the-art ceramic testing and formulation laboratories.</p>
        </div>
        <div class="cert careers-benefit-card">
          <i class="fa-solid fa-helmet-safety careers-benefit-icon"></i>
          <h4>Safety First</h4>
          <p class="careers-benefit-desc">An uncompromising commitment to zero-harm in our plants and at client sites.
          </p>
        </div>
        <div class="cert careers-benefit-card">
          <i class="fa-solid fa-arrow-trend-up careers-benefit-icon"></i>
          <h4>Career Growth</h4>
          <p class="careers-benefit-desc">Structured mentoring and clear pathways to technical or managerial leadership.
          </p>
        </div>
      </div>
    </div>
  </section>





  <?php include 'includes/footer.php'; ?>
</body>

</html>
