document.addEventListener("DOMContentLoaded", function () {
  const allCategoryProducts = [
    { name: "Ladle Slide Gate Refractory Plates", link: "slide-gate-plates-flow-control-and-ladle-slide-gate-systems", alt: "Ladle Slide Gate Refractory Plates For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/slidegateplates.webp" },
    { name: "Alumina Carbon Slide Gate Plates", link: "slide-gate-plates-flow-control-and-ladle-slide-gate-systems", alt: "Alumina Carbon Slide Gate Plates For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/slidegateplates.webp" },
    { name: "Magnesia Carbon Slide Gate Plates", link: "slide-gate-plates-flow-control-and-ladle-slide-gate-systems", alt: "Magnesia Carbon Slide Gate Plates For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/slidegateplates.webp" },
    { name: "Slide Gate Mechanisms", link: "slide-gate-mechanisms-flow-control-and-ladle-slide-gate-systems", alt: "Slide Gate Mechanisms For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/slidegatemechanisms.webp" },
    { name: "Collector Nozzles", link: "collector-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Collector Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/collectornozzles.webp" },
    { name: "Ladle Nozzles", link: "ladle-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Ladle Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/ladlenozzles.webp" },
    { name: "Tundish Nozzles", link: "tundish-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Tundish Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/tundishnozzles.webp" },
    { name: "Metering Nozzles", link: "metering-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Metering Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/meteringnozzles.webp" },
    { name: "Upper Nozzles", link: "upper-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Upper Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/uppernozzles.webp" },
    { name: "Lower Nozzles", link: "lower-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Lower Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/lowernozzles.webp" },
    { name: "Zirconia Nozzles", link: "zirconia-nozzles-flow-control-and-ladle-slide-gate-systems", alt: "Zirconia Nozzles For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/zirconianozzles.webp" },
    { name: "Porous Plugs", link: "porous-plugs-flow-control-and-ladle-slide-gate-systems", alt: "Porous Plugs For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/porousplugs.webp" },
    { name: "Bottom Purging Systems", link: "bottom-purging-bp-sets-flow-control-and-ladle-slide-gate-systems", alt: "Bottom Purging Systems For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/bottompurging(bp)sets.webp" },
    { name: "Well Blocks", link: "well-blocks-flow-control-and-ladle-slide-gate-systems", alt: "Well Blocks For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/wellblocks.webp" },
    { name: "Seating Blocks", link: "seating-blocks-flow-control-and-ladle-slide-gate-systems", alt: "Seating Blocks For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/seatingblocks.webp" },
    { name: "Flow Control Systems", link: "flow-control-systems-flow-control-and-ladle-slide-gate-systems", alt: "Flow Control Systems For Flow Control And Slide Gate Systems", image: "assets/images/resources/products/flowcontrol/flowcontrolsystems.webp" }
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
      img.src = prod.image || "assets/images/resources/products/flowcontrolsystems.webp";
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
