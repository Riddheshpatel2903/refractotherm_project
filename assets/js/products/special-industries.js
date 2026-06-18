document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Calcination Kiln Refractories", link: "calcination-kiln-refractories-special-industry-refractories", alt: "Calcinated Kiln Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/calcinationkilnrefractories.webp" },
    { name: "Lime Kiln Refractories", link: "lime-kiln-refractories-special-industry-refractories", alt: "Lime Kiln Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/limekilnrefractories.webp" },
    { name: "Cement Kiln Refractories", link: "cement-kiln-refractories-special-industry-refractories", alt: "Cement Kiln Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/cementkilnrefractories.webp" },
    { name: "Petrochemical Heater Refractories", link: "petrochemical-heater-refractories-special-industry-refractories", alt: "Petrochemical Heater Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/petrochemicalheaterrefractories.webp" },
    { name: "Aluminium Furnace Refractories", link: "aluminium-furnace-refractories-special-industry-refractories", alt: "Aluminium Furnace Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/aluminiumfurnacerefractories.webp" },
    { name: "Copper & Non-Ferrous Furnace Refractories", link: "copper-and-non-ferrous-furnace-refractories-special-industry-refractories", alt: "Copper & Non-Ferrous Furnace Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/copper&non-ferrousfurnacerefractories.webp" },
    { name: "Incinerator Refractories", link: "incinerator-refractories-special-industry-refractories", alt: "Incinerator Refractories for Special Industry Refractories", image: "assets/images/resources/products/spacial_industries/incineratorrefractories.webp" }
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
      img.src = prod.image || "assets/images/resources/furnaceproducts.webp";
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
