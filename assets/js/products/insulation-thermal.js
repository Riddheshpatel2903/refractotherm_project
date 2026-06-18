document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Ceramic Fiber Blanket", link: "ceramic-fiber-blanket-insulation-and-thermal-products", alt: "Ceramic Fiber Blanket for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/ceramicfiberblanket.webp" },
    { name: "Ceramic Fiber Board", link: "ceramic-fiber-board-insulation-and-thermal-products", alt: "Ceramic Fiber Board for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/ceramicfiberboard.webp" },
    { name: "Ceramic Fiber Module", link: "ceramic-fiber-module-insulation-and-thermal-products", alt: "Ceramic Fiber Module for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/ceramicfibermodule.webp" },
    { name: "Ceramic Fiber Rope", link: "ceramic-fiber-rope-insulation-and-thermal-products", alt: "Ceramic Fiber Rope for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/ceramicfiberrope.webp" },
    { name: "Calcium Silicate Boards", link: "calcium-silicate-boards-insulation-and-thermal-products", alt: "Calcium Silicate Boards for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/calciumsilicateboards.webp" },
    { name: "Insulation Bricks", link: "insulation-bricks-insulation-and-thermal-products", alt: "Insulation Bricks for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/insulationbricks.webp" },
    { name: "High Temperature Sealants", link: "high-temperature-sealants-insulation-and-thermal-products", alt: "High Temperature Sealants for Insulation and Thermal Products", image: "assets/images/resources/products/insulation/hightemperaturesealants.webp" }
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
      img.src = prod.image || "assets/images/resources/thermalinsulation.webp";
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
