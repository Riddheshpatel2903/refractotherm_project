<?php

/**
 * Refractotherm Router
 * A traditional, authentic routing system with all routes explicitly defined.
 */

// 1. Normalize Request URI
$base_path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$request = parse_url($request_uri, PHP_URL_PATH);
$uri = rtrim(str_replace($base_path, '', $request), '/');

// 2. Handle 301 Redirects for Legacy / Misspelled URLs
$redirects = [
    'global' => 'global-presence',
    'globle' => 'global-presence',
    'globle-presence' => 'global-presence',
    'globle-precence' => 'global-presence'
];

if (array_key_exists($uri, $redirects)) {
    header('Location: ' . $base_path . $redirects[$uri], true, 301);
    exit;
}

// 3. Define All Explicit Route Mappings
$routes = [
    // Core Aliases
    '' => 'home.php',
    'home' => 'home.php',
    'index' => 'home.php',
    // Explicit Page Mappings
    'about' => 'about.php',
    'acid-resistant-bricks-pre-cast-shapes-and-refractory-bricks' => 'acid-resistant-bricks-pre-cast-shapes-and-refractory-bricks.php',
    'acidic-ramming-mass-monolithic-refractories-and-castables' => 'acidic-ramming-mass-monolithic-refractories-and-castables.php',
    'alumina-magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'alumina-magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'alumina-spinel-castables-monolithic-refractories-and-castables' => 'alumina-spinel-castables-monolithic-refractories-and-castables.php',
    'aluminium-furnace-refractories-special-industry-refractories' => 'aluminium-furnace-refractories-special-industry-refractories.php',
    'aod-converter-bricks-aod-refractories-argon-oxygen-decarburization' => 'aod-converter-bricks-aod-refractories-argon-oxygen-decarburization.php',
    'aod-tuyere-bricks-aod-refractories-argon-oxygen-decarburization' => 'aod-tuyere-bricks-aod-refractories-argon-oxygen-decarburization.php',
    'aod-tuyeres' => 'aod-tuyeres.php',
    'backup-insulation-materials-aod-refractories-argon-oxygen-decarburization' => 'backup-insulation-materials-aod-refractories-argon-oxygen-decarburization.php',
    'basic-ramming-mass-monolithic-refractories-and-castables' => 'basic-ramming-mass-monolithic-refractories-and-castables.php',
    'blast-furnace-trough-castables-blast-furnace-and-dri-refractories' => 'blast-furnace-trough-castables-blast-furnace-and-dri-refractories.php',
    'bottom-purging-bp-sets-flow-control-and-ladle-slide-gate-systems' => 'bottom-purging-bp-sets-flow-control-and-ladle-slide-gate-systems.php',
    'burner-blocks-aod-refractories-argon-oxygen-decarburization' => 'burner-blocks-aod-refractories-argon-oxygen-decarburization.php',
    'burner-blocks-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'burner-blocks-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'calcination-kiln-refractories-special-industry-refractories' => 'calcination-kiln-refractories-special-industry-refractories.php',
    'calcium-silicate-boards-insulation-and-thermal-products' => 'calcium-silicate-boards-insulation-and-thermal-products.php',
    'carbon-raisers-foundry-and-metallurgical-consumables' => 'carbon-raisers-foundry-and-metallurgical-consumables.php',
    'careers' => 'careers.php',
    'casting-powder-continuous-casting-machine-ccm-consumables' => 'casting-powder-continuous-casting-machine-ccm-consumables.php',
    'casting-powder-mould-powder-continuous-casting-machine-ccm-consumables' => 'casting-powder-mould-powder-continuous-casting-machine-ccm-consumables.php',
    'cement-kiln-refractories-special-industry-refractories' => 'cement-kiln-refractories-special-industry-refractories.php',
    'ceramic-anchors-ss304-ss310-pre-cast-shapes-and-refractory-bricks' => 'ceramic-anchors-ss304-ss310-pre-cast-shapes-and-refractory-bricks.php',
    'ceramic-fiber-blanket-insulation-and-thermal-products' => 'ceramic-fiber-blanket-insulation-and-thermal-products.php',
    'ceramic-fiber-board-insulation-and-thermal-products' => 'ceramic-fiber-board-insulation-and-thermal-products.php',
    'ceramic-fiber-module-insulation-and-thermal-products' => 'ceramic-fiber-module-insulation-and-thermal-products.php',
    'ceramic-fiber-rope-insulation-and-thermal-products' => 'ceramic-fiber-rope-insulation-and-thermal-products.php',
    'ceramic-foam-filters-continuous-casting-machine-ccm-consumables' => 'ceramic-foam-filters-continuous-casting-machine-ccm-consumables.php',
    'ceramic-pouring-cups-foundry-and-metallurgical-consumables' => 'ceramic-pouring-cups-foundry-and-metallurgical-consumables.php',
    'coil-cement-induction-furnace-refractories-blocks-and-consumables' => 'coil-cement-induction-furnace-refractories-blocks-and-consumables.php',
    'coil-coating-compounds-induction-furnace-refractories-blocks-and-consumables' => 'coil-coating-compounds-induction-furnace-refractories-blocks-and-consumables.php',
    'coil-support-blocks-induction-furnace-refractories-blocks-and-consumables' => 'coil-support-blocks-induction-furnace-refractories-blocks-and-consumables.php',
    'coke-oven-refractories-blast-furnace-and-dri-refractories' => 'coke-oven-refractories-blast-furnace-and-dri-refractories.php',
    'collector-nozzles-flow-control-and-ladle-slide-gate-systems' => 'collector-nozzles-flow-control-and-ladle-slide-gate-systems.php',
    'contact' => 'contact.php',
    'conventional-castables-monolithic-refractories-and-castables' => 'conventional-castables-monolithic-refractories-and-castables.php',
    'cooler-castables-blast-furnace-and-dri-refractories' => 'cooler-castables-blast-furnace-and-dri-refractories.php',
    'copper-and-non-ferrous-furnace-refractories-special-industry-refractories' => 'copper-and-non-ferrous-furnace-refractories-special-industry-refractories.php',
    'corporate-videos' => 'corporate-videos.php',
    'customized-refractory-shapes-pre-cast-shapes-and-refractory-bricks' => 'customized-refractory-shapes-pre-cast-shapes-and-refractory-bricks.php',
    'delta-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'delta-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'delta-sections-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'delta-sections-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'deoxidizers-foundry-and-metallurgical-consumables' => 'deoxidizers-foundry-and-metallurgical-consumables.php',
    'dry-vibrating-mass-monolithic-refractories-and-castables' => 'dry-vibrating-mass-monolithic-refractories-and-castables.php',
    'ebt-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'ebt-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'esr-furnace-refractories-special-steel-and-vacuum-refractories' => 'esr-furnace-refractories-special-steel-and-vacuum-refractories.php',
    'excellence-in-engineering-award' => 'excellence-in-engineering-award.php',
    'exothermic-sleeves-foundry-and-metallurgical-consumables' => 'exothermic-sleeves-foundry-and-metallurgical-consumables.php',
    'fire-clay-bricks-pre-cast-shapes-and-refractory-bricks' => 'fire-clay-bricks-pre-cast-shapes-and-refractory-bricks.php',
    'flow-control-systems-flow-control-and-ladle-slide-gate-systems' => 'flow-control-systems-flow-control-and-ladle-slide-gate-systems.php',
    'foundry-coatings-foundry-and-metallurgical-consumables' => 'foundry-coatings-foundry-and-metallurgical-consumables.php',
    'furnace-bottom-blocks-induction-furnace-refractories-blocks-and-consumables' => 'furnace-bottom-blocks-induction-furnace-refractories-blocks-and-consumables.php',
    'furnace-lining-materials-induction-furnace-refractories-blocks-and-consumables' => 'furnace-lining-materials-induction-furnace-refractories-blocks-and-consumables.php',
    'furnace-repair-mixes-induction-furnace-refractories-blocks-and-consumables' => 'furnace-repair-mixes-induction-furnace-refractories-blocks-and-consumables.php',
    'furnace-roof-castables-induction-furnace-refractories-blocks-and-consumables' => 'furnace-roof-castables-induction-furnace-refractories-blocks-and-consumables.php',
    'safety-lining-materials-induction-furnace-refractories-blocks-and-consumables' => 'safety-lining-materials-induction-furnace-refractories-blocks-and-consumables.php',
    'furnace-top-blocks-induction-furnace-refractories-blocks-and-consumables' => 'furnace-top-blocks-induction-furnace-refractories-blocks-and-consumables.php',
    'global-presence' => 'global-presence.php',
    'global-steel-tech-expo-2026' => 'global-steel-tech-expo-2026.php',
    'group-companies' => 'group-companies.php',
    'gunning-mass-aod-refractories-argon-oxygen-decarburization' => 'gunning-mass-aod-refractories-argon-oxygen-decarburization.php',
    'gunning-mass-monolithic-refractories-and-castables' => 'gunning-mass-monolithic-refractories-and-castables.php',
    'heat-resistant-tiles-pre-cast-shapes-and-refractory-bricks' => 'heat-resistant-tiles-pre-cast-shapes-and-refractory-bricks.php',
    'high-alumina-bricks-pre-cast-shapes-and-refractory-bricks' => 'high-alumina-bricks-pre-cast-shapes-and-refractory-bricks.php',
    'high-temperature-sealants-insulation-and-thermal-products' => 'high-temperature-sealants-insulation-and-thermal-products.php',
    'home' => 'home.php',
    'hot-blast-stove-bricks-blast-furnace-and-dri-refractories' => 'hot-blast-stove-bricks-blast-furnace-and-dri-refractories.php',
    'hot-repair-mixes-monolithic-refractories-and-castables' => 'hot-repair-mixes-monolithic-refractories-and-castables.php',
    'incinerator-refractories-special-industry-refractories' => 'incinerator-refractories-special-industry-refractories.php',
    'industries-we-serve' => 'industries-we-serve.php',
    'insulating-castables-monolithic-refractories-and-castables' => 'insulating-castables-monolithic-refractories-and-castables.php',
    'insulation-bricks-insulation-and-thermal-products' => 'insulation-bricks-insulation-and-thermal-products.php',
    'interflow-ladle-slide-gate-systems' => 'interflow-ladle-slide-gate-systems.php',
    'iron-runner-bricks-blast-furnace-and-dri-refractories' => 'iron-runner-bricks-blast-furnace-and-dri-refractories.php',
    'kiln-burner-pipes-blast-furnace-and-dri-refractories' => 'kiln-burner-pipes-blast-furnace-and-dri-refractories.php',
    'kiln-lining-materials-blast-furnace-and-dri-refractories' => 'kiln-lining-materials-blast-furnace-and-dri-refractories.php',
    'ladle-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'ladle-castables-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'ladle-covering-compounds-continuous-casting-machine-ccm-consumables' => 'ladle-covering-compounds-continuous-casting-machine-ccm-consumables.php',
    'ladle-nozzles-flow-control-and-ladle-slide-gate-systems' => 'ladle-nozzles-flow-control-and-ladle-slide-gate-systems.php',
    'ladle-to-tundish-shrouds-lts-continuous-casting-machine-ccm-consumables' => 'ladle-to-tundish-shrouds-lts-continuous-casting-machine-ccm-consumables.php',
    'launder-refractories-blast-furnace-and-dri-refractories' => 'launder-refractories-blast-furnace-and-dri-refractories.php',
    'lime-kiln-refractories-special-industry-refractories' => 'lime-kiln-refractories-special-industry-refractories.php',
    'low-cement-castables-lcc-monolithic-refactories-and-castables' => 'low-cement-castables-lcc-monolithic-refactories-and-castables.php',
    'lower-nozzles-flow-control-and-ladle-slide-gate-systems' => 'lower-nozzles-flow-control-and-ladle-slide-gate-systems.php',
    'magnesia-carbon-bricks-aod-refractories-argon-oxygen-decarburization' => 'magnesia-carbon-bricks-aod-refractories-argon-oxygen-decarburization.php',
    'magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'magnesia-carbon-bricks-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'metering-nozzles-flow-control-and-ladle-slide-gate-systems' => 'metering-nozzles-flow-control-and-ladle-slide-gate-systems.php',
    'monoblock-stoppers-continuous-casting-machine-ccm-consumables' => 'monoblock-stoppers-continuous-casting-machine-ccm-consumables.php',
    'mould-powder-continuous-casting-machine-ccm-consumables' => 'mould-powder-continuous-casting-machine-ccm-consumables.php',
    'mud-gun-mass-blast-furnace-and-dri-refractories' => 'mud-gun-mass-blast-furnace-and-dri-refractories.php',
    'nano-bonded-castables-monolithic-refractories-and-castables' => 'nano-bonded-castables-monolithic-refractories-and-castables.php',
    'neutral-ramming-mass-monolithic-refractories-and-castables' => 'neutral-ramming-mass-monolithic-refractories-and-castables.php',
    'new-manufacturing-line-inauguration' => 'new-manufacturing-line-inauguration.php',
    'news-events' => 'news-events.php',
    'pellet-plant-refractories-blast-furnace-and-dri-refractories' => 'pellet-plant-refractories-blast-furnace-and-dri-refractories.php',
    'petrochemical-heater-refractories-special-industry-refractories' => 'petrochemical-heater-refractories-special-industry-refractories.php',
    'pneumatic-lining-vibrator' => 'pneumatic-lining-vibrator.php',
    'porous-plugs-flow-control-and-ladle-slide-gate-systems' => 'porous-plugs-flow-control-and-ladle-slide-gate-systems.php',
    'products' => 'products.php',
    'purging-systems-aod-refractories-argon-oxygen-decarburization' => 'purging-systems-aod-refractories-argon-oxygen-decarburization.php',
    'pusher-blocks-induction-furnace-refractories-blocks-and-consumables' => 'pusher-blocks-induction-furnace-refractories-blocks-and-consumables.php',
    'quote' => 'quote.php',
    'radex-tubes-continuous-casting-machine-ccm-consumables' => 'radex-tubes-continuous-casting-machine-ccm-consumables.php',
    'refractory-castables-aod-refractories-argon-oxygen-decarburization' => 'refractory-castables-aod-refractories-argon-oxygen-decarburization.php',
    'refractory-cements-monolithic-refractories-and-castables' => 'refractory-cements-monolithic-refractories-and-castables.php',
    'refractory-gunning-mix-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'refractory-gunning-mix-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'refractory-mortars-monolithic-refractories-and-castables' => 'refractory-mortars-monolithic-refractories-and-castables.php',
    'repair-mixes-aod-refractories-argon-oxygen-decarburization' => 'repair-mixes-aod-refractories-argon-oxygen-decarburization.php',
    'rim-blocks-induction-furnace-refractories-blocks-and-consumables' => 'rim-blocks-induction-furnace-refractories-blocks-and-consumables.php',
    'rotary-kiln-refractory-bricks-blast-furnace-and-dri-refractories' => 'rotary-kiln-refractory-bricks-blast-furnace-and-dri-refractories.php',
    'runner-castables-blast-furnace-and-dri-refractories' => 'runner-castables-blast-furnace-and-dri-refractories.php',
    'safety-lining-materials-aod-refractories-argon-oxygen-decarburization' => 'safety-lining-materials-aod-refractories-argon-oxygen-decarburization.php',
    'seating-blocks-flow-control-and-ladle-slide-gate-systems' => 'seating-blocks-flow-control-and-ladle-slide-gate-systems.php',
    'self-flow-castables-monolithic-refractories-product' => 'self-flow-castables-monolithic-refractories-product.php',
    'silica-ramming-mass-monolithic-refractories-and-castables' => 'silica-ramming-mass-monolithic-refractories-and-castables.php',
    'silicon-carbide-products-pre-cast-shapes-and-refractory-bricks' => 'silicon-carbide-products-pre-cast-shapes-and-refractory-bricks.php',
    'slag-line-refractories-aod-refractories-argon-oxygen-decarburization' => 'slag-line-refractories-aod-refractories-argon-oxygen-decarburization.php',
    'slag-line-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'slag-line-refractories-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'slag-zone-refractories-blast-furnace-and-dri-refractories' => 'slag-zone-refractories-blast-furnace-and-dri-refractories.php',
    'slide-gate-mechanisms-flow-control-and-ladle-slide-gate-systems' => 'slide-gate-mechanisms-flow-control-and-ladle-slide-gate-systems.php',
    'slide-gate-plates-flow-control-and-ladle-slide-gate-systems' => 'slide-gate-plates-flow-control-and-ladle-slide-gate-systems.php',
    'special-steel-tundish-refractories-special-steel-and-vacuum-refractories' => 'special-steel-tundish-refractories-special-steel-and-vacuum-refractories.php',
    'specialized-equipment' => 'specialized-equipment.php',
    'spout-blocks-induction-furnace-refractories-blocks-and-consumables' => 'spout-blocks-induction-furnace-refractories-blocks-and-consumables.php',
    'spray-mass-monolithic-refractories-and-castables' => 'spray-mass-monolithic-refractories-and-castables.php',
    'submerged-entry-nozzles-sen-continuous-casting-machine-ccm-consumables' => 'submerged-entry-nozzles-sen-continuous-casting-machine-ccm-consumables.php',
    'synthetic-slag-foundry-and-metallurgical-consumables' => 'synthetic-slag-foundry-and-metallurgical-consumables.php',
    'tap-hole-clay-blast-furnace-and-dri-refractories' => 'tap-hole-clay-blast-furnace-and-dri-refractories.php',
    'taphole-mass-steelmaking-refractories-lrf-eaf-and-ladle-applications' => 'taphole-mass-steelmaking-refractories-lrf-eaf-and-ladle-applications.php',
    'taphole-refractories-aod-refractories-argon-oxygen-decarburization' => 'taphole-refractories-aod-refractories-argon-oxygen-decarburization.php',
    'technical-services' => 'technical-services.php',
    'testimonials' => 'testimonials.php',
    'thermocouple-protection-tubes-foundry-and-metallurgical-consumables' => 'thermocouple-protection-tubes-foundry-and-metallurgical-consumables.php',
    'tundish-boards-continuous-casting-machine-ccm-consumables' => 'tundish-boards-continuous-casting-machine-ccm-consumables.php',
    'covering-compounds-continuous-casting-machine-ccm-consumables' => 'covering-compounds-continuous-casting-machine-ccm-consumables.php',
    'tundish-impact-pads-continuous-casting-machine-ccm-consumables' => 'tundish-impact-pads-continuous-casting-machine-ccm-consumables.php',
    'tundish-nozzles-flow-control-and-ladle-slide-gate-systems' => 'tundish-nozzles-flow-control-and-ladle-slide-gate-systems.php',
    'tundish-well-blocks-continuous-casting-machine-ccm-consumables' => 'tundish-well-blocks-continuous-casting-machine-ccm-consumables.php',
    'ultra-low-cement-castables-ulcc-monolithic-refractories-and-castables' => 'ultra-low-cement-castables-ulcc-monolithic-refractories-and-castables.php',
    'upper-nozzles-flow-control-and-ladle-slide-gate-systems' => 'upper-nozzles-flow-control-and-ladle-slide-gate-systems.php',
    'vacuum-degassing-refractories-special-steel-and-vacuum-refractories' => 'vacuum-degassing-refractories-special-steel-and-vacuum-refractories.php',
    'vd-refractories-special-steel-and-vacuum-refractories' => 'vd-refractories-special-steel-and-vacuum-refractories.php',
    'vod-refractories-special-steel-and-vacuum-refractories' => 'vod-refractories-special-steel-and-vacuum-refractories.php',
    'well-blocks-flow-control-and-ladle-slide-gate-systems' => 'well-blocks-flow-control-and-ladle-slide-gate-systems.php',
    'zirconia-nozzles-flow-control-and-ladle-slide-gate-systems' => 'zirconia-nozzles-flow-control-and-ladle-slide-gate-systems.php',
];

// 4. Resolve Route
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // 5. Fallback to 404
    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
    echo '<p>The page you are looking for could not be found.</p>';
    echo "<a href='" . $base_path . "'>Return Home</a>";
}
?>
