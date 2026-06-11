<?php
$files = [
    "conventional-castables-monolithic-refractories-and-castables.php",
    "low-cement-castables-lcc-monolithic-refactories-and-castables.php",
    "ultra-low-cement-castables-ulcc-monolithic-refractories-and-castables.php",
    "nano-bonded-castables-monolithic-refractories-and-castables.php",
    "self-flow-castables-monolithic-refractories-product.php",
    "alumina-spinel-castables-monolithic-refractories-and-castables.php",
    "insulating-castables-monolithic-refractories-and-castables.php",
    "refractory-mortars-monolithic-refractories-and-castables.php",
    "refractory-cements-monolithic-refractories-and-castables.php",
    "silica-ramming-mass-monolithic-refractories-and-castables.php",
    "neutral-ramming-mass-monolithic-refractories-and-castables.php",
    "basic-ramming-mass-monolithic-refractories-and-castables.php",
    "acidic-ramming-mass-monolithic-refractories-and-castables.php",
    "dry-vibrating-mass-monolithic-refractories-and-castables.php",
    "gunning-mass-monolithic-refractories-and-castables.php",
    "spray-mass-monolithic-refractories-and-castables.php",
    "hot-repair-mixes-monolithic-refractories-and-castables.php"
];

$workspace = "d:\\Refactor\\refractotherm\\";

foreach ($files as $f) {
    $path = $workspace . $f;
    if (!file_exists($path)) {
        echo "Skipping $f (not found)\n";
        continue;
    }
    
    $content = file_get_contents($path);
    
    $pattern = '/\s*<!-- ENGINEERING SPECIFICS -->.*?(\s*<!-- APPLICATIONS & BENEFITS -->)/s';
    
    $new_content = preg_replace($pattern, '$1', $content, -1, $count);
    
    if ($count > 0) {
        file_put_contents($path, $new_content);
        echo "Updated $f successfully.\n";
    } else {
        echo "Pattern not found in $f.\n";
    }
}
