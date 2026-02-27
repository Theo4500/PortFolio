<?php
// Articles de veille
$articles = [
  [
    'categorie'   => 'Intelligence Artificielle',
    'titre'       => "L'essor de l'IA générative dans le développement",
    'description' => "L'intelligence artificielle transforme le métier de développeur avec des outils comme GitHub Copilot, ChatGPT et Claude qui assistent dans l'écriture de code et la résolution de problèmes.",
    'date'        => 'Février 2026',
  ],
  [
    'categorie'   => 'Cybersécurité',
    'titre'       => 'Nouvelles menaces et bonnes pratiques en 2025–2026',
    'description' => 'Ransomwares, phishing avancé, attaques supply chain : panorama des menaces actuelles et stratégies de défense (Zero Trust, MFA, EDR).',
    'date'        => 'Janvier 2026',
  ],
  [
    'categorie'   => 'Cloud & DevOps',
    'titre'       => "Le cloud-native et l'essor des architectures serverless",
    'description' => "Kubernetes, serverless et infrastructure as code : comment les entreprises modernisent leurs déploiements et réduisent les coûts d'infrastructure.",
    'date'        => 'Décembre 2025',
  ],
  [
    'categorie'   => 'Développement Web',
    'titre'       => 'Les frameworks front-end en 2026',
    'description' => 'React, Vue, Svelte, Astro : comparaison des frameworks modernes, tendances SSR/SSG et évolution vers les architectures hybrides.',
    'date'        => 'Février 2026',
  ],
  [
    'categorie'   => 'Réglementation',
    'titre'       => 'RGPD et AI Act : impacts sur le développement',
    'description' => "Les réglementations européennes imposent de nouvelles contraintes sur la collecte de données et l'utilisation de l'IA. Implications concrètes pour les développeurs.",
    'date'        => 'Novembre 2025',
  ],
  [
    'categorie'   => 'Green IT',
    'titre'       => 'Numérique responsable et éco-conception web',
    'description' => "Réduire l'empreinte carbone du numérique : bonnes pratiques d'éco-conception, hébergement vert et optimisation des ressources.",
    'date'        => 'Octobre 2025',
  ],
];

// Sources de veille
$sources = [
  ['icon' => '📡', 'nom' => 'Feedly (agrégateur RSS)'],
  ['icon' => '🐦', 'nom' => 'X / Twitter Tech'],
  ['icon' => '📰', 'nom' => 'Le Monde Informatique'],
  ['icon' => '💻', 'nom' => 'Dev.to / Medium'],
  ['icon' => '🔒', 'nom' => 'CERT-FR / ANSSI'],
  ['icon' => '🎥', 'nom' => 'YouTube Tech (Grafikart, Fireship…)'],
  ['icon' => '📚', 'nom' => 'Documentation officielle'],
  ['icon' => '🤝', 'nom' => 'GitHub Trending'],
];
?>

<section id="veille">
  <div class="section-header reveal">
    <div class="section-tag">Veille technologique</div>
    <h2 class="section-title">Ma Veille Informatique</h2>
    <p class="section-desc">Je me tiens informé des dernières tendances et évolutions du numérique.</p>
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