<?php
if (!isset($activePage)) {
  $activePage = '';
}
?>

<!-- PRELOADER OVERLAY -->


<div id="preloader" class="preloader">
  <div class="preloader-content">
    <img src="assets/images/resources/logo.webp" alt="Refractotherm Logo" class="preloader-logo" />
    <div class="preloader-spinner"></div>
  </div>
</div>



<!-- NAVBAR -->
<header class="nav" id="nav">
  <div class="nav__inner">
    <a href="home" class="brand">
      <img src="assets/images/resources/logo.webp" alt="Refractotherm Logo" class="" />
    </a>

    <nav class="nav__menu" id="navMenu">
      <a href="home" class="nav__link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">Home</a>
      <div class="nav__item drop-container">
        <a href="about" class="nav__link <?php echo ($activePage == 'about' || $activePage == 'global' || $activePage == 'group-companies' || $activePage == 'corporate-videos' || $activePage == 'testimonials' || $activePage == 'news-events') ? 'active' : ''; ?>">About Us <i class="fa-solid fa-chevron-down nav__chevron"></i></a>
        <div class="nav__dropdown">
          <a href="about" class="<?php echo ($activePage == 'about') ? 'active' : ''; ?>">About Us</a>
          <a href="global" class="<?php echo ($activePage == 'global') ? 'active' : ''; ?>">Global Presence</a>
          <a href="group-companies" class="<?php echo ($activePage == 'group-companies') ? 'active' : ''; ?>">Group
            Companies</a>
            <a href="corporate-videos" class="<?php echo ($activePage == 'corporate-videos') ? 'active' : ''; ?>">Corporate
              Videos</a>
              <a href="testimonials" class="<?php echo ($activePage == 'testimonials') ? 'active' : ''; ?>">Testimonials</a>
              <a href="news-events" class="<?php echo ($activePage == 'news-events') ? 'active' : ''; ?>">News and Events</a>
        </div>
      </div>
      <div class="nav__item has-mega">
        <a href="products" class="nav__link <?php echo ($activePage == 'products' || $activePage == 'product-details') ? 'active' : ''; ?>">Products <i class="fa-solid fa-chevron-down"></i></a>
        <div class="mega">
            <div class="mega__columns">
              <!-- Column 1 -->
              <div class="mega__column">

                <!-- MONOLITHIC REFRACTORIES -->
                <div class="mega__category">
                  <h4 class="mega__category-title">MONOLITHIC REFRACTORIES & CASTABLES</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="conventional-castables-monolithic-refractories-and-castables">Conventional
                        Castables</a>
                         <a href="nano-bonded-castables-monolithic-refractories-and-castables">Nano Bonded
                        Castables</a>
                      <a href="ultra-low-cement-castables-ulcc-monolithic-refractories-and-castables">Ultra Low
                        Cement
                        Castables (ULCC)</a>       
                       <a href="low-cement-castables-lcc-monolithic-refactories-and-castables">Low Cement
                        Castables
                        (LCC)</a>
                      <a href="self-flow-castables-monolithic-refractories-product">Self Flow Castables</a>
                      <a href="alumina-spinel-castables-monolithic-refractories-and-castables">Alumina Spinel
                        Castables</a>
                      <a href="insulating-castables-monolithic-refractories-and-castables">Insulating
                        Castables</a>
                      <!-- <a href="abrasion-resistant-castables-monolithic-refractories-and-castables">Abrasion
                        Resistant Castables</a>
                      <a href="alkali-resistant-castables-monolithic-refractories-and-castables">Alkali Resistant
                        Castables</a>
                      <a href="anti-coating-castables-monolithic-refractories-and-castables">Anti-Coating
                        Castables</a> <a href="acid-resistant-castables-monolithic-refractories-and-castables">Acid
                        Resistant
                        Castables</a> <a href="boiler-castables-monolithic-refractories-and-castables">Boiler
                        Castables</a>
                      <a href="kiln-castables-monolithic-refractories-and-castables">Kiln Castables</a>
                      <a href="cyclone-castables-monolithic-refractories-and-castables">Cyclone Castables</a>
                      <a href="burner-pipe-castables-monolithic-refractories-and-castables">Burner Pipe
                        Castables</a> -->
                         <a href="refractory-mortars-monolithic-refractories-and-castables">Refractory
                        Mortars</a> <a href="refractory-cements-monolithic-refractories-and-castables">Refractory
                        Cements</a>
                      <!-- <a href="acid-resistant-mortars-monolithic-refractories-and-castables">Acid Resistant
                        Mortars</a>  -->
                        <a href="silica-ramming-mass-monolithic-refractories-and-castables">Silica
                        Ramming Mass</a> 
                        <!-- <a
                        href="neutral-ramming-mass-monolithic-refractories-and-castables">Neutral Ramming Mass</a>
                      <a href="basic-ramming-mass-monolithic-refractories-and-castables">Basic Ramming Mass</a>
                      <a href="acidic-ramming-mass-monolithic-refractories-and-castables">Acidic Ramming Mass</a> -->
                      <a href="dry-vibrating-mass-monolithic-refractories-and-castables">Dry Vibrating Mass</a>
                      <!-- <a href="nozzle-filling-compound-nfc-monolithic-refractories-and-castables">Nozzle Filling
                        Compound (NFC)</a>
                         -->
                        <a href="gunning-mass-aod-refractories-argon-oxygen-decarburization">Gunning
                        Mass</a>
                      <a href="spray-mass-monolithic-refractories-and-castables">Spray Mass</a>

                      <!-- <a href="fettling-mass-monolithic-refractories-and-castables">Fettling Mass</a> -->

                      <!-- <a href="shotcreting-materials-monolithic-refractories-and-castables">Shotcreting
                        Materials</a> -->
                      <a href="hot-repair-mixes-monolithic-refractories-and-castables">Hot Repair Mixes</a>
                    </div>
                  </div>
                </div>

                <!-- FLOW CONTROL SYSTEMS -->
                <div class="mega__category">
                  <h4 class="mega__category-title">Flow Control & Ladle Slide Gate Systems</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="slide-gate-plates-flow-control-and-ladle-slide-gate-systems">Slide Gate Plates</a>
                      <!-- <a href="slide-gate-sand-flow-control-and-ladle-slide-gate-systems">Slide Gate Sand</a> -->
                      <a href="slide-gate-mechanisms-flow-control-and-ladle-slide-gate-systems">Slide Gate
                        Mechanisms</a> 
                        <a href="ladle-nozzles-flow-control-and-ladle-slide-gate-systems">Ladle
                        Nozzles</a>
                      <a href="tundish-nozzles-flow-control-and-ladle-slide-gate-systems">Tundish Nozzles</a>
                      <a href="metering-nozzles-flow-control-and-ladle-slide-gate-systems">Metering Nozzles</a>
                       <!-- <a
                        href="upper-nozzles-flow-control-and-ladle-slide-gate-systems">Upper Nozzles</a> -->

                      <!-- <a href="lower-nozzles-flow-control-and-ladle-slide-gate-systems">Lower Nozzles</a> -->

                      <!-- <a href="inner-nozzles-flow-control-and-ladle-slide-gate-systems">Inner Nozzles</a> -->
                      <!-- <a href="outer-nozzles-flow-control-and-ladle-slide-gate-systems">Outer Nozzles</a> -->

                      <!-- <a href="composite-nozzles-flow-control-and-ladle-slide-gate-systems">Composite Nozzles</a> -->
                      <a href="zirconia-nozzles-flow-control-and-ladle-slide-gate-systems">Zirconia Nozzles</a>

                      <!-- <a href="zirconia-inserts-flow-control-and-ladle-slide-gate-systems">Zirconia Inserts</a> -->
                      <!-- <a href="iso-pressed-nozzles-flow-control-and-ladle-slide-gate-systems">Iso-Pressed
                        Nozzles</a> -->
                      <a href="porous-plugs-flow-control-and-ladle-slide-gate-systems">Porous Plugs</a>
                      <a href="bottom-purging-bp-sets-flow-control-and-ladle-slide-gate-systems">Bottom Purging
                        (BP) Sets</a>
                      <!-- <a href="purging-plug-systems-flow-control-and-ladle-slide-gate-systems">Purging Plug
                        Systems</a>  -->
                        <a href="well-blocks-flow-control-and-ladle-slide-gate-systems">Well Blocks</a>
                      <a href="seating-blocks-flow-control-and-ladle-slide-gate-systems">Seating Blocks</a>
                      <!-- <a href="sen-seating-blocks-flow-control-and-ladle-slide-gate-systems">SEN Seating Blocks</a> -->
                      <a href="flow-control-systems-flow-control-and-ladle-slide-gate-systems">Flow Control
                        Systems</a>
                    </div>
                  </div>
                </div>

                <!-- CCM CONSUMABLES -->
                <div class="mega__category">
                  <h4 class="mega__category-title">Continuous Casting Machine (CCM) Consumables</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="monoblock-stoppers-continuous-casting-machine-ccm-consumables">Monoblock
                        Stoppers</a>
                      <a href="tundish-well-blocks-continuous-casting-machine-ccm-consumables">Tundish
                        Well Blocks</a>
                      <a href="ladle-to-tundish-shrouds-lts-continuous-casting-machine-ccm-consumables">Ladle
                        to Tundish Shrouds (LTS)</a> <a
                        href="submerged-entry-nozzles-sen-continuous-casting-machine-ccm-consumables">Submerged
                        Entry Nozzles (SEN)</a>
                      <!-- <a href="carbon-free-sen-continuous-casting-machine-ccm-consumables">Carbon Free SEN</a> -->
                      <!-- <a href="sen-well-blocks-continuous-casting-machine-ccm-consumables">SEN Well Blocks</a> -->

                      <!-- <a href="stopper-head-bricks-continuous-casting-machine-ccm-consumables">Stopper Head
                        Bricks</a> -->
                      <!-- <a href="graphite-stopper-rods-continuous-casting-machine-ccm-consumables">Graphite Stopper
                        Rods</a>  -->
                        

                      <!-- <a href="tundish-dam-and-weirs-continuous-casting-machine-ccm-consumables">Tundish Dam &
                        Weirs</a> -->
                      <a href="tundish-impact-pads-continuous-casting-machine-ccm-consumables">Tundish Impact
                        Pads</a>
                         <!-- <a
                        href="tundish-working-linings-continuous-casting-machine-ccm-consumables">Tundish Working
                        Linings</a> -->
                      <!-- <a href="tundish-spray-linings-continuous-casting-machine-ccm-consumables">Tundish Spray
                        Linings</a> -->
                      <!-- <a href="dry-tundish-powder-continuous-casting-machine-ccm-consumables">Dry Tundish</a> -->
                        <!-- <a href="preheated-tundish-liners-continuous-casting-machine-ccm-consumables">Preheated
                          Tundish Liners</a> -->

                        <a href="tundish-boards-continuous-casting-machine-ccm-consumables">Tundish Boards</a>
                        <!-- <a href="preformed-tundish-boards-continuous-casting-machine-ccm-consumables">Preformed
                          Tundish Boards</a> -->
                        <!-- <a href="insulating-tundish-boards-continuous-casting-machine-ccm-consumables">Insulating
                          Tundish Boards</a> -->
                        <a href="ceramic-foam-filters-continuous-casting-machine-ccm-consumables">Ceramic Foam
                          Filters</a>
                        <a href="casting-powder-mould-powder-continuous-casting-machine-ccm-consumables">Casting
                          Powder / Mould Powder</a>
                           <!-- <a
                          href="lcc-powder-continuous-casting-machine-ccm-consumables">LCC Powder</a> -->
                        <!-- <a href="tcc-powder-continuous-casting-machine-ccm-consumables">TCC Powder</a> -->

                        <!-- <a href="radex-powder-continuous-casting-machine-ccm-consumables">Radex Powder</a> -->
                        <a href="radex-tubes-continuous-casting-machine-ccm-consumables">Radex Tubes</a>
                        <a href="tundish-covering-compounds-continuous-casting-machine-ccm-consumables">Tundish
                          Covering Compounds</a> 
                          <!-- <a
                          href="ladle-covering-compounds-continuous-casting-machine-ccm-consumables">Ladle
                          Covering
                          Compounds</a> -->
                        <!-- <a href="cnc-nozzles-continuous-casting-machine-ccm-consumables">CNC Nozzles</a> -->
                        <!-- <a href="fnc-nozzles-continuous-casting-machine-ccm-consumables">FNC Nozzles</a> -->
                        <!-- <a href="cnm-nozzles-continuous-casting-machine-ccm-consumables">CNM Nozzles</a> -->
                        <!-- <a href="ck4-nozzles-continuous-casting-machine-ccm-consumables">CK4 Nozzles</a> -->
                        <!-- <a href="ccm-refractory-consumables-and-spares-continuous-casting-machine-ccm-consumables">CCM
                          Refractory Consumables & Spares</a> -->
                    </div>
                  </div>
                </div>

                <div class="mega__category">
                  <h4 class="mega__category-title">SPECIAL INDUSTRY REFRACTORIES</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="calcination-kiln-refractories-special-industry-refractories">Calcination Kiln
                        Refractories</a>
                      <a href="lime-kiln-refractories-special-industry-refractories">Lime Kiln Refractories</a>
                      <a href="cement-kiln-refractories-special-industry-refractories">Cement Kiln Refractories</a>
                      <a href="petrochemical-heater-refractories-special-industry-refractories">Petrochemical
                        Heater Refractories</a>

                      <a href="aluminium-furnace-refractories-special-industry-refractories">Aluminium Furnace
                        Refractories</a>
                      <a href="copper-and-non-ferrous-furnace-refractories-special-industry-refractories">Copper &
                        <a href="incinerator-refractories-special-industry-refractories">Incinerator
                          Refractories</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Column 2 -->
              <div class="mega__column">

                <!-- FURNACE PRODUCTS -->
                <div class="mega__category">
                  <h4 class="mega__category-title">Induction Furnace Refractories, Blocks & Consumables</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="furnace-bottom-blocks-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Bottom Blocks</a>
                         <!-- <a
                        href="furnace-roof-castables-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Roof Castables</a> -->

                      <a href="furnace-top-blocks-induction-furnace-refractories-blocks-and-consumables">Furnace Top
                        Blocks</a>
                     <!--  <a href="bottom-cast-blocks-induction-furnace-refractories-blocks-and-consumables">Bottom
                        Cast Blocks</a> -->
                      <a href="rim-blocks-induction-furnace-refractories-blocks-and-consumables">Rim Blocks</a>
                      <a href="pusher-blocks-induction-furnace-refractories-blocks-and-consumables">Pusher
                        Blocks</a> 
                        <a
                        href="spout-blocks-induction-furnace-refractories-blocks-and-consumables">Spout Blocks</a>
                      <!-- <a href="lip-pouring-spouts-induction-furnace-refractories-blocks-and-consumables">Lip
                        Pouring Spouts</a> -->
                      <!-- <a href="pouring-launders-induction-furnace-refractories-blocks-and-consumables">Pouring
                        Launders</a> -->
                      <!-- <a href="furnace-lip-blocks-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Lip Blocks</a> -->
