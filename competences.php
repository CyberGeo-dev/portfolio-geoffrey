<?php
$pageTitle = "Compétences";
include 'partials/head.php';

// --- Données pilotées en PHP : ajouter une compétence = ajouter une ligne ici ---
$skills = [
        ['label' => 'Java EE',        'sub' => 'Servlets, JSP/JSTL, JPA/EclipseLink', 'icon' => 'coffee'],
        ['label' => 'PHP / Symfony',  'sub' => 'PHP 8, Symfony 7',                    'icon' => 'brackets'],
        ['label' => 'Bases de données','sub' => 'MySQL, SQLite',                      'icon' => 'database'],
        ['label' => 'HTML / CSS',     'sub' => 'Bootstrap',                           'icon' => 'layout'],
        ['label' => 'JavaScript',     'sub' => 'jQuery, AJAX',                        'icon' => 'braces'],
        ['label' => 'Angular',        'sub' => 'en apprentissage',                    'icon' => 'shield'],
        ['label' => 'Git / GitHub',   'sub' => 'versioning',                          'icon' => 'git'],
        ['label' => 'UML',            'sub' => 'cas d\'utilisation, MCD/MLD',         'icon' => 'diagram'],
        ['label' => 'PhpStorm / IntelliJ', 'sub' => 'environnement de dev',           'icon' => 'terminal'],
        ['label' => 'Proxmox',        'sub' => 'Home Assistant, réseau',              'icon' => 'server'],
];

function skillIcon($name) {
    $icons = [
            'coffee' => '<path d="M4 8h13v6a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8Z"/><path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/><path d="M8 3c-.5 1 .5 1.2 0 2.2M12 3c-.5 1 .5 1.2 0 2.2"/>',
            'brackets' => '<path d="M9 6 4 12l5 6"/><path d="M15 6l5 6-5 6"/>',
            'database' => '<ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v12c0 1.7 3.1 3 7 3s7-1.3 7-3V6"/><path d="M5 12c0 1.7 3.1 3 7 3s7-1.3 7-3"/>',
            'layout' => '<rect x="3.5" y="4" width="17" height="16" rx="2"/><path d="M3.5 9.5h17"/><path d="M9 9.5V20"/>',
            'braces' => '<path d="M8 4c-2 0-3 1-3 3v3c0 1-1 2-2 2 1 0 2 1 2 2v3c0 2 1 3 3 3"/><path d="M16 4c2 0 3 1 3 3v3c0 1 1 2 2 2-1 0-2 1-2 2v3c0 2-1 3-3 3"/>',
            'shield' => '<path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3Z"/>',
            'git' => '<circle cx="6" cy="6" r="2"/><circle cx="6" cy="18" r="2"/><circle cx="18" cy="9" r="2"/><path d="M6 8v8"/><path d="M6 12c0-3 3-3 3-3h6a3 3 0 0 0 3-3"/>',
            'diagram' => '<rect x="3.5" y="3.5" width="6" height="6" rx="1.2"/><rect x="14.5" y="3.5" width="6" height="6" rx="1.2"/><rect x="9" y="14.5" width="6" height="6" rx="1.2"/><path d="M6.5 9.5v3a2 2 0 0 0 2 2H9"/><path d="M17.5 9.5v3a2 2 0 0 1-2 2h-.5"/>',
            'terminal' => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 9l3 3-3 3"/><path d="M12 15h5"/>',
            'server' => '<rect x="4" y="4" width="16" height="6" rx="1.5"/><rect x="4" y="14" width="16" height="6" rx="1.5"/><circle cx="8" cy="7" r="0.6" fill="currentColor" stroke="none"/><circle cx="8" cy="17" r="0.6" fill="currentColor" stroke="none"/>',
    ];
    return $icons[$name] ?? '';
}

