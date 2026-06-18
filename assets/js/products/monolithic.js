document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Conventional Castables", link: "conventional-castables-monolithic-refractories-and-castables", alt: "Conventional Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/conventionalcastables.webp" },
    { name: "Low Cement Castables (LCC)", link: "low-cement-castables-lcc-monolithic-refactories-and-castables", alt: "Low Cement Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/lowcementcastables(lcc).webp" },
    { name: "Ultra Low Cement Castables (ULCC)", link: "ultra-low-cement-castables-ulcc-monolithic-refractories-and-castables", alt: "Ultra Low Cement Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/ultralowcementcastables(ulcc).webp" },
    { name: "Nano Bonded Castables", link: "nano-bonded-castables-monolithic-refractories-and-castables", alt: "Nano Bonded Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/nanobondedcastables.webp" },
    { name: "Self Flow Castables", link: "self-flow-castables-monolithic-refractories-product", alt: "Self Flow Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/selfflowcastables.webp" },
    { name: "Alumina Spinel Castables", link: "alumina-spinel-castables-monolithic-refractories-and-castables", alt: "Alumina Spinel Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/aluminaspinelcastables.webp" },
    { name: "Insulating Castables", link: "insulating-castables-monolithic-refractories-and-castables", alt: "Insulating Castables For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/insulatingcastables.webp" },
    { name: "Refractory Mortars", link: "refractory-mortars-monolithic-refractories-and-castables", alt: "Refractory Mortars For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/refractorymortars.webp" },
    { name: "Silica Ramming Mass", link: "silica-ramming-mass-monolithic-refractories-and-castables", alt: "Silica Ramming Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/silicarammingmass.webp" },
    { name: "Acidic Ramming Mass", link: "acidic-ramming-mass-monolithic-refractories-and-castables", alt: "Acidic Ramming Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/acidicrammingmass.webp" },
    { name: "Basic Ramming Mass", link: "basic-ramming-mass-monolithic-refractories-and-castables", alt: "Basic Ramming Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/basicrammingmass.webp" },
    { name: "Neutral Ramming Mass", link: "neutral-ramming-mass-monolithic-refractories-and-castables", alt: "Neutral Ramming Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/neutralrammingmass.webp" },
    { name: "Dry Vibrating Mass", link: "dry-vibrating-mass-monolithic-refractories-and-castables", alt: "Dry Vibrating Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/dryvibratingmass.webp" },
    { name: "Gunning Mass", link: "gunning-mass-monolithic-refractories-and-castables", alt: "Gunning Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/gunningmass.webp" },
    { name: "Spray Mass", link: "spray-mass-monolithic-refractories-and-castables", alt: "Spray Mass For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/spraymass.webp" },
    { name: "Hot Repair Mixes", link: "hot-repair-mixes-monolithic-refractories-and-castables", alt: "Hot Repair Mixes For Monolithic Refractories and Castables", image: "assets/images/resources/products/monolithic/hotrepairmixes.webp" }
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
