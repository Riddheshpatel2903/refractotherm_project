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
        { name: "Ladle to Tundish Shrouds (LTS)", link: "ladle-to-tundish-shrouds-lts-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/LadletoTundishShrouds(LTS).webp" },
        { name: "Submerged Entry Nozzles (SEN)", link: "submerged-entry-nozzles-sen-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/SubmergedEntryNozzles(SEN).webp" },
        // { name: "Carbon Free SEN", link: "carbon-free-sen-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CarbonFreeSEN.webp" },
        // { name: "SEN Well Blocks", link: "sen-well-blocks-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/SENWellBlocks.webp" },
        { name: "Monoblock Stoppers", link: "monoblock-stoppers-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/MonoblockStoppers.webp" },
        // { name: "Stopper Head Bricks", link: "stopper-head-bricks-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/StopperHeadBricks.webp" },
        // { name: "Graphite Stopper Rods", link: "graphite-stopper-rods-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/GraphiteStopperRods.webp" },
        { name: "Tundish Well Blocks", link: "tundish-well-blocks-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishWellBlocks.webp" },
        // { name: "Tundish Dam & Weirs", link: "tundish-dam-and-weirs-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishDamWeirs.webp" },
        { name: "Tundish Impact Pads", link: "tundish-impact-pads-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishImpactPads.webp" },
        // { name: "Tundish Working Linings", link: "tundish-working-linings-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishWorkingLinings.webp" },
        // { name: "Tundish Spray Linings", link: "tundish-spray-linings-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishSprayLinings.webp" },
        // { name: "Dry Tundish Powder", link: "dry-tundish-powder-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/DryTundishPowder.webp" },
        // { name: "Preheated Tundish Liners", link: "preheated-tundish-liners-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/PreheatedTundishLiners.webp" },
        { name: "Tundish Boards", link: "tundish-boards-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishBoards.webp" },
        // { name: "Preformed Tundish Boards", link: "preformed-tundish-boards-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/PreformedTundishBoards.webp" },
        // { name: "Insulating Tundish Boards", link: "insulating-tundish-boards-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/InsulatingTundishBoards.webp" },
        { name: "Ceramic Foam Filters", link: "ceramic-foam-filters-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CeramicFoamFilters.webp" },
        { name: "Casting Powder / Mould Powder", link: "casting-powder-mould-powder-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CastingPowderMouldPowder.webp" },
        // { name: "LCC Powder", link: "lcc-powder-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/LCCPowder.webp" },
        // { name: "TCC Powder", link: "tcc-powder-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TCCPowder.webp" },
        // { name: "Radex Powder", link: "radex-powder-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/RadexPowder.webp" },
        { name: "Radex Tubes", link: "radex-tubes-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/RadexTubes.webp" },
        { name: "Covering Compounds", link: "tundish-covering-compounds-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/TundishCoveringCompounds.webp" },
        { name: "Ladle Covering Compounds", link: "ladle-covering-compounds-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/LadleCoveringCompounds.webp" },
        // { name: "CNC Nozzles", link: "cnc-nozzles-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CNCNozzles.webp" },
        // { name: "FNC Nozzles", link: "fnc-nozzles-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/FNCNozzles.webp" },
        // { name: "CNM Nozzles", link: "cnm-nozzles-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CNMNozzles.webp" },
        // { name: "CK4 Nozzles", link: "ck4-nozzles-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CK4Nozzles.webp" },
        // { name: "CCM Refractory Consumables & Spares", link: "ccm-refractory-consumables-and-spares-continuous-casting-machine-ccm-consumables", image: "assets/images/resources/products/ccm/CCMRefractoryConsumablesSpares.webp" }
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