$objectifs = [
        ['when' => 'Court terme', 'icon' => 'target', 'text' => "Décrocher un stage en développement pour appliquer mes compétences Java / PHP sur des projets réels."],
        ['when' => 'Moyen terme', 'icon' => 'trend', 'text' => "Continuer à monter en compétence (Angular, Spring Boot) et consolider les bonnes pratiques (clean code, tests)."],
        ['when' => 'Plus loin', 'icon' => 'shield2', 'text' => "Évoluer vers la cybersécurité, en m'appuyant sur mon labo perso (Proxmox, réseau) et une base solide en développement."],
];

function objIcon($name) {
    $icons = [
            'target' => '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="0.8" fill="currentColor" stroke="none"/>',
            'trend' => '<path d="M4 16l5-5 4 4 7-8"/><path d="M15 7h5v5"/>',
            'shield2' => '<path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3Z"/><path d="M9 12l2 2 4-4"/>',
    ];
    return $icons[$name] ?? '';
}
?>
<?php $currentPage = 'competences'; include 'partials/nav.php'; ?>

    <div class="page-hero hero-scan">
        <div class="inner">
            <span class="tag">Compétences</span>
            <h1 style="font-size:36px; margin-top:14px;">Ce que je maîtrise, ce que j'apprends, où je vais.</h1>
        </div>
    </div>

    <!-- STACK TECHNIQUE : grille d'icônes -->
    <section style="background:#05060a; color:#F4F1EA;">
        <div style="max-width:1120px; margin:0 auto; padding:64px 24px;">
            <h2 class="reveal" style="font-size:22px; margin-bottom:36px; color:#00f5d4;">Stack technique</h2>
            <div class="skill-grid">
                <?php foreach ($skills as $i => $s): ?>
                    <div class="skill-card reveal" style="transition-delay: <?= $i * 0.06 ?>s;">
                        <svg class="skill-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <?= skillIcon($s['icon']) ?>
                        </svg>
                        <div class="skill-label"><?= htmlspecialchars($s['label']) ?></div>
                        <div class="skill-sub"><?= htmlspecialchars($s['sub']) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div style="margin-top:40px; display:flex; flex-wrap:wrap; gap:10px;">
                <?php foreach (['Travail d\'équipe','Autonomie','Curiosité technique','Rigueur (issue de la reconversion)'] as $j => $st): ?>
                    <span class="tag reveal" style="transition-delay: <?= $j * 0.05 ?>s;"><?= htmlspecialchars($st) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- LANGUES -->
    <section style="background:var(--bg-alt);">
        <div class="reveal" style="max-width:1120px; margin:0 auto; padding:56px 24px;">
            <h2 class="grad-text" style="font-size:22px; margin-bottom:28px;">Langues</h2>
            <div style="display:flex; gap:40px; flex-wrap:wrap;">
                <div class="lang-badge">
                    <div class="lang-circle">FR</div>
                    <div>
                        <div style="font-weight:700; font-size:16px;">Français</div>
                        <div style="font-size:14px; color:var(--text-muted);">Langue maternelle</div>
                    </div>
                </div>
                <div class="lang-badge">
                    <div class="lang-circle">EN</div>
                    <div>
                        <div style="font-weight:700; font-size:16px;">Anglais</div>
                        <div style="font-size:14px; color:var(--text-muted);">Technique, niveau intermédiaire — en progression</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OBJECTIFS / FUTUR -->
    <section style="background:var(--bg-alt2);">
        <div style="max-width:1120px; margin:0 auto; padding:56px 24px;">
            <h2 class="reveal grad-text" style="font-size:22px; margin-bottom:28px;">Objectifs</h2>
            <div class="grid-3" style="display:grid; grid-template-columns:repeat(3, minmax(0,1fr)); gap:24px;">
                <?php foreach ($objectifs as $k => $o): ?>
                    <div class="card reveal" style="transition-delay: <?= $k * 0.08 ?>s; padding:24px;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#00f5d4" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" style="width:28px; height:28px; margin-bottom:12px;">
                            <?= objIcon($o['icon']) ?>
                        </svg>
                        <div style="font-weight:700; font-size:16px; margin-bottom:8px;"><?= htmlspecialchars($o['when']) ?></div>
                        <p style="margin:0; font-size:14px; line-height:1.6; color:var(--text-muted);"><?= htmlspecialchars($o['text']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>