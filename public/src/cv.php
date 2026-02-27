<?php
// Expériences professionnelles
$experiences = [
  [
    'date'        => 'Février 2026 — Mars 2026',
    'titre'       => 'Stage de seconde année de BTS — Stage',
    'lieu'        => 'FFSS (Fédération Française du Sauvetage et du Secourisme), Orléans',
    'description' => "Création de sites web et d'applications pour des employés locaux, en utilisant HTML, CSS, JavaScript et PHP.",
  ],
  [
    'date'        => '2026 — Présent',
    'titre'       => 'McDonald\'s — Formateur',
    'lieu'        => 'McDonald\'s, Saint Pryve Saint Mesmin',
    'description' => "Formation des nouveaux employés, encadrement de l'équipe et gestion des processus de service.",
  ],
  [
    'date'        => 'Mai 2025 — Juin 2025',
    'titre'       => 'Stage de première année de BTS — Stage',
    'lieu'        => 'Kaizix, Orléans',
    'description' => "Création d'une plateforme web de e-learning sur la programmation.",
  ],
  [
    'date'        => '2024 — 2026',
    'titre'       => 'McDonald\'s — Employé polyvalent',
    'lieu'        => 'McDonald\'s, Saint Pryve Saint Mesmin',
    'description' => "Service en salle, prise de commandes, préparation des aliments et gestion de la caisse.",
  ],
  [
    'date'        => '2022 — 2023',
    'titre'       => 'Chrono Drive — Préparateur de commandes',
    'lieu'        => 'Chrono Drive, Orléans',
    'description' => "Préparation de commandes clients, gestion des stocks et respect des délais de livraison.",
  ],
  [
    'date'        => 'Juillet 2022',
    'titre'       => 'Stage éducatif & Chantier caritatif',
    'lieu'        => 'Saint Hilaire Saint Mesmin',
    'description' => "Stage éducatif et chantier caritatif en milieu rural.",
  ],
];

// Formations
$formations = [
  [
    'date'        => '2024 — 2026',
    'titre'       => 'BTS SIO (Option SLAM)',
    'lieu'        => 'Lycée Saint Paul Bourdon Blanc / École supérieure',
    'description' => "Services Informatiques aux Organisations. Spécialisation en développement d'applications.",
  ],
  [
    'date'        => '2022 — 2024',
    'titre'       => 'Licence Informatique/Mathématiques',
    'lieu'        => 'Université, Orléans',
    'description' => "Cours en programmation, systèmes d'exploitation, réseaux, bases de données et sécurité informatique.",
  ],
  [
    'date'        => '2019 — 2022',
    'titre'       => 'Baccalauréat Général / Technologique',
    'lieu'        => 'Lycée Charles peguy, Orléans',
    'description' => 'Spécialités NSI (Numérique et Sciences Informatiques) et SES (Sciences Économiques et Sociales).',
  ],
  [
    'date'        => '2015-2019',
    'titre'       => 'Brevet des collèges',
    'lieu'        => 'Collège Charles Rivière, Olivet',
    'description' => 'Diplôme national du brevet avec mention Assez Bien. Cours généraux et introduction à l’informatique.',
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