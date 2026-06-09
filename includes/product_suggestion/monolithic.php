 <section class="section section--alt" style="overflow: hidden;">
    <div class="container" style="max-width: 100%;">
      <div class="section__head section__head--center">
        <div>
          <span class="eyebrow"><span class="eyebrow__bar"></span>Explore More</span>
          <h3>All Products in this Category</h3>
        </div>
      </div>

      <div class="custom-carousel-wrapper"
        style="position: relative; width: 100%; max-width: 1200px; margin: 0 auto; height: 420px; display: flex; align-items: center; justify-content: center;">
        <button class="carousel-btn prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
        <div class="custom-carousel" style="position: relative; width: 100%; height: 350px;">
          <!-- JS fills this -->
        </div>
        <button class="carousel-btn next-btn"><i class="fa-solid fa-chevron-right"></i></button>
      </div>

    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const allMonolithicProducts = [
        { name: "Conventional Castables", link: "conventional-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/ConventionalCastables.webp" },
        { name: "Low Cement Castables (LCC)", link: "low-cement-castables-lcc-monolithic-refactories-and-castables.html", image: "assets/images/resources/products/monolithic/LowCementCastables(LCC).webp" },
        { name: "Ultra Low Cement Castables (ULCC)", link: "ultra-low-cement-castables-ulcc-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/UltraLowCementCastables(ULCC).webp" },
        { name: "Nano Bonded Castables", link: "nano-bonded-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/NanoBondedCastables.webp" },
        { name: "Self Flow Castables", link: "self-flow-castables-monolithic-refractories-product.php", image: "assets/images/resources/products/monolithic/SelfFlowCastables.webp" },
        { name: "Alumina Spinel Castables", link: "alumina-spinel-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/AluminaSpinelCastables.webp" },
        { name: "Insulating Castables", link: "insulating-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/InsulatingCastables.webp" },
        // { name: "Abrasion Resistant Castables", link: "abrasion-resistant-castables-monolithic-refractories-and-castables.php", image: "assets/images/resources/products/monolithic/AbrasionResistantCastables.webp" },
        // { name: "Alkali Resistant Castables", link: "alkali-resistant-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/AlkaliResistantCastables.webp" },
        // { name: "Anti-Coating Castables", link: "anti-coating-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/Anti-CoatingCastables.webp" },
        // { name: "Acid Resistant Castables", link: "acid-resistant-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/AcidResistantCastables.webp" },
        // { name: "Boiler Castables", link: "boiler-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/BoilerCastables.webp" },
        // { name: "Kiln Castables", link: "kiln-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/KilnCastables.webp" },
        // { name: "Cyclone Castables", link: "cyclone-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/Monolithic.webp" },
        // { name: "Burner Pipe Castables", link: "burner-pipe-castables-monolithic-refractories-and-castables.html", image: "assets/images/resources/Monolithic.webp" },
        { name: "Refractory Mortars", link: "refractory-mortars-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/RefractoryMortars.webp" },
        { name: "Refractory Cements", link: "refractory-cements-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/RefractoryCements.webp" },
        // { name: "Acid Resistant Mortars", link: "acid-resistant-mortars-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/AcidResistantMortars.webp" },
        { name: "Silica Ramming Mass", link: "silica-ramming-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/SilicaRammingMass.webp" },
        // { name: "Neutral Ramming Mass", link: "neutral-ramming-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/NeutralRammingMass.webp" },
        // { name: "Basic Ramming Mass", link: "basic-ramming-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/BasicRammingMass.webp" },
        // { name: "Acidic Ramming Mass", link: "acidic-ramming-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/AcidicRammingMass.webp" },
        { name: "Dry Vibrating Mass", link: "dry-vibrating-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/DryVibratingMass.webp" },
        // { name: "Nozzle Filling Compound (NFC)", link: "nozzle-filling-compound-nfc-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/NozzleFillingCompound(NFC).webp" },
        { name: "Gunning Mass", link: "gunning-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/aod/GunningMass.webp" },
        { name: "Spray Mass", link: "spray-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/SprayMass.webp" },
        // { name: "Fettling Mass", link: "fettling-mass-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/FettlingMass.webp" },
        // { name: "Shotcreting Materials", link: "shotcreting-materials-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/ShotcretingMaterials.webp" },
        { name: "Hot Repair Mixes", link: "hot-repair-mixes-monolithic-refractories-and-castables.html", image: "assets/images/resources/products/monolithic/HotRepairMixes.webp" }
      ];

      const wrappers = document.querySelectorAll(".custom-carousel-wrapper");

      wrappers.forEach(wrapper => {
        const carousel = wrapper.querySelector(".custom-carousel");
        const prevBtn = wrapper.querySelector(".prev-btn");
        const nextBtn = wrapper.querySelector(".next-btn");

        let currentIndex = 0;
        const total = allMonolithicProducts.length;
        const cardElements = [];

        // Render cards
        allMonolithicProducts.forEach((prod, i) => {
          const a = document.createElement("a");
          a.href = prod.link;
          a.className = "carousel-item";

          const img = document.createElement("img");
          img.src = prod.image || "assets/images/resources/Monolithic.webp";

          const overlay = document.createElement("div");
          overlay.className = "industry-overlay";

          const content = document.createElement("div");
          content.className = "industry-content";

          const title = document.createElement("h3");
          title.textContent = prod.name;

          content.appendChild(title);
          a.appendChild(img);
          a.appendChild(overlay);
          a.appendChild(content);

          carousel.appendChild(a);
          cardElements.push(a);
        });

        function updateCarousel() {
          cardElements.forEach((card, i) => {
            let offset = (i - currentIndex) % total;
            // Handle negative bounds perfectly
            if (offset < 0) offset += total;

            // Re-center around 0
            if (offset > Math.floor(total / 2)) offset -= total;

            const absOffset = Math.abs(offset);

            let translateX = 0;
            let scale = 1;
            let opacity = 1;
            let zIndex = 10;

            if (absOffset === 0) {
              scale = 1.1;
              opacity = 1;
              zIndex = 10;
              translateX = -50;
            } else if (absOffset === 1) {
              scale = 0.85;
              opacity = 0.6;
              zIndex = 5;
              translateX = -50 + (Math.sign(offset) * 115);
            } else if (absOffset === 2) {
              scale = 0.7;
              opacity = 0.3;
              zIndex = 4;
              translateX = -50 + (Math.sign(offset) * 190);
            } else {
              scale = 0.5;
              opacity = 0;
              zIndex = 1;
              translateX = -50 + (Math.sign(offset) * 250);
            }

            card.style.transform = "translateX(" + translateX + "%) scale(" + scale + ")";
            card.style.opacity = opacity;
            card.style.zIndex = zIndex;
            card.style.pointerEvents = absOffset === 0 ? "auto" : "none";
          });
        }

        prevBtn.addEventListener("click", () => {
          currentIndex = (currentIndex - 1 + total) % total;
          updateCarousel();
        });

        nextBtn.addEventListener("click", () => {
          currentIndex = (currentIndex + 1) % total;
          updateCarousel();
        });

        updateCarousel();
      });
    });
  </script>