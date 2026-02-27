<?php
// Compétences — Modifiez le nom et le pourcentage
$competences = [
  ['nom' => 'HTML / CSS / JS',             'niveau' => 100],
  ['nom' => 'PHP / MySQL',                 'niveau' => 100],
  ['nom' => 'Python',                      'niveau' => 100],
  ['nom' => 'React / Node.js',             'niveau' => 70],
  ['nom' => 'Réseau (TCP/IP, VLAN, VPN)',  'niveau' => 45],
  ['nom' => 'Virtualisation',     'niveau' => 60],
  ['nom' => 'Sécurité informatique',       'niveau' => 100],
  ['nom' => 'Gestion de projet (Agile/Scrum)',   'niveau' => 85],
  ['nom' => 'Travail en équipe',              'niveau' => 100]
];
?>

<section id="competences">
  <div class="section-header reveal">
    <div class="section-tag">Savoir-faire</div>
    <h2 class="section-title">Compétences</h2>
  </div>

  <div class="skills-grid">
    <?php foreach ($competences as $comp): ?>
    <div class="skill-card reveal">
      <div class="skill-name"><?php echo htmlspecialchars($comp['nom']); ?></div>
      <div class="skill-bar">
        <div class="skill-fill" style="width:<?php echo (int)$comp['niveau']; ?>%"></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>