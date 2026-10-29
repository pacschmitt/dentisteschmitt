# Prévisualisation du design — 29 octobre 2026

Cette première version a été remplacée par `1.2.0-rc4`. Voir le [compte rendu actuel des pages intérieures](STAGING-PAGES-INTERIEURES-2026-10-29.md).

État : **staging uniquement**, en attente de validation du propriétaire. Production conservée en version 1.1.1.

- Prévisualisation : https://design.dentisteschmittnyon.ch/?design=1.2.0-rc2
- Branche : `codex/premium-design-staging`.
- Thème candidat : `1.2.0-rc2` ; archive générée par `python3 scripts/package-theme.py`.
- SHA-256 : `294df14d924384807af2acb54548e5ec69c683f8277ef77c60708b84628e8a70`.

## Changements

La palette ivoire/terracotta, Montserrat/Inter, le logo, les photos et les informations existantes sont conservés. Aucun contenu médical n’a été réécrit.

- Navigation avec bouton de rendez-vous sur ordinateur, survols discrets, logo légèrement réduit au défilement, langues plus compactes.
- Menu mobile avec icône animée, liens alignés à gauche, rendez-vous intégré, fermeture par Échap/clic extérieur et retour du focus. Les liens du panneau fermé sont exclus du parcours clavier avec `inert`.
- Premier écran avec titre aligné à gauche, dégradé de contraste, réservation et accès aux cabinets directement disponibles.
- Deux cartes Nyon/Bassins avec photos réelles issues du Customizer, coordonnées, horaires, découverte du cabinet et réservation. Les liens anglais utilisent les pages existantes.
- Texte familial et section Nouveau patient mieux hiérarchisés ; rayons et boutons harmonisés.
- Animations d’apparition limitées aux éléments sous le premier écran, survols légers et fiches de soins natives. Respect de `prefers-reduced-motion`. Le texte reste rendu côté serveur.
- Galeries avec compteur et états précédent/suivant ; commandes clavier conservées.
- Bouton mobile « RDV en ligne » explicite ; bouton flottant retiré sur ordinateur au profit de l’en-tête.

Les ajouts sont isolés dans `css/premium.css` et `js/interactions.js`. La navigation est dans `js/navigation.js`.

## Environnement de test

Copie créée avec l’outil staging Hostinger, sous-domaine `design`. L’option WordPress de découragement de l’indexation est activée. Les 18 pages contrôlées déclarent `noindex`. Site Kit est désactivé **sur la copie seulement** pour que les essais ne soient pas comptés dans les statistiques de production. Les traductions Loco personnalisées ont été copiées avec le site et conservées lors des mises à jour du thème.

Caches WordPress/LiteSpeed et cache d’hébergement du staging purgés après installation. L’URL de prévisualisation porte un identifiant de version pour éviter une ancienne copie de navigateur.

## Validation

- Syntaxe des 18 PHP et des trois JavaScript : valide.
- Suite SEO sur les 18 pages locales puis sur les 18 pages de staging : réussite ; canoniques, titres, descriptions, H1, liens FR/EN et schémas conservés. Redirections et pages d’erreur contrôlées.
- Commande : `python3 tests/seo-smoke.py --base-url https://design.dentisteschmittnyon.ch --english --local-pages --staging`.
- Rapport : `docs/evidence/validation-staging-1.2.0-rc2.txt`.
- Vérifications visuelles sur ordinateur, tablette et mobile ; contrôles de largeur 320, 390, 768, 1024 et 1280 px. Pas de débordement horizontal observé.
- Menu mobile : ouverture, fermeture par Échap, focus rendu au bouton, panneau fermé inerte.
- Galeries : clic 01 → 02, clavier 02 → 03, flèche suivante désactivée à la dernière image.
- Soins : ouverture native, description visible, indicateur « − » sans doublon.
- Ancre « Découvrir nos cabinets » : section visible sous la navigation fixe.
- Production vérifiée : CSS 1.1.1, aucune feuille `premium.css`, indexation autorisée. Aucune publication du staging vers la production.

Captures : `docs/screenshots/staging-premium-desktop.png`, `staging-premium-mobile.png`, `staging-premium-menu-mobile.png`, `staging-premium-cabinets.png`.

Ces contrôles ne remplacent pas des essais sur tous les appareils physiques, ni un audit exhaustif d’accessibilité.

## Passage en production après accord

1. Confirmer la version et les retours visuels du propriétaire.
2. Sauvegarder la production à jour.
3. Déployer **le thème uniquement** dans le dossier existant, en préservant les traductions Loco hors du thème. Ne pas remplacer la base de production par celle du staging : elle contient notamment le réglage noindex et la désactivation de Site Kit propres aux essais.
4. Purger LiteSpeed et le cache Hostinger/CDN de production.
5. Rejouer la suite sans `--staging`, puis contrôler les médias, la navigation et les liens de réservation. Conserver la base, les contenus, les réglages d’audience et l’indexation de production.
