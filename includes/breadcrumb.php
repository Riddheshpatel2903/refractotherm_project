<?php
/**
 * Breadcrumb Include
 * 
 * Usage: Set $breadcrumbs array before including this file.
 * Example:
 *   $breadcrumbs = [
 *     ['label' => 'Home', 'url' => 'home'],
 *     ['label' => 'About Us', 'url' => 'about'],
 *     ['label' => 'Testimonials', 'url' => ''] // empty url = current page (no link)
 *   ];
 *   include 'includes/breadcrumb.php';
 */
if (!empty($breadcrumbs)):
?>
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <?php foreach ($breadcrumbs as $i => $crumb):
        $isLast = ($i === count($breadcrumbs) - 1);
      ?>
        <li class="breadcrumb__item<?php echo $isLast ? ' breadcrumb__item--active' : ''; ?>"
            itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <?php if (!$isLast && !empty($crumb['url'])): ?>
            <a href="<?php echo htmlspecialchars($crumb['url']); ?>" class="breadcrumb__link" itemprop="item">
              <span itemprop="name"><?php echo htmlspecialchars($crumb['label']); ?></span>
            </a>
            <span class="breadcrumb__sep" aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
          <?php else: ?>
            <span class="breadcrumb__current" itemprop="name"><?php echo htmlspecialchars($crumb['label']); ?></span>
          <?php endif; ?>
          <meta itemprop="position" content="<?php echo $i + 1; ?>" />
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</nav>
<?php endif; ?>
