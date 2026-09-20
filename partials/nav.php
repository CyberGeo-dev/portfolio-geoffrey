<?php
$currentPage = $currentPage ?? '';
function navClass($page, $current) {
    return $page === $current ? 'navlink active hide-mobile' : 'navlink hide-mobile';
}
?>
<div style="position:sticky; top:0; z-index:20; background:rgba(5,6,10,0.92); backdrop-filter:blur(6px); border-bottom:1px solid rgba(244,241,234,0.08);">
    <div style="max-width:1120px; margin:0 auto; padding:18px 24px; display:flex; align-items:center; justify-content:space-between;">
        <a href="index.php" class="<?= navClass('', $currentPage) ?>" style="color:#F4F1EA; font-size:14px; font-weight:600;">Accueil</a>
        <div style="display:flex; gap:28px; align-items:center;">
            <a class="<?= navClass('apropos', $currentPage) ?>" href="apropos.php" style="color:#F4F1EA; font-size:14px; font-weight:600;">À propos</a>
            <a class="<?= navClass('competences', $currentPage) ?>" href="competences.php" style="color:#F4F1EA; font-size:14px; font-weight:600;">Compétences</a>
            <a class="<?= navClass('projets', $currentPage) ?>" href="projets.php" style="color:#F4F1EA; font-size:14px; font-weight:600;">Projets</a>
            <a href="contact.php" class="btn-primary" style="font-size:14px; padding:9px 18px; border-radius:8px;">Contact</a>
        </div>
    </div>
</div>