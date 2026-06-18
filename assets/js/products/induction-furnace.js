document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Furnace Top Blocks", link: "furnace-top-blocks-induction-furnace-refractories-blocks-and-consumables", alt: "Furnace Top Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/topcastblocks.webp" },
    { name: "Furnace Bottom Blocks", link: "furnace-bottom-blocks-induction-furnace-refractories-blocks-and-consumables", alt: "Furnace Bottom Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/furnacebottomblocks.webp" },
    { name: "Roof Castables", link: "furnace-roof-castables-induction-furnace-refractories-blocks-and-consumables", alt: "Furnace Roof Castables for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/furnaceroofcastables.webp" },
    { name: "Rim Blocks", link: "rim-blocks-induction-furnace-refractories-blocks-and-consumables", alt: "Rim Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/rimblocks.webp" },
    { name: "Pusher Blocks", link: "pusher-blocks-induction-furnace-refractories-blocks-and-consumables", alt: "Pusher Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/pusherblocks.webp" },
    { name: "Spout Blocks", link: "spout-blocks-induction-furnace-refractories-blocks-and-consumables", alt: "Spout Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/spoutblocks.webp" },
    { name: "Coil Support Blocks", link: "coil-support-blocks-induction-furnace-refractories-blocks-and-consumables", alt: "Coil Support Blocks for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/coilsupportblocks.webp" },
    { name: "Coil Coating Compounds", link: "coil-coating-compounds-induction-furnace-refractories-blocks-and-consumables", alt: "Coil Coating Compounds for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/coilcoatingcompounds.webp" },
    { name: "Furnace Lining Materials", link: "furnace-lining-materials-induction-furnace-refractories-blocks-and-consumables", alt: "Furnace Lining Materials for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/furnaceliningmaterials.webp" },
    { name: "Safety Lining Materials", link: "safety-lining-materials-induction-furnace-refractories-blocks-and-consumables", alt: "Safety Lining Materials for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/furnacesafetyliningmaterials.webp" },
    { name: "Repair Mixes", link: "furnace-repair-mixes-induction-furnace-refractories-blocks-and-consumables", alt: "Repair Mixes for Induction Furnace Refractories blocks and Consumables", image: "assets/images/resources/products/induction_furnace/furnacerepairmixes.webp" }
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
      img.src = prod.image || "assets/images/resources/products/inductionmeltingfurnaces.webp";
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
