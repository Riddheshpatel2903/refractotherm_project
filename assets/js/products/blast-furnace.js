document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Blast Furnace Trough Castables", link: "blast-furnace-trough-castables-blast-furnace-and-dri-refractories", alt: "Blast Furnace Trough Castables for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/blastfurnacetroughcastables.webp" },
    { name: "Runner Castables", link: "runner-castables-blast-furnace-and-dri-refractories", alt: "Runner Castables for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/runnercastables.webp" },
    { name: "Iron Runner Bricks", link: "iron-runner-bricks-blast-furnace-and-dri-refractories", alt: "Iron Runner Bricks for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/ironrunnerbricks.webp" },
    { name: "Tap Hole Clay", link: "tap-hole-clay-blast-furnace-and-dri-refractories", alt: "Tap Hole Clay for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/tapholeclay.webp" },
    { name: "Mud Gun Mass", link: "mud-gun-mass-blast-furnace-and-dri-refractories", alt: "Mud Gun Mass for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/mudgunmass.webp" },
    { name: "Coke Oven Refractories", link: "coke-oven-refractories-blast-furnace-and-dri-refractories", alt: "Coke Oven Refractories for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/cokeovenrefractories.webp" },
    { name: "Hot Blast Stove Bricks", link: "hot-blast-stove-bricks-blast-furnace-and-dri-refractories", alt: "Hot Blast Stove Bricks for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/hotblaststovebricks.webp" },
    { name: "Rotary Kiln Refractory Bricks", link: "rotary-kiln-refractory-bricks-blast-furnace-and-dri-refractories", alt: "Rotary Kiln Refractory Bricks for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/rotarykilnrefractorybricks.webp" },
    { name: "Pellet Plant Refractories", link: "pellet-plant-refractories-blast-furnace-and-dri-refractories", alt: "Pellet Plant Refractories for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/pelletplantrefractories.webp" },
    { name: "Kiln Lining Materials", link: "kiln-lining-materials-blast-furnace-and-dri-refractories", alt: "Kiln Lining Materials for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/kilnliningmaterials.webp" },
    { name: "Slag Zone Refractories", link: "slag-zone-refractories-blast-furnace-and-dri-refractories", alt: "Slag Zone Refractories for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/slagzonerefractories.webp" },
    { name: "Cooler Castables", link: "cooler-castables-blast-furnace-and-dri-refractories", alt: "Cooler Castables for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/coolercastables.webp" },
    { name: "Kiln Burner Pipes", link: "kiln-burner-pipes-blast-furnace-and-dri-refractories", alt: "Kiln Burner Pipes for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/kilnburnerpipes.webp" },
    { name: "Launder Refractories", link: "launder-refractories-blast-furnace-and-dri-refractories", alt: "Launder Refractories for Blast Furnace Refractories", image: "assets/images/resources/products/blast_furnace/launderrefractories.webp" }
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
