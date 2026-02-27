<?php
// Tableau des projets — Modifiez ici pour ajouter / supprimer vos projets
$projets = [
  [
    'numero'      => '01',
    'cover'       => 'cover-1',
    'titre'       => 'Application de gestion',
    'description' => 'Application web permettant la gestion de clients, de tickets et le suivi des interventions techniques.',
    'tags'        => ['PHP', 'MySQL', 'Bootstrap'],
  ],
  [
    'numero'      => '02',
    'cover'       => 'cover-2',
    'titre'       => 'Site e-commerce',
    'description' => 'Boutique en ligne complète avec panier, système de paiement et gestion des commandes.',
    'tags'        => ['React', 'Node.js', 'MongoDB'],
  ],
  [
    'numero'      => '03',
    'cover'       => 'cover-3',
    'titre'       => 'Dashboard monitoring',
    'description' => 'Tableau de bord de supervision réseau en temps réel avec alertes et visualisation des métriques.',
    'tags'        => ['Python', 'Grafana', 'Docker'],
  ],
  [
    'numero'      => '04',
    'cover'       => 'cover-4',
    'titre'       => 'Application mobile',
    'description' => 'Application mobile de gestion de tâches avec notifications push et synchronisation cloud.',
    'tags'        => ['Flutter', 'Firebase', 'Dart'],
  ],
  [
    'numero'      => '05',
    'cover'       => 'cover-5',
    'titre'       => 'API RESTful',
    'description' => "Conception et développement d'une API REST sécurisée avec authentification JWT et documentation Swagger.",
    'tags'        => ['Node.js', 'Express', 'JWT'],
  ],
  [
    'numero'      => '06',
    'cover'       => 'cover-6',
    'titre'       => 'Infrastructure réseau',
    'description' => "Mise en place d'une infrastructure réseau virtualisée avec VLAN, VPN et serveurs Active Directory.",
    'tags'        => ['VMware', 'Cisco', 'Windows Server'],
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
        <h3><?php echo htmlspecialchars($projet['titre']); ?></h3>
        <p><?php echo htmlspecialchars($projet['description']); ?></p>
        <div class="project-tags">
          <?php foreach ($projet['tags'] as $tag): ?>
            <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>