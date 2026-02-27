<?php
// Expériences professionnelles
$experiences = [
  [
    'date'        => '2024 — Présent',
    'titre'       => 'Développeur Web — Alternance',
    'lieu'        => 'Entreprise XYZ, Paris',
    'description' => "Développement d'applications web, maintenance de bases de données, participation aux réunions agiles et support utilisateurs.",
  ],
  [
    'date'        => '2023 — 2024',
    'titre'       => 'Technicien Support IT — Stage',
    'lieu'        => 'Société ABC, Lyon',
    'description' => "Gestion du parc informatique, résolution d'incidents, déploiement de postes et configuration réseau.",
  ],
  [
    'date'        => '2022',
    'titre'       => 'Projet personnel',
    'lieu'        => 'Freelance',
    'description' => "Création de sites vitrines pour des auto-entrepreneurs locaux. Design, développement et déploiement.",
  ],
];

// Formations
$formations = [
  [
    'date'        => '2024 — 2026',
    'titre'       => 'BTS SIO (Option SLAM / SISR)',
    'lieu'        => 'Lycée / École supérieure',
    'description' => "Services Informatiques aux Organisations. Spécialisation en développement d'applications ou administration réseau.",
  ],
  [
    'date'        => '2022 — 2024',
    'titre'       => 'Baccalauréat Général / Technologique',
    'lieu'        => 'Lycée, Ville',
    'description' => 'Spécialités NSI (Numérique et Sciences Informatiques) et Mathématiques.',
  ],
  [
    'date'        => 'Certifications',
    'titre'       => 'Certifications obtenues',
    'lieu'        => 'En ligne',
    'description' => 'Cisco CCNA, PIX Certifications, certifications en cybersécurité et développement web.',
  ],
];
?>

<section id="cv">
  <div class="section-header reveal">
    <div class="section-tag">Parcours</div>
    <h2 class="section-title">Mon CV</h2>
    <p class="section-desc">Expériences professionnelles et parcours de formation.</p>
  </div>

  <div class="cv-layout">
    <!-- Expériences -->
    <div class="cv-column reveal">
      <h3><span class="icon icon-exp">💼</span> Expériences</h3>
      <?php foreach ($experiences as $exp): ?>
      <div class="timeline-item">
        <div class="timeline-date"><?php echo htmlspecialchars($exp['date']); ?></div>
        <div class="timeline-title"><?php echo htmlspecialchars($exp['titre']); ?></div>
        <div class="timeline-place"><?php echo htmlspecialchars($exp['lieu']); ?></div>
        <div class="timeline-desc"><?php echo htmlspecialchars($exp['description']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Formation -->
    <div class="cv-column reveal">
      <h3><span class="icon icon-edu">🎓</span> Formation</h3>
      <?php foreach ($formations as $form): ?>
      <div class="timeline-item">
        <div class="timeline-date"><?php echo htmlspecialchars($form['date']); ?></div>
        <div class="timeline-title"><?php echo htmlspecialchars($form['titre']); ?></div>
        <div class="timeline-place"><?php echo htmlspecialchars($form['lieu']); ?></div>
        <div class="timeline-desc"><?php echo htmlspecialchars($form['description']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>