$files = @(
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
)

foreach ($file in $files) {
    $path = "d:\Refactor\refractotherm\$file"
    if (Test-Path $path) {
        $content = Get-Content -Raw -Path $path -Encoding UTF8
        $pattern = '(?s)\s*<!-- ENGINEERING SPECIFICS -->.*?(\s*<!-- APPLICATIONS & BENEFITS -->)'
        $newContent = $content -replace $pattern, '$1'
        Set-Content -Path $path -Value $newContent -Encoding UTF8
        Write-Host "Updated $file"
    } else {
        Write-Host "Skipped $file"
    }
}
