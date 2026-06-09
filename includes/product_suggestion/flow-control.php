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
        { name: "Slide Gate Plates", link: "slide-gate-plates-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/SlideGatePlates.webp" },
        // { name: "Slide Gate Sand", link: "slide-gate-sand-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/SlideGateSand.webp" },
        { name: "Slide Gate Mechanisms", link: "slide-gate-mechanisms-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/SlideGateMechanisms.webp" },
        { name: "Collector Nozzles", link: "collector-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/CollectorNozzles.webp" },
        { name: "Ladle Nozzles", link: "ladle-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/LadleNozzles.webp" },
        { name: "Tundish Nozzles", link: "tundish-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/TundishNozzles.webp" },
        { name: "Metering Nozzles", link: "metering-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/MeteringNozzles.webp" },
        // { name: "Upper Nozzles", link: "upper-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/UpperNozzles.webp" },
        // { name: "Lower Nozzles", link: "lower-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/LowerNozzles.webp" },
        // { name: "Inner Nozzles", link: "inner-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/InnerNozzles.webp" },
        // { name: "Outer Nozzles", link: "outer-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/OuterNozzles.webp" },
        // { name: "Composite Nozzles", link: "composite-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/CompositeNozzles.webp" },
        { name: "Zirconia Nozzles", link: "zirconia-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/ZirconiaNozzles.webp" },
        // { name: "Zirconia Inserts", link: "zirconia-inserts-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/ZirconiaInserts.webp" },
        // { name: "Iso-Pressed Nozzles", link: "iso-pressed-nozzles-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/IsoPressedNozzles.webp" },
        { name: "Porous Plugs", link: "porous-plugs-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/PorousPlugs.webp" },
        { name: "Bottom Purging (BP) System", link: "bottom-purging-bp-sets-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/BottomPurging(BP)Sets.webp" },
        // { name: "Purging Plug Systems", link: "purging-plug-systems-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/PurgingPlugSystems.webp" },
        { name: "Well Blocks", link: "well-blocks-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/WellBlocks.webp" },
        { name: "Seating Blocks", link: "seating-blocks-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/SeatingBlocks.webp" },
        // { name: "SEN Seating Blocks", link: "sen-seating-blocks-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/SENSeatingBlocks.webp" },
        { name: "Flow Control Systems", link: "flow-control-systems-flow-control-and-ladle-slide-gate-systems.html", image: "assets/images/resources/products/flowcontrol/FlowControlSystems.webp" }
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
          img.src = prod.image || "assets/images/resources/FlowControlSystems.jfif";

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