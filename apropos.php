<?php $pageTitle = "À propos"; include 'partials/head.php'; ?>
<?php $currentPage = 'apropos'; include 'partials/nav.php'; ?>

    <div class="page-hero hero-scan">
        <div class="inner">
            <span class="tag">À propos</span>
            <h1 style="font-size:36px; margin-top:14px;">D'une reconversion à la programmation.</h1>
        </div>
    </div>

    <section style="background:var(--bg-alt);">
        <div class="reveal" style="max-width:760px; margin:0 auto; padding:64px 24px; display:flex; flex-direction:column; gap:16px; font-size:17px; line-height:1.7; color:var(--text-muted);">
            <p style="margin:0;">Après une réorientation professionnelle, je me forme en horaire décalé (cours du soir) au développement d'applications à l'ATCA — École des Aumôniers du Travail de Charleroi. Le programme couvre le Java EE, le PHP/Symfony, la programmation orientée objet et l'analyse UML.</p>
            <p style="margin:0;">Je code aussi bien pour des projets de groupe encadrés que pour un vrai client (un système de caisse en production), et je bricole mon propre serveur à la maison — Proxmox, Home Assistant, réseau — par curiosité pour l'infra et la sécurité.</p>
            <p style="margin:0;">Mon objectif à moyen terme : évoluer vers la cybersécurité après une base solide en développement.</p>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>