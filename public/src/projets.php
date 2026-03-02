<?php
// Tableau des projets — Modifiez ici pour ajouter / supprimer vos projets
$projets = [
  [
    'numero'      => '01',
    'cover'       => 'cover-1',
    'titre'       => 'OCS - Mise en place d\'un serveur OCS Inventory',
    'description' => 'Installation et configuration d\'un serveur OCS Inventory pour l\'inventaire matériel et logiciel d\'une infrastructure informatique.',
    'tags'        => ['PHP', 'MariaDB', 'Linux', 'Apache' ,'OCS Inventory'],
    'url'         => 'public/assets/Serveur_OCS.pdf', 'download' => true,
  ],
  [
    'numero'      => '02',
    'cover'       => 'cover-2',
    'titre'       => 'GLPI - Mise en place d\'un service de ticket GLPI',
    'description' => 'Installation et configuration d\'un service de ticket GLPI pour la gestion des incidents et des demandes de services.',
    'tags'        => ['PHP', 'MariaDB', 'Linux', 'Apache' ,'GLPI'],
    'url'         => 'public/assets/GLPI.pdf', 'download' => true,
  ],
  [
    'numero'      => '03',
    'cover'       => 'cover-3',
    'titre'       => 'FFSSActus - Création d\'un site d\'actus en temps réel avec flux RSS pour la FFSS',
    'description' => 'Développement d\'un site web dynamique affichant les actualités en temps réel de la Fédération Française de Sauvetage et de Secourisme (FFSS) à partir de flux RSS.',
    'tags'        => ['CSS', 'JavaScript', 'RSS', 'PHP', 'SQL'],
    'url'         => 'public/assets/FFSSActus.pdf', 'download' => true,
  ],
  [
    'numero'      => '04',
    'cover'       => 'cover-4',
    'titre'       => 'FFSSInventory - Application de bureau pour l\'inventaire du matériel de la FFSS',
    'description' => 'Développement d\'une application de bureau pour l\'inventaire du matériel de la Fédération Française de Sauvetage et de Secourisme (FFSS) avec synchronisation cloud.',
    'tags'        => ['CSS', 'Javascript', 'PHP', 'SQL', 'Scanner'],
    'url'         => 'public/assets/FFSSInventory.pdf', 'download' => true,
  ],
  [
    'numero'      => '05',
    'cover'       => 'cover-5',
    'titre'       => 'CheckMyStars - Site d\'évaluation de biens immobiliers',
    'description' => 'Développement d\'un site web d\'évaluation de biens immobiliers avec gestion des données et génération de rapports.',
    'tags'        => ['HTML', 'CSS', 'Javascript', 'PHP', 'SQL', 'Bootstrap', 'Twig'],
    'url'         => 'public/assets/CDC_CheckMyStars.pdf', 'download' => true,
  ],
  [
    'numero'      => '06',
    'cover'       => 'cover-6',
    'titre'       => 'Kaizix Learning - Site de e-learning pour la formation continue',
    'description' => 'Développement d\'un site web de formation continue en e-learning avec gestion des utilisateurs, des cours et des évaluations.',
    'tags'        => ['CSS', 'Javascript', 'Typescript', 'PHP', 'Tailwind', 'Prisma', 'SQL', 'Supabase'],
    'url'         => 'public/assets/Kaizix.pdf', 'download' => true,
  ],
];
?>

<section id="projets">
  <div class="section-header reveal">
    <div class="section-tag">Réalisations</div>
    <h2 class="section-title">Mes Projets</h2>
    <p class="section-desc">Une sélection de projets réalisés dans le cadre de ma formation et en autonomie.</p>
  </div>

  <div class="projects-grid">
    <?php foreach ($projets as $projet): ?>
    <div class="project-card reveal">
      <div class="project-cover">
        <div class="project-cover-inner <?php echo htmlspecialchars($projet['cover']); ?>">
          <?php echo htmlspecialchars($projet['numero']); ?>
        </div>
      </div>
      <div class="project-body">
        <h3 style="text-align: center;"><?php echo htmlspecialchars($projet['titre']); ?></h3>
        <p><?php echo htmlspecialchars($projet['description']); ?></p>
        <div class="project-tags">
          <?php foreach ($projet['tags'] as $tag): ?>
            <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
          <?php endforeach; ?>
        </div><br>
        <div>
          <?php if (!empty($projet['url'])): ?>
            <a href="<?php echo htmlspecialchars($projet['url']); ?>"
               class="project-link"
               <?php if (!empty($projet['download'])): ?>download<?php endif; ?>>
              Voir la documentation
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>