<?php

// Métadonnées de la page
$pageTitle = 'Accueil';
$pageDesc  = 'Portfolio professionnel — Découvrez mes projets, mon CV et ma veille informatique.';

// ─── ASSEMBLAGE DES SECTIONS ───
include 'public/src/header.php';
include 'public/src/hero.php';
include 'public/src/projets.php';
include 'public/src/cv.php';
include 'public/src/competences.php';
include 'public/src/veille.php';
include 'public/src/contact.php';
include 'public/src/footer.php';
?>