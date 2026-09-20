<?php $pageTitle = "Projets"; include 'partials/head.php'; ?>
<?php $currentPage = 'projets'; include 'partials/nav.php'; ?>

    <div class="page-hero hero-scan">
        <div class="inner">
            <span class="tag">Projets</span>
            <h1 style="font-size:36px; margin-top:14px;">Trois projets, trois contextes différents.</h1>
        </div>
    </div>

    <section style="background:var(--bg-alt);">
        <div style="max-width:1120px; margin:0 auto; padding:56px 24px;">
            <div class="grid-3" style="display:grid; grid-template-columns:repeat(3, minmax(0,1fr)); gap:24px;">

                <div class="card reveal reveal-1" style="padding:28px; display:flex; flex-direction:column; gap:14px;">
                    <div style="font-size:12px; font-weight:700; color:#00f5d4; letter-spacing:.03em;">PROJET DE GROUPE — JAVA EE</div>
                    <h3 style="font-size:20px;">Cabinet Vétérinaire</h3>
                    <p style="font-size:15px; line-height:1.6; color:var(--text-muted); margin:0; flex-grow:1;">Application de gestion pour un cabinet vétérinaire : rendez-vous, clients, utilisateurs. Analyse UML complète (cas d'utilisation, MCD/MLD, diagrammes d'activité) puis développement.</p>
                    <div style="display:flex; flex-wrap:wrap; gap:6px;">
                        <span class="tag">JPA/EclipseLink</span><span class="tag">JSP/JSTL</span><span class="tag">Bootstrap 5</span><span class="tag">FullCalendar</span>
                    </div>
                    <a href="https://github.com/FredVanissATC/projetVeto" style="margin-top:6px; font-weight:700; font-size:14px; color:#00f5d4;">Voir le dépôt (branche dev-geoff) →</a>
                </div>

                <div class="card reveal reveal-2" style="padding:28px; display:flex; flex-direction:column; gap:14px;">
                    <div style="font-size:12px; font-weight:700; color:#00f5d4; letter-spacing:.03em;">PROJET DE GROUPE — SYMFONY</div>
                    <h3 style="font-size:20px;">GSM Sales Project</h3>
                    <p style="font-size:15px; line-height:1.6; color:var(--text-muted); margin:0; flex-grow:1;">Application de gestion des ventes de GSM : authentification, gestion des utilisateurs et des produits, validations côté client et serveur.</p>
                    <div style="display:flex; flex-wrap:wrap; gap:6px;">
                        <span class="tag">Symfony 7</span><span class="tag">PHP 8.4</span><span class="tag">MySQL</span><span class="tag">Twig</span>
                    </div>
                    <a href="https://github.com/promsocatc/ATC-GSMSalesProject_25_26" style="margin-top:6px; font-weight:700; font-size:14px; color:#00f5d4;">Voir le dépôt →</a>
                </div>

                <div class="card reveal reveal-3" style="padding:28px; display:flex; flex-direction:column; gap:14px;">
                    <div style="font-size:12px; font-weight:700; color:#00f5d4; letter-spacing:.03em;">PROJET CLIENT RÉEL — PHP</div>
                    <h3 style="font-size:20px;">Green Robot</h3>
                    <p style="font-size:15px; line-height:1.6; color:var(--text-muted); margin:0; flex-grow:1;">Système de caisse pour un club, utilisé en production : panier multi-articles, calcul de monnaie en temps réel, vue des ventes filtrable par période.</p>
                    <div style="display:flex; flex-wrap:wrap; gap:6px;">
                        <span class="tag">PHP</span><span class="tag">SQLite</span><span class="tag">Déployé en prod</span>
                    </div>
                    <span style="margin-top:6px; font-weight:700; font-size:14px; color:#8A8676;">[lien de démo à ajouter]</span>
                </div>

            </div>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>