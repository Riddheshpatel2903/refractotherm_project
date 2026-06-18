document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Magnesia Carbon Bricks", link: "magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Magnesia Carbon Bricks For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/magnesiacarbonbricks.webp" },
    { name: "Alumina Magnesia Carbon Bricks", link: "alumina-magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Alumina Magnesia Carbon Bricks For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/aluminamagnesiacarbonbricks.webp" },
    { name: "Slag Line Refractories", link: "slag-line-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Slag Line Refractories For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/slaglinerefractories.webp" },
    { name: "Ladle Castables", link: "ladle-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Ladle Castables For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/ladlecastables.webp" },
    { name: "Taphole Mass", link: "taphole-mass-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Taphole Mass For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/tapholemass.webp" },
    { name: "Burner Blocks", link: "burner-blocks-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Burner Blocks For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/burnerblocks.webp" },
    { name: "EBT Refractories", link: "ebt-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "EBT Refractories For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/ebtrefractories.webp" },
    { name: "Delta Castables", link: "delta-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Delta Castables For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/deltacastables.webp" },
    { name: "Refractory Gunning Mix", link: "refractory-gunning-mix-steelmaking-refractories-lrf-eaf-and-ladle-applications", alt: "Refractory Gunning Mix For Steelmaking Refractories LRF, EAF and Ladle Applications", image: "assets/images/resources/products/steelmaking/refractorygunningmix.webp" }
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
      img.src = prod.image || "assets/images/resources/products/steelmakingrefractories.webp";
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
