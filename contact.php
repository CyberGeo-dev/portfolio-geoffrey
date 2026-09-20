<?php $pageTitle = "Contact"; include 'partials/head.php'; ?>
<?php $currentPage = 'contact'; include 'partials/nav.php'; ?>

    <section class="hero-scan" style="background:#05060a; color:#F4F1EA;">
        <div class="reveal" style="max-width:1120px; margin:0 auto; padding:80px 24px; display:flex; flex-direction:column; gap:28px; position:relative; z-index:1;">
            <div>
                <span class="tag">Contact</span>
                <h1 style="font-size:32px; margin-top:14px; margin-bottom:10px;">Parlons de votre offre de stage.</h1>
                <p style="font-size:16px; color:#C9C6BC; max-width:560px; margin:0;">Région de Charleroi (Wanfercée-Baulet), Belgique — mobile pour un stage. Réponse rapide par e-mail.</p>
            </div>
            <div style="display:flex; gap:16px; flex-wrap:wrap;">
                <a href="mailto:[ton.email@exemple.com]" class="btn-primary" style="font-weight:700; padding:14px 26px; border-radius:10px; font-size:15px;">[ton.email@exemple.com]</a>
                <a href="https://github.com/[ton-pseudo-github]" class="btn-ghost" style="font-weight:700; padding:14px 26px; border-radius:10px; font-size:15px;">GitHub</a>
                <a href="https://www.linkedin.com/in/[ton-profil-linkedin]" class="btn-ghost" style="font-weight:700; padding:14px 26px; border-radius:10px; font-size:15px;">LinkedIn</a>
            </div>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>