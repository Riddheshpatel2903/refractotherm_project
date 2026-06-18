document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "High Alumina Bricks", link: "high-alumina-bricks-pre-cast-shapes-and-refractory-bricks", alt: "High Alumina Bricks For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/highaluminabricks.webp" },
    { name: "Fire Clay Bricks", link: "fire-clay-bricks-pre-cast-shapes-and-refractory-bricks", alt: "Fire Clay Bricks For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/fireclaybricks.webp" },
    { name: "Acid Resistant Bricks", link: "acid-resistant-bricks-pre-cast-shapes-and-refractory-bricks", alt: "Acid Resistant Bricks For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/acidresistantbricks.webp" },
    { name: "Silicon Carbide Products", link: "silicon-carbide-products-pre-cast-shapes-and-refractory-bricks", alt: "Silicon Carbide Products For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/siliconcarbideproducts.webp" },
    { name: "Ceramic Anchors", link: "ceramic-anchors-ss304-ss310-pre-cast-shapes-and-refractory-bricks", alt: "Ceramic Anchors For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/ceramicanchors.webp" },
    { name: "Customized Refractory Shapes", link: "customized-refractory-shapes-pre-cast-shapes-and-refractory-bricks", alt: "Customized Refractory Shapes For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/customizedrefractoryshapes.webp" },
    { name: "Heat Resistant Tiles", link: "heat-resistant-tiles-pre-cast-shapes-and-refractory-bricks", alt: "Heat Resistant Tiles For Precast Shapes and Refractory Bricks", image: "assets/images/resources/products/precast_shape/heatresistanttiles.webp" }
  ];

  const wrappers = document.querySelectorAll(".custom-carousel-wrapper");

  wrappers.forEach(wrapper => {
    const carousel = wrapper.querySelector(".custom-carousel");
    const prevBtn = wrapper.querySelector(".prev-btn");
    const nextBtn = wrapper.querySelector(".next-btn");

    let currentIndex = 0;
    const total = allCategoryProducts.length;
    const cardElements = [];

    allCategoryProducts.forEach((prod) => {
      const a = document.createElement("a");
      a.href = prod.link;
      a.className = "carousel-item";

      const img = document.createElement("img");
      img.src = prod.image || "assets/images/resources/monolithic.webp";
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
        if (offset < 0) offset += total;
        if (offset > Math.floor(total / 2)) offset -= total;

        const absOffset = Math.abs(offset);
        let translateX = 0, scale = 1, opacity = 1, zIndex = 10;

        if (absOffset === 0) { scale = 1.1; opacity = 1; zIndex = 10; translateX = -50; }
        else if (absOffset === 1) { scale = 0.85; opacity = 0.6; zIndex = 5; translateX = -50 + (Math.sign(offset) * 115); }
        else if (absOffset === 2) { scale = 0.7; opacity = 0.3; zIndex = 4; translateX = -50 + (Math.sign(offset) * 190); }
        else { scale = 0.5; opacity = 0; zIndex = 1; translateX = -50 + (Math.sign(offset) * 250); }

        card.style.transform = "translateX(" + translateX + "%) scale(" + scale + ")";
        card.style.opacity = opacity;
        card.style.zIndex = zIndex;
        card.style.pointerEvents = absOffset === 0 ? "auto" : "none";
      });
    }

    prevBtn.addEventListener("click", () => { currentIndex = (currentIndex - 1 + total) % total; updateCarousel(); });
    nextBtn.addEventListener("click", () => { currentIndex = (currentIndex + 1) % total; updateCarousel(); });

    updateCarousel();
  });
});
