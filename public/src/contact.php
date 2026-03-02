<?php
$contacts = [
  ['icon' => '✉️', 'label' => 'Email',           'url' => 'mailto:theoveber79@gmail.com'],
  ['icon' => '💼', 'label' => 'LinkedIn',         'url' => 'https://linkedin.com/in/theo-veber', 'external' => true],
  ['icon' => '🐙', 'label' => 'GitHub',           'url' => 'https://github.com/Theo4500',      'external' => true],
  ['icon' => '📄', 'label' => 'Télécharger mon CV', 'url' => 'public/assets/CV.pdf', 'download' => true],
];
?>

<section id="contact" class="contact-section">
  <div class="section-header reveal">
    <div class="section-tag">Échangeons</div>
    <h2 class="section-title">Me Contacter</h2>
    <p class="section-desc">N'hésitez pas à me contacter pour toute question, opportunité ou collaboration.</p>
  </div>

  <div class="contact-links reveal">
    <?php foreach ($contacts as $contact): ?>
    <a href="<?php echo htmlspecialchars($contact['url']); ?>"
       class="contact-chip"
       <?php if (!empty($contact['external'])): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
      <?php echo $contact['icon']; ?> <?php echo htmlspecialchars($contact['label']); ?>
    </a>
    <?php endforeach; ?>
  </div>
</section>