<!-- 
                      <a href="slag-door-blocks-induction-furnace-refractories-blocks-and-consumables">Slag Door
                        Blocks</a> -->

                      <a href="coil-support-blocks-induction-furnace-refractories-blocks-and-consumables">Coil
                        Support Blocks</a>
                      <!-- <a href="coil-grouting-blocks-induction-furnace-refractories-blocks-and-consumables">Coil
                        Grouting Blocks</a> -->

                      <!-- <a href="furnace-bottom-nozzle-blocks-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Bottom Nozzle Blocks</a> -->

                      <!-- <a href="alumina-crucibles-induction-furnace-refractories-blocks-and-consumables">Alumina
                        Crucibles</a> -->
                      <!-- <a href="graphite-crucibles-induction-furnace-refractories-blocks-and-consumables">Graphite
                        Crucibles</a> -->
                      <a href="coil-cement-induction-furnace-refractories-blocks-and-consumables">Coil Cement</a>
                      <a href="coil-coating-compounds-induction-furnace-refractories-blocks-and-consumables">Coil
                        Coating Compounds</a>
                      <!-- <a href="rr-coil-coat-induction-furnace-refractories-blocks-and-consumables">RR Coil Coat</a> -->
                      <!-- <a href="refractory-sleeves-induction-furnace-refractories-blocks-and-consumables">Refractory
                        Sleeves</a> -->
                      <a href="furnace-lining-materials-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Lining Materials</a>
                      <a
                        href="furnace-safety-lining-materials-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Safety Lining Materials</a>
                      <!-- <a href="backup-lining-materials-induction-furnace-refractories-blocks-and-consumables">Backup
                        Lining Materials</a> -->
                      <a href="furnace-repair-mixes-induction-furnace-refractories-blocks-and-consumables">Furnace
                        Repair Mixes</a>
                    </div>
                  </div>
                </div>


                <!-- STEELMAKING REFRACTORIES -->
                <div class="mega__category">
                  <h4 class="mega__category-title">Steelmaking Refractories (LRF, EAF & Ladle Applications)</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="magnesia-carbon-bricks-aod-refractories-argon-oxygen-decarburization">Magnesia
                        Carbon Bricks</a>
                      
                      <!-- <a href="magnesia-spinel-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications">Magnesia
                        Spinel Bricks</a> -->
                      <a href="slag-line-refractories-aod-refractories-argon-oxygen-decarburization">Slag
                        Line Refractories</a>
                      <a href="ladle-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications">Ladle
                        Castables</a>
                      <!-- <a href="ladle-insulation-materials-steelmaking-refractories-lrf-eaf-and-ladle-applications">Ladle
                        Insulation Materials</a> -->
                      <!-- <a href="taphole-sleeves-steelmaking-refractories-lrf-eaf-and-ladle-applications">Taphole
                        Sleeves</a> -->
                      <a href="taphole-mass-steelmaking-refractories-lrf-eaf-and-ladle-applications">Taphole
                        Mass</a>
                      <!-- <a href="slag-conditioner-steelmaking-refractories-lrf-eaf-and-ladle-applications">Slag
                        Conditioner</a> -->
                      <!-- <a href="slag-splashing-materials-steelmaking-refractories-lrf-eaf-and-ladle-applications">Slag
                        Splashing Materials</a> -->
                      <!-- <a href="eaf-roof-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications">EAF
                        Roof Refractories</a> -->
                      <!-- <a href="eaf-side-wall-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications">EAF
                        Side Wall Bricks</a> -->
                      <a href="ebt-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications">EBT
                        Refractories</a>
                      <a href="delta-sections-steelmaking-refractories-lrf-eaf-and-ladle-applications">Delta
                        Sections</a>
                      <!-- <a href="delta-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications">Delta
                        Castables</a> -->
                      <a href="burner-blocks-aod-refractories-argon-oxygen-decarburization">Burner
                        Blocks</a>
                      <!-- <a href="ebt-filler-sand-steelmaking-refractories-lrf-eaf-and-ladle-applications">EBT Filler
                        Sand</a> -->
                      <a href="refractory-gunning-mix-steelmaking-refractories-lrf-eaf-and-ladle-applications">Refractory
                        Gunning Mix</a>
                        <a
                        href="alumina-magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications">Alumina
                        Magnesia Carbon Bricks</a>
                    </div>
                  </div>
                </div>

                <!-- THERMAL INSULATION -->
                <div class="mega__category">
                  <h4 class="mega__category-title">AOD Refractories (Argon Oxygen Decarburization)</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="aod-converter-bricks-aod-refractories-argon-oxygen-decarburization">AOD Converter
                        Bricks</a>
                      <a href="magnesia-carbon-bricks-aod-refractories-argon-oxygen-decarburization">Magnesia
                        Carbon Bricks</a>
                      <a href="aod-tuyere-bricks-aod-refractories-argon-oxygen-decarburization">AOD Tuyere
                        Bricks</a>
                      <a href="burner-blocks-aod-refractories-argon-oxygen-decarburization">Burner Blocks</a>
                      <a href="slag-line-refractories-aod-refractories-argon-oxygen-decarburization">Slag Line
                        Refractories</a>
                      <a href="safety-lining-materials-aod-refractories-argon-oxygen-decarburization">Safety Lining
                        Materials</a>
                      <a href="refractory-castables-aod-refractories-argon-oxygen-decarburization">Refractory
                        Castables</a>
                      <a href="gunning-mass-aod-refractories-argon-oxygen-decarburization">Gunning Mass</a>
                      <a href="repair-mixes-aod-refractories-argon-oxygen-decarburization">Repair Mixes</a>
                      <a href="purging-systems-aod-refractories-argon-oxygen-decarburization">Purging Systems</a>
                      <a href="taphole-refractories-aod-refractories-argon-oxygen-decarburization">Taphole
                        Refractories</a>
                      <a href="backup-insulation-materials-aod-refractories-argon-oxygen-decarburization">Backup
                        Insulation Materials</a>
                    </div>
                  </div>
                </div>


                <!-- THERMAL INSULATION -->
                <div class="mega__category">
                  <h4 class="mega__category-title">Blast Furnace & DRI Refractories</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="runner-castables-blast-furnace-and-dri-refractories">Runner Castables</a>
                      <a href="iron-runner-bricks-blast-furnace-and-dri-refractories">Iron Runner Bricks</a>
                      <a href="tap-hole-clay-blast-furnace-and-dri-refractories">Tap Hole Clay</a>
                      <a href="mud-gun-mass-blast-furnace-and-dri-refractories">Mud Gun Mass</a>
                      <a href="coke-oven-refractories-blast-furnace-and-dri-refractories">Coke Oven
                        Refractories</a>
                      <a href="hot-blast-stove-bricks-blast-furnace-and-dri-refractories">Hot Blast Stove
                        Bricks</a>
                      <a href="rotary-kiln-refractory-bricks-blast-furnace-and-dri-refractories">Rotary Kiln
                        Refractory Bricks</a>
                      <a href="pellet-plant-refractories-blast-furnace-and-dri-refractories">Pellet Plant
                        Refractories</a>
                      <a href="kiln-lining-materials-blast-furnace-and-dri-refractories">Kiln Lining Materials</a>
                      <a href="slag-zone-refractories-blast-furnace-and-dri-refractories">Slag Zone
                        Refractories</a>
                      <a href="cooler-castables-blast-furnace-and-dri-refractories">Cooler Castables</a>
                      <a href="kiln-burner-pipes-blast-furnace-and-dri-refractories">Kiln Burner Pipes</a>
                      <a href="launder-refractories-blast-furnace-and-dri-refractories">Launder Refractories</a>
                      <a href="blast-furnace-trough-castables-blast-furnace-and-dri-refractories">Blast Furnace
                        Trough Castables</a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="mega__column">
                <div class="mega__category">
                  <h4 class="mega__category-title">PRE-CAST SHAPES & REFRACTORY BRICKS</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <!-- <a href="pre-cast-pre-fired-blocks-pre-cast-shapes-and-refractory-bricks">Pre-Cast Pre-Fired
                        Blocks</a> -->
                      <!-- <a href="walking-beam-furnace-blocks-pre-cast-shapes-and-refractory-bricks">Walking Beam
                        Furnace Blocks</a> -->
                      <!-- <a href="walking-beam-support-blocks-pre-cast-shapes-and-refractory-bricks">Walking Beam
                        Support Blocks</a> -->
                      <!-- <a href="burner-blocks-for-oil-and-gas-furnaces-pre-cast-shapes-and-refractory-bricks">Burner
                        Blocks for Oil &amp; Gas Furnaces</a> -->
                      <a href="high-alumina-bricks-pre-cast-shapes-and-refractory-bricks">High Alumina Bricks</a>
                      <a href="fire-clay-bricks-pre-cast-shapes-and-refractory-bricks">Fire Clay Bricks</a>
                      <a href="acid-resistant-bricks-pre-cast-shapes-and-refractory-bricks">Acid Resistant
                        Bricks</a>
                      <!-- <a href="side-arch-bricks-pre-cast-shapes-and-refractory-bricks">Side Arch Bricks</a> -->
                      <!-- <a href="end-arch-bricks-pre-cast-shapes-and-refractory-bricks">End Arch Bricks</a> -->
                      <!-- <a href="hanger-bricks-pre-cast-shapes-and-refractory-bricks">Hanger Bricks</a> -->
                      <!-- <a href="shoulder-bricks-pre-cast-shapes-and-refractory-bricks">Shoulder Bricks</a> -->
                      <!-- <a href="sillimanite-bricks-pre-cast-shapes-and-refractory-bricks">Sillimanite Bricks</a> -->
                      <a href="silicon-carbide-products-pre-cast-shapes-and-refractory-bricks">Silicon Carbide
                        Products</a>
                      <!-- <a href="zircon-based-refractories-pre-cast-shapes-and-refractory-bricks">Zircon Based
                        Refractories</a> -->
                      <!-- <a href="isostatically-pressed-products-pre-cast-shapes-and-refractory-bricks">Isostatically
                        Pressed Products</a> -->
                      <a href="ceramic-anchors-ss304-ss310-pre-cast-shapes-and-refractory-bricks">Ceramic Anchors
                        (SS304 / SS310)</a>
                      <a href="customized-refractory-shapes-pre-cast-shapes-and-refractory-bricks">Customized
                        Refractory Shapes</a>
                      <a href="heat-resistant-tiles-pre-cast-shapes-and-refractory-bricks">Heat Resistant Tiles</a>
                    </div>
                  </div>
                </div>

                <div class="mega__category">
                  <h4 class="mega__category-title">FOUNDRY & METALLURGICAL CONSUMABLES</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="ceramic-pouring-cups-foundry-and-metallurgical-consumables">Ceramic Pouring Cups</a>
                      <!-- <a href="filter-sleeves-foundry-and-metallurgical-consumables">Filter Sleeves</a> -->
                      <a href="exothermic-sleeves-foundry-and-metallurgical-consumables">Exothermic Sleeves</a>
                      <!-- <a href="risering-compounds-foundry-and-metallurgical-consumables">Risering Compounds</a> -->
                      <a href="foundry-coatings-foundry-and-metallurgical-consumables">Foundry Coatings</a>
                      <a href="synthetic-slag-foundry-and-metallurgical-consumables">Synthetic Slag</a>
                      <!-- <a href="slag-coagulants-foundry-and-metallurgical-consumables">Slag Coagulants</a> -->
                      <a href="deoxidizers-foundry-and-metallurgical-consumables">Deoxidizers</a>
                      <a href="carbon-raisers-foundry-and-metallurgical-consumables">Carbon Raisers</a>
                      <a href="thermocouple-protection-tubes-foundry-and-metallurgical-consumables">Thermocouple
                        Protection Tubes</a>
                      <!-- <a href="exothermic-compounds-foundry-and-metallurgical-consumables">Exothermic Compounds</a> -->
                    </div>
                  </div>
                </div>

                <div class="mega__category">
                  <h4 class="mega__category-title">INSULATION & THERMAL PRODUCTS</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="ceramic-fiber-blanket-insulation-and-thermal-products">Ceramic Fiber Blanket</a>
                      <a href="ceramic-fiber-board-insulation-and-thermal-products">Ceramic Fiber Board</a>
                      <a href="ceramic-fiber-module-insulation-and-thermal-products">Ceramic Fiber Module</a>
                      <!-- <a href="ceramic-fiber-paper-insulation-and-thermal-products">Ceramic Fiber Paper</a> -->
                      <a href="ceramic-fiber-rope-insulation-and-thermal-products">Ceramic Fiber Rope</a>
                      <!-- <a href="mica-sheets-insulation-and-thermal-products">Mica Sheets</a> -->
                      <a href="calcium-silicate-boards-insulation-and-thermal-products">Calcium Silicate Boards</a>
                      <a href="insulation-bricks-insulation-and-thermal-products">Insulation Bricks</a>
                      <a href="high-temperature-sealants-insulation-and-thermal-products">High Temperature
                        Sealants</a>
                      <!-- <a href="thermal-insulation-materials-insulation-and-thermal-products">Thermal Insulation
                        Materials</a> -->
                    </div>
                  </div>
                </div>

                <div class="mega__category">
                  <h4 class="mega__category-title">SPECIAL STEEL & VACUUM REFRACTORIES</h4>
                  <div class="mega__subproducts">
                    <div class="mega__subproducts-inner">
                      <a href="vod-refractories-special-steel-and-vacuum-refractories">VOD Refractories</a>
                      <a href="vd-refractories-special-steel-and-vacuum-refractories">VD Refractories</a>
                      <a href="esr-furnace-refractories-special-steel-and-vacuum-refractories">ESR Furnace
                        Refractories</a>
                      <a href="special-steel-tundish-refractories-special-steel-and-vacuum-refractories">Special
                        Steel Tundish Refractories</a>
                      <a href="vacuum-degassing-refractories-special-steel-and-vacuum-refractories">Vacuum
                        Degassing Refractories</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <!-- CTA -->
          <div class="mega__cta">
            <div>
              <small>Technical Product Catalogue</small>
              <h5>
                Explore complete refractory and thermal engineering product
                solutions
              </h5>
            </div>

            <a href="#" class="btn--mega-download">
              Download Catalogue
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <a href="industries" class="nav__link <?php echo ($activePage == 'industries') ? 'active' : ''; ?>">Industries We Serve</a>
      <a href="services" class="nav__link <?php echo ($activePage == 'services' || $activePage == 'service-details') ? 'active' : ''; ?>">Technical Services</a>
      <a href="specialized-equipment" class="nav__link <?php echo ($activePage == 'specialized-equipment') ? 'active' : ''; ?>">Specialized Equipment</a>
    </nav>

    <div class="nav__actions">
      <a href="contact" class="btn btn--primary nav__cta <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
      <!-- <a href="quote" class="btn btn--primary nav__cta">Get a Quote</a> -->
      <button class="nav__burger" id="navBurger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>
<a href="https://wa.me/919924257892?text=Hello%20Refractotherm%20India,%20I%20am%20interested%20in%20your%20refractory%20and%20thermal%20solutions." target="_blank" class="chat-icon"><i class="fa fa-whatsapp"></i></a>
