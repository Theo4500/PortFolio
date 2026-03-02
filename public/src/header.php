<?php
// Page active
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle . ' — Portfolio' : 'Portfolio — Mon Espace Professionnel'; ?></title>
  <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Portfolio professionnel — Projets, CV et veille informatique.'; ?>">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<!-- ─── NAVIGATION ─── -->
<nav>
  <a href="index.php" class="logo">port<span>.</span>folio</a>
  <button class="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
  <ul class="nav-links">
    <li><a href="#projets" <?php if($currentPage === 'index') echo 'class="active"'; ?>>Projets</a></li>
    <li><a href="#cv">CV</a></li>
    <li><a href="#competences">Compétences</a></li>
    <li><a href="#veille">Veille</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>