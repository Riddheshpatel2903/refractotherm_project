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
        { name: "Furnace Bottom Blocks", link: "furnace-bottom-blocks-induction-furnace-refractories-blocks-and-consumables",alt:"Furnace Bottom Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/FurnaceBottomBlocks.webp" },
        { name: "Roof Castables", link: "furnace-roof-castables-induction-furnace-refractories-blocks-and-consumables",alt:"Furnace Roof Castables for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/FurnaceRoofCastables.webp" },
        { name: "Furnace Top Blocks", link: "furnace-top-blocks-induction-furnace-refractories-blocks-and-consumables",alt:"Furnace Top Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/TopCastBlocks.webp" },
        { name: "Rim Blocks", link: "rim-blocks-induction-furnace-refractories-blocks-and-consumables",alt:"Rim Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/RimBlocks.webp" },
        { name: "Pusher Blocks", link: "pusher-blocks-induction-furnace-refractories-blocks-and-consumables",alt:"Pusher Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/PusherBlocks.webp" },
        { name: "Spout Blocks", link: "spout-blocks-induction-furnace-refractories-blocks-and-consumables",alt:"Spout Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/SpoutBlocks.webp" },
        { name: "Coil Support Blocks", link: "coil-support-blocks-induction-furnace-refractories-blocks-and-consumables",alt:"Coil Support Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/CoilSupportBlocks.webp" },
        { name: "Coil Cement", link: "coil-cement-induction-furnace-refractories-blocks-and-consumables",alt:"Coil Cement for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/CoilCement.webp" },
        { name: "Coil Coating Compounds", link: "coil-coating-compounds-induction-furnace-refractories-blocks-and-consumables",alt:"Coil Coating Compounds for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/CoilCoatingCompounds.webp" },
        { name: "Furnace Lining Materials", link: "furnace-lining-materials-induction-furnace-refractories-blocks-and-consumables",alt:"Furnace Lining Materials for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/FurnaceLiningMaterials.webp" },
        { name: "Safety Lining Materials", link: "furnace-safety-lining-materials-induction-furnace-refractories-blocks-and-consumables",alt:"Furnace Safety Lining Materials for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/FurnaceSafetyLiningMaterials.webp" },
        { name: "Repair Mixes", link: "furnace-repair-mixes-induction-furnace-refractories-blocks-and-consumables",alt:"Repair Mixes for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/FurnaceRepairMixes.webp" }
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
          img.src = prod.image || "assets/images/resources/FurnaceProducts.webp";
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
