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
        { name: "Ladle to Tundish Shrouds (LTS)", link: "ladle-to-tundish-shrouds-lts-continuous-casting-machine-ccm-consumables", alt: "Ladle to Tundish Shrouds (LTS) for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/LadletoTundishShrouds(LTS).webp" },
        { name: "Submerged Entry Nozzles (SEN)", link: "submerged-entry-nozzles-sen-continuous-casting-machine-ccm-consumables", alt: "Submerged Entry Nozzles (SEN) for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/SubmergedEntryNozzles(SEN).webp" },
        { name: "Monoblock Stoppers", link: "monoblock-stoppers-continuous-casting-machine-ccm-consumables", alt: "Monoblock Stoppers for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/MonoblockStoppers.webp" },
        { name: "Tundish Well Blocks", link: "tundish-well-blocks-continuous-casting-machine-ccm-consumables", alt: "Tundish Well Blocks for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/TundishWellBlocks.webp" },
        { name: "Tundish Impact Pads", link: "tundish-impact-pads-continuous-casting-machine-ccm-consumables", alt: "Tundish Impact Pads for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/TundishImpactPads.webp" },
        { name: "Tundish Boards", link: "tundish-boards-continuous-casting-machine-ccm-consumables", alt: "Tundish Boards for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/TundishBoards.webp" },
        { name: "Ceramic Foam Filters", link: "ceramic-foam-filters-continuous-casting-machine-ccm-consumables", alt: "Ceramic Foam Filters for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/CeramicFoamFilters.webp" },
        { name: "Casting Powder", link: "casting-powder-continuous-casting-machine-ccm-consumables", alt: "Casting Powder for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/CastingPowderMouldPowder.webp" },
        { name: "Mould Powder", link: "mould-powder-continuous-casting-machine-ccm-consumables", alt: "Mould Powder for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/CastingPowderMouldPowder.webp" },
        { name: "Radex Tubes", link: "radex-tubes-continuous-casting-machine-ccm-consumables", alt: "Radex Tubes for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/RadexTubes.webp" },
        { name: "Covering Compounds", link: "tundish-covering-compounds-continuous-casting-machine-ccm-consumables", alt: "Covering Compounds for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/TundishCoveringCompounds.webp" },
        { name: "Ladle Covering Compounds", link: "ladle-covering-compounds-continuous-casting-machine-ccm-consumables", alt: "Ladle Covering Compounds for Continuous Casting Machine CCM Consumables", image: "assets/images/resources/products/ccm/LadleCoveringCompounds.webp" },
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
          img.src = prod.image || "assets/images/resources/CCMConsumables.webp";
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
