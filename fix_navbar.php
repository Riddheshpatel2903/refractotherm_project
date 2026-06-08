<?php
$content = file_get_contents("includes/navbar.php");
// Strip all <div class="mega__subproducts">...</div> entirely
$content = preg_replace("/<div class=\"mega__subproducts\">[\s\S]*?<\/div>\s*<\/div>/i", "", $content);
// Change <h4 class="mega__category-title">CATEGORY</h4> to <a href="products#category"><h4 ...>CATEGORY</h4></a>
$content = preg_replace_callback("/<h4 class=\"mega__category-title\">(.*?)<\/h4>/i", function($m) {
    $title = $m[1];
    $hash = strtolower(preg_replace("/[^a-z0-9]+/", "-", $title));
    $hash = trim($hash, "-");
    return "<a href=\"products.php#$hash\" style=\"text-decoration:none;\"><h4 class=\"mega__category-title\" style=\"margin-bottom:0;\">$title</h4></a>";
}, $content);
file_put_contents("includes/navbar.php", $content);
echo "Fixed navbar!";
