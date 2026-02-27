<?php
// Compétences — Modifiez le nom et le pourcentage
$competences = [
  ['nom' => 'HTML / CSS / JS',             'niveau' => 90],
  ['nom' => 'PHP / MySQL',                 'niveau' => 80],
  ['nom' => 'Python',                      'niveau' => 75],
  ['nom' => 'React / Node.js',             'niveau' => 70],
  ['nom' => 'Administration Linux',        'niveau' => 72],
  ['nom' => 'Réseau (TCP/IP, VLAN, VPN)',  'niveau' => 78],
  ['nom' => 'Docker / Virtualisation',     'niveau' => 65],
  ['nom' => 'Git / CI-CD',                 'niveau' => 73],
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