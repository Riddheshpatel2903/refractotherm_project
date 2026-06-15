// REFRACTOTHERM — interactions
(function () {
  // Sticky nav shadow
  const nav = document.getElementById('nav');
  const onScroll = () => nav.classList.toggle('is-scrolled', window.scrollY > 8);
  window.addEventListener('scroll', onScroll, { passive: true }); onScroll();

  // Mobile burger
  const burger = document.getElementById('navBurger');
  burger?.addEventListener('click', () => nav.classList.toggle('is-open'));

  // Mobile mega toggle
  document.querySelectorAll('.nav__item.has-mega > .nav__link, .nav__item.drop-container > .nav__link').forEach(link => {
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 1250) {
        e.preventDefault();
        link.parentElement.classList.toggle('is-open');
      }
    });
  });

  // Close mobile nav on link click with smooth delay
  document.querySelectorAll('.nav__menu a:not(.has-mega > a):not(.drop-container > a)').forEach(a => {
    a.addEventListener('click', (e) => {
      if (window.innerWidth <= 1251) {
        const href = a.getAttribute('href');
        const target = a.getAttribute('target');

        if (href && target !== '_blank') {
          e.preventDefault();
          nav.classList.remove('is-open');

          setTimeout(() => {
            window.location.href = href;
          }, 350); // Matches the CSS transform duration
        } else {
          nav.classList.remove('is-open');
        }
      }
    });
  });

  // Hero slideshow
  const slides = document.querySelectorAll('.hero__slide');
  const progress = document.getElementById('heroProgress');
  let idx = 0; const DURATION = 6000;
  let start = Date.now();
  function tick() {
    const elapsed = Date.now() - start;
    if (progress) progress.style.width = Math.min(100, (elapsed / DURATION) * 100) + '%';
    if (elapsed >= DURATION) {
      slides[idx].classList.remove('is-active');
      idx = (idx + 1) % slides.length;
      slides[idx].classList.add('is-active');
      start = Date.now();
    }
    requestAnimationFrame(tick);
  }
  if (slides.length) tick();

  // Reveal on scroll
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
  }, { threshold: 0.02 });
  document.querySelectorAll('.section, .split__body, .split__media, .prod, .serv, .why, .ind, .cert, .proj, .timeline__item, .reveal').forEach(el => {
    el.classList.add('reveal'); io.observe(el);
  });

  // Mobile category links navigation
  document.querySelectorAll('.mega__category-title').forEach(title => {
    title.addEventListener('click', (e) => {
      if (window.innerWidth <= 1250) {
        e.preventDefault();
        nav.classList.remove('is-open'); // Close the menu immediately

        const text = title.innerText;
        const slug = text.toLowerCase().replace(/\s*&\s*/g, '-and-').replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');

        // Wait for the slide-out animation to finish before navigating
        setTimeout(() => {
          window.location.href = 'products#' + slug;
        }, 350);
      }
    });
  });
})();

/* =========================================
   MAP TOOLTIP
========================================= */

const points = document.querySelectorAll('.map-point, .map-point-national');

if (points.length > 0) {
  // Clear any active tooltip when clicking outside the map points
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.map-point, .map-point-national')) {
      document.querySelectorAll('.map-tooltip').forEach(tooltip => {
        tooltip.classList.remove('active');
      });
    }
  });

  points.forEach(point => {
    const showTooltip = () => {
      const title = point.getAttribute('data-title');
      const desc = point.getAttribute('data-desc');

      const tooltip = point.parentElement.querySelector('.map-tooltip');
      if (!tooltip) return;

      // Close all other tooltips first
      document.querySelectorAll('.map-tooltip').forEach(t => {
        if (t !== tooltip) t.classList.remove('active');
      });

      tooltip.classList.add('active');
      tooltip.querySelector('h4').innerText = title;
      tooltip.querySelector('p').innerText = desc;

      const parentWidth = point.parentElement.clientWidth;
      const tooltipWidth = tooltip.offsetWidth || 180;

      // If point is on the right side of the map (past 65% width), show tooltip on the left of the point
      if (point.offsetLeft > parentWidth * 0.65) {
        tooltip.style.left = (point.offsetLeft - tooltipWidth - 15) + 'px';
      } else {
        tooltip.style.left = (point.offsetLeft + 15) + 'px';
      }
      tooltip.style.top = (point.offsetTop - 20) + 'px';
    };

    const hideTooltip = () => {
      const tooltip = point.parentElement.querySelector('.map-tooltip');
      if (tooltip) tooltip.classList.remove('active');
    };

    // Desktop hover support
    point.addEventListener('mouseenter', showTooltip);
    point.addEventListener('mouseleave', hideTooltip);

    // Mobile tap support
    point.addEventListener('click', (e) => {
      e.stopPropagation(); // Stop event bubbling to document click listener
      showTooltip();
    });
  });
}

/* =========================================
   DOWNLOAD MODAL LOGIC
========================================= */
(function () {
  const modalHTML = `
    <div class="download-modal-overlay" id="downloadModalOverlay">
      <div class="download-modal">
        <button class="download-modal-close" id="downloadModalClose"><i class="fa-solid fa-xmark"></i></button>
        <h3>Download Technical Document</h3>
        <p>Please fill out the form below to access the download.</p>
        <form id="downloadForm" class="download-form">
          <div class="form-group-row">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="firstName" required>
            </div>
            <div class="form-group">
              <label>Surname</label>
              <input type="text" name="lastName" required>
            </div>
          </div>
          <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="companyName" required>
          </div>
          <div class="form-group">
            <label>Mobile No</label>
            <input type="tel" name="mobileNo" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
          </div>
          <button type="submit" class="btn btn--primary" style="width: 100%; margin-top: 10px; text-align: center">Submit & Download</button>
        </form>
        <div id="downloadSuccessMessage" class="download-success">
          <i class="fa-solid fa-circle-check"></i>
          <h4>Thank you!</h4>
          <p>Your download is starting...</p>
        </div>
      </div>
    </div>
  `;

  document.body.insertAdjacentHTML('beforeend', modalHTML);

  const overlay = document.getElementById('downloadModalOverlay');
  const closeBtn = document.getElementById('downloadModalClose');
  const form = document.getElementById('downloadForm');
  const successMsg = document.getElementById('downloadSuccessMessage');

  // Event delegation to catch clicks on any download button dynamically
  document.body.addEventListener('click', (e) => {
    const target = e.target.closest('a, button, .btn--mega-download');
    if (target) {
      const text = target.textContent.toLowerCase();
      const isDownloadBtn = text.includes('download') || target.classList.contains('btn--mega-download');

      if (isDownloadBtn) {
        e.preventDefault();
        overlay.classList.add('active');
        form.style.display = 'block';
        successMsg.style.display = 'none';
        form.reset();
      }
    }
  });

  function closeModal() {
    overlay.classList.remove('active');
  }

  closeBtn.addEventListener('click', closeModal);
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) closeModal();
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    form.style.display = 'none';
    successMsg.style.display = 'block';

    // Simulate download delay
    setTimeout(() => {
      closeModal();
    }, 2000);
  });
})();


const productsMap = {
  "monolithic": [
    "Conventional Castables",
    "Low Cement Castables (LCC)",
    "Ultra Low Cement Castables (ULCC)",
    "Nano Bonded Castables",
    "Self Flow Castables",
    "Alumina Spinel Castables",
    "Abrasion Resistant Castables",
    "Alkali Resistant Castables",
    "Boiler / Kiln Castables",
    "Refractory Mortars & Cements",
    "Silica / Neutral / Basic Ramming Mass",
    "Dry Vibrating Mass",
    "Nozzle Filling Compound (NFC)",
    "Gunning / Spraying Mass",
    "Shotcreting / Repair Mixes"
  ],
  "flow-control": [
    "Slide Gate Plates & Sand",
    "Slide Gate Mechanisms & Accessories",
    "Ladle & Collector Nozzles",
    "Metering & Zirconia Tundish Nozzles",
    "Lower & Upper Nozzles",
    "Porous Plugs & Bottom Purging Sets",
    "Well & Seating Blocks"
  ],
  "ccm": [
    "Ladle to Tundish Shrouds (LTS)",
    "Submerged Entry Nozzles (SEN)",
    "Monoblock Stoppers & Graphite Rods",
    "Tundish Well Blocks, Dam & Weirs",
    "Tundish Working & Spray Linings",
    "Casting Powder",
    "Mould Powder",
    "Radex Powder & Tubes",
    "Tundish Covering Compounds"
  ],
  "furnace": [
    "Furnace Bottom & Roof Blocks",
    "Rim, Pusher & Spout Blocks",
    "Pouring Launders & Lip Spouts",
    "Alumina & Graphite Crucibles",
    "Coil Cement & Grouting Materials",
    "Safety & Backup Lining Materials"
  ],
  "steelmaking": [
    "Magnesia Carbon Bricks",
    "Alumina Magnesia Carbon Bricks",
    "Magnesia Spinel Bricks",
    "Slag Line Refractories",
    "Ladle Castables & Insulation",
    "Taphole Sleeves & Taphole Clay",
    "Delta Roof Sections & Castables",
    "Refractory Gunning / Fettling Mix"
  ],
  "aod-bf": [
    "AOD Converter Bricks & Tuyeres",
    "Blast Furnace Trough Castables",
    "Iron Runner Castables & Runner Bricks",
    "Coke Oven Silica Refractories",
    "Hot Blast Stove Bricks",
    "Rotary Kiln Refractory Lining Bricks",
    "Pellet Plant Refractories"
  ]
};

function updateProductsDropdown() {
  const catSelect = document.getElementById('quoteCategory');
  const prodSelect = document.getElementById('quoteProduct');
  const cat = catSelect.value;

  prodSelect.innerHTML = '';

  if (!cat) {
    prodSelect.innerHTML = '<option value="">Select Product</option>';
    prodSelect.disabled = true;
    return;
  }

  prodSelect.disabled = false;
  const products = productsMap[cat] || [];

  const defaultOpt = document.createElement('option');
  defaultOpt.value = '';
  defaultOpt.textContent = 'Select Product *';
  prodSelect.appendChild(defaultOpt);

  products.forEach(prod => {
    const opt = document.createElement('option');
    opt.value = prod;
    opt.textContent = prod;
    prodSelect.appendChild(opt);
  });
}

function handleQuoteSubmit() {
  const btn = document.getElementById('quoteSubmitBtn');
  btn.innerHTML = 'Submitting Request... <i class="fa-solid fa-spinner fa-spin"></i>';
  btn.disabled = true;

  setTimeout(() => {
    const form = document.getElementById('quoteForm');
    form.innerHTML = `
          <div style="text-align: center; padding: 40px 20px;">
            <i class="fa-solid fa-circle-check" style="font-size: 4rem; color: #e4572e; margin-bottom: 20px; display: block;"></i>
            <h3 style="color: #fff; margin-bottom: 10px;">RFQ Received Successfully</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px; text-align: center;">
              Thank you for requesting a commercial quotation. Our technical team is reviewing your process vessel details and specifications. A formal commercial quote along with material datasheets will be emailed to you within 24 business hours.
            </p>
            <a href="products" class="btn btn--primary" style="display: inline-block;">Return to Products</a>
          </div>
        `;
  }, 1500);
}

/* =========================================
   VERTICAL TIMELINE SCROLL REVEAL (CSS & IO)
========================================= */
// The vertical timeline uses CSS transitions hooked into the global reveal IntersectionObserver.
// No additional slider JS required, improving performance and loading speed.

/* =========================================
   PRELOADER LOGIC
   ========================================= */
(function () {
  const preloader = document.getElementById('preloader');
  if (!preloader) return;

  const hidePreloader = () => {
    if (!preloader.classList.contains('fade-out')) {
      preloader.classList.add('fade-out');
      document.body.style.overflow = '';
    }
  };

  // Block scrolling while preloader is active
  document.body.style.overflow = 'hidden';

  // Dismiss preloader on load
  window.addEventListener('load', () => {
    setTimeout(hidePreloader, 300);
  });

  // Safety fallback: dismiss after 5 seconds in case some image or font hangs
  setTimeout(hidePreloader, 5000);
})();

