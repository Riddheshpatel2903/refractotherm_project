  <!-- SUGGESTED PRODUCTS -->
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
      const allCategoryProducts = [
        { name: "AOD Converter Bricks", link: "aod-converter-bricks-aod-refractories-argon-oxygen-decarburization",alt: "AOD Converter Bricks for AOD Refractories", image: "assets/images/resources/products/aod/AODConverterBricks.webp" },
        { name: "Magnesia Carbon Bricks", link: "magnesia-carbon-bricks-aod-refractories-argon-oxygen-decarburization",alt: "Magnesia Carbon Bricks for AOD Refractories", image: "assets/images/resources/products/aod/MagnesiaCarbonBricks.webp" },
        { name: "AOD Tuyere Bricks", link: "aod-tuyere-bricks-aod-refractories-argon-oxygen-decarburization",alt: "AOD Tuyere Bricks for AOD Refractories", image: "assets/images/resources/products/aod/AODTuyereBricks.webp" },
        { name: "Burner Blocks", link: "burner-blocks-aod-refractories-argon-oxygen-decarburization",alt: "Burner Blocks for AOD Refractories", image: "assets/images/resources/products/aod/BurnerBlocks.webp" },
        { name: "Slag Line Refractories", link: "slag-line-refractories-aod-refractories-argon-oxygen-decarburization",alt: "Slag Line Refractories for AOD Refractories", image: "assets/images/resources/products/aod/SlagLineRefractories.webp" },
        { name: "Safety Lining Materials", link: "safety-lining-materials-aod-refractories-argon-oxygen-decarburization",alt: "Safety Lining Materials for AOD Refractories", image: "assets/images/resources/products/aod/SafetyLiningMaterials.webp" },
        { name: "Refractory Castables", link: "refractory-castables-aod-refractories-argon-oxygen-decarburization",alt: "Refractory Castables for AOD Refractories", image: "assets/images/resources/products/aod/RefractoryCastables.webp" },
        { name: "Gunning Mass", link: "gunning-mass-aod-refractories-argon-oxygen-decarburization",alt: "Gunning Mass for AOD Refractories", image: "assets/images/resources/products/aod/GunningMass.webp" },
        { name: "Repair Mixes", link: "repair-mixes-aod-refractories-argon-oxygen-decarburization",alt: "Repair Mixes for AOD Refractories", image: "assets/images/resources/products/aod/RepairMixes.webp" },
        { name: "Purging Systems", link: "purging-systems-aod-refractories-argon-oxygen-decarburization",alt: "Purging Systems for AOD Refractories", image: "assets/images/resources/products/aod/PurgingSystems.webp" },
        { name: "Taphole Refractories", link: "taphole-refractories-aod-refractories-argon-oxygen-decarburization",alt: "Taphole Refractories for AOD Refractories", image: "assets/images/resources/products/aod/TapholeRefractories.webp" },
        { name: "Backup Insulation Materials", link: "backup-insulation-materials-aod-refractories-argon-oxygen-decarburization",alt: "Backup Insulation Materials for AOD Refractories", image: "assets/images/resources/products/aod/BackupInsulationMaterials.webp" }
      ];

      const wrappers = document.querySelectorAll(".custom-carousel-wrapper");

      wrappers.forEach(wrapper => {
        const carousel = wrapper.querySelector(".custom-carousel");
        const prevBtn = wrapper.querySelector(".prev-btn");
        const nextBtn = wrapper.querySelector(".next-btn");

        let currentIndex = 0;
        const total = allCategoryProducts.length;
        const cardElements = [];

        // Render cards
        allCategoryProducts.forEach((prod, i) => {
          const a = document.createElement("a");
          a.href = prod.link;
          a.className = "carousel-item";

          const img = document.createElement("img");
          img.src = prod.image || "assets/images/resources/SteelmakingRefractories.webp";
          img.alt = prod.alt;

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
