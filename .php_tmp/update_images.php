<?php
$content = file_get_contents("assets/js/products.js");
preg_match_all("/name:\s*[\"\'\']([^\"\'\']+)[\"\'\'],\s*image:\s*[\"\'\']([^\"\'\']+)[\"\'\']/", $content, $matches, PREG_SET_ORDER);

$products = [];
foreach ($matches as $m) {
    $name = trim($m[1]);
    $image = trim($m[2]);
    $products[$name] = $image;
}

$files = glob("*.php");
$count = 0;

foreach ($files as $file) {
    if (is_dir($file) || $file === 'index.php' || $file === 'about.php' || $file === 'contact.php') continue;
    
    $phpContent = file_get_contents($file);
    
    if (preg_match('/<h2 class="page-banner-title">\s*(.*?)\s*<\/h2>/is', $phpContent, $bannerMatch)) {
        $title = trim($bannerMatch[1]);
        
        // Some titles might have HTML entities or different spacing, so let's do a basic clean
        $title = html_entity_decode($title);
        
        // Find in products
        if (isset($products[$title]) && $products[$title] !== '') {
            $newImage = $products[$title];
            
            // Replace the image in split__media
            // The image might look like <img src="assets/images/resources/products/blast_furnace/TapHoleClay.avif" alt="..." />
            $newContent = preg_replace(
                '/(<div[^>]*class="split__media[^>]*>[\s\S]*?<img[^>]*src=")([^"]+)(")/is',
                '${1}' . $newImage . '${3}',
                $phpContent
            );
            
            if ($newContent !== null && $newContent !== $phpContent) {
                file_put_contents($file, $newContent);
                echo "Updated $file using image for $title\n";
                $count++;
            }
        }
    }
}
echo "Total updated: $count files.\n";
?>
