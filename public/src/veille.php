<?php
$articles = [
  [
    'categorie'   => 'Impact environnemental',
    'titre'       => "L'empreinte carbone du numérique : état des lieux en 2026",
    'description' => "Le numérique représente 4,4 % des émissions de gaz à effet de serre en France (contre 2,5 % en 2020). Les équipements informatiques concentrent 47 % de cette empreinte, principalement à cause de leur fabrication. La fabrication d'un seul ordinateur portable représente 70 à 80 % de son empreinte carbone totale.",
    'date'        => 'Mars 2026',
  ],
  [
    'categorie'   => 'IA & énergie',
    'titre'       => "L'impact environnemental de l'intelligence artificielle",
    'description' => "Une requête à un modèle d'IA générative consomme environ 10 fois plus d'énergie qu'une recherche web classique. L'Agence Internationale de l'Énergie prévoit un doublement de la consommation des data centers d'ici 2030, poussé par l'essor de l'IA. Le concept d'IA frugale émerge pour encourager l'éco-conception dès la phase de développement.",
    'date'        => 'Février 2026',
  ],
  [
    'categorie'   => 'Réglementation',
    'titre'       => "La loi REEN et le cadre législatif du numérique responsable",
    'description' => "Depuis janvier 2025, la loi REEN (Réduction de l'Empreinte Environnementale du Numérique) impose aux collectivités de plus de 50 000 habitants une stratégie numérique responsable. L'Union Européenne travaille en parallèle sur une réglementation pour l'efficacité énergétique des data centers, visant la neutralité carbone en 2030.",
    'date'        => 'Janvier 2026',
  ],
  [
    'categorie'   => 'Éco-conception web',
    'titre'       => "Éco-concevoir un service numérique : bonnes pratiques",
    'description' => "L'éco-conception consiste à réduire l'impact d'un site ou d'une application dès sa conception : optimiser les images, limiter les requêtes HTTP, alléger le code, choisir un hébergement vert. Le référentiel RGESN (Référentiel Général d'Écoconception des Services Numériques) fournit un cadre officiel de bonnes pratiques en France.",
    'date'        => 'Décembre 2025',
  ],
  [
    'categorie'   => 'Économie circulaire',
    'titre'       => "Reconditionnement et allongement de la durée de vie des équipements",
    'description' => "En 2025, 22 % des smartphones utilisés en France sont reconditionnés, un chiffre qui a triplé depuis 2018. Le marché pèse 1,5 milliard d'euros avec une croissance annuelle de 20 %. Allonger la durée de vie des équipements est le levier le plus efficace pour réduire l'empreinte du numérique.",
    'date'        => 'Novembre 2025',
  ],
  [
    'categorie'   => 'Data centers',
    'titre'       => "Vers des data centers plus verts : innovations et défis",
    'description' => "Un data center de 10 000 m² consomme autant d'électricité qu'une ville de 50 000 habitants. Les innovations incluent le refroidissement par immersion, la valorisation de la chaleur fatale (obligatoire en Europe pour les centres de plus de 1 MW depuis 2024) et l'alimentation par énergies renouvelables.",
    'date'        => 'Octobre 2025',
  ],
];

// Sources de veille spécialisées Green IT
$sources = [
  ['icon' => '🌿', 'nom' => 'GreenIT.fr (collectif)'],
  ['icon' => '📡', 'nom' => 'Feedly (agrégateur RSS)'],
  ['icon' => '🏛️', 'nom' => 'ADEME (Agence de la transition)'],
  ['icon' => '📊', 'nom' => 'INR (Institut Numérique Responsable)'],
  ['icon' => '📰', 'nom' => 'Les Enovateurs'],
  ['icon' => '🎯', 'nom' => 'Planet Tech\'Care / Numeum'],
  ['icon' => '🇪🇺', 'nom' => 'European Commission (Digital)'],
  ['icon' => '🎥', 'nom' => 'GreenTech Forum (événement)'],
];
?>

<section id="veille">
  <div class="section-header reveal">
    <div class="section-tag">Veille technologique</div>
    <h2 class="section-title">Ma Veille : Green IT</h2>
    <p class="section-desc">Le numérique responsable et l'éco-conception : comment réduire l'impact environnemental du numérique.</p>
  </div>

  <div class="veille-grid">
    <?php foreach ($articles as $article): ?>
    <div class="veille-card reveal">
      <div class="veille-category"><?php echo htmlspecialchars($article['categorie']); ?></div>
      <h3><?php echo htmlspecialchars($article['titre']); ?></h3>
      <p><?php echo htmlspecialchars($article['description']); ?></p>
      <div class="veille-date">Mis à jour — <?php echo htmlspecialchars($article['date']); ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Sources de veille -->
  <div class="veille-sources reveal">
    <h3>Mes sources de veille</h3>
    <ul class="source-list">
      <?php foreach ($sources as $source): ?>
      <li class="source-item">
        <div class="source-icon"><?php echo $source['icon']; ?></div>
        <span class="source-name"><?php echo htmlspecialchars($source['nom']); ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>