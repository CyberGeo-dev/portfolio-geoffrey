# Portfolio — Geoffrey Mawet

Portfolio personnel en PHP (includes) + CSS/JS, pour les candidatures de stage.

## Structure

- `index.php` — Accueil
- `apropos.php` — À propos
- `competences.php` — Compétences techniques, Langues, Objectifs
- `projets.php` — Projets
- `contact.php` — Contact
- `partials/head.php` — `<head>` commun (titre dynamique via `$pageTitle`)
- `partials/nav.php` — barre de navigation, avec état actif automatique via `$currentPage`
- `partials/footer.php` — pied de page commun
- `assets/styles.css` — styles + animations (reveal au scroll, balayage dans le hero)
- `assets/script.js` — anime les blocs `.reveal` à l'apparition dans l'écran
- `assets/logo-static.svg` — logo utilisé dans la barre de navigation

## Aperçu en local

PHP doit être exécuté par un serveur (double-cliquer sur le fichier ne suffit pas) :

1. Dans PhpStorm, clique droit sur `index.php` → **Run** (si un interpréteur PHP est configuré), ou :
2. Depuis un terminal, à la racine du projet : `php -S localhost:8000`, puis ouvre `http://localhost:8000` dans le navigateur.

## À faire avant publication

- [ ] Remplacer `[ton.email@exemple.com]` par ta vraie adresse (3 occurrences)
- [ ] Remplacer `[ton-pseudo-github]` par ton pseudo GitHub
- [ ] Remplacer `[ton-profil-linkedin]` par ton profil LinkedIn
- [ ] Ajouter un lien de démo pour le projet Green Robot

## Hébergement

**GitHub Pages ne peut pas exécuter de PHP** (il ne sert que des fichiers statiques).
Pour un site PHP fonctionnel, héberge-le sur un hébergeur qui supporte PHP —
par exemple ton compte alwaysdata (celui utilisé pour Green Robot), via FileZilla,
comme pour ce projet.

GitHub reste utile pour versionner le code source, même sans passer par GitHub Pages.
