# Pages intérieures du staging — 29 octobre 2026

> Mise à jour : le design validé est publié en production en version **1.2.0** le 29 octobre 2026. Voir le [compte rendu de publication](DEPLOIEMENT-1.2.0-2026-10-29.md). Les états ci-dessous décrivent les étapes antérieures.

État : **installées sur le staging uniquement**, version `1.2.0-rc4`. Production conservée en `1.1.1`. Cette version remplace la prévisualisation `rc2` de l’accueil et conserve ses améliorations.

Prévisualisation : https://design.dentisteschmittnyon.ch/?design=1.2.0-rc4

Branche : `codex/premium-design-staging`. Archive `dist/dentisteschmitt-1.2.0-rc4.zip` (33 fichiers, 3 871 292 octets), SHA-256 `91ffa37439d0236fb9e8ea14a97aa2d9b3956259da0716f9d1e31254a7bb41d2`.

## Pages retravaillées

- **Équipe** : introduction plus courte, portraits placés plus haut, filtres par métier avec compteur et état accessible. Les neuf membres restent présents dans le HTML initial et visibles sans JavaScript. Les photos existantes sont conservées ; les portraits non renseignés utilisent les initiales du membre, sans photo inventée. Les textes de présentation existants sont conservés dans la section « Notre approche ».
- **Cabinets** : une fiche par adresse, galerie à gauche, coordonnées et accès à droite ; accès direct Nyon/Bassins et cartes Google dépliables. Les photos de chaque cabinet sont issues des réglages existants. Le repli de Bassins est neutre, pour ne pas attribuer une photo de Nyon à Bassins.
- **Informations** : deux fiches de contact, adresses, horaires, téléphones et emails appelables ; accès directs aux contacts et à la FAQ. Les questions et réponses existantes sont conservées, dans une liste dépliable avec contraste corrigé pour l’indicateur ouvert.
- **Soins** : liste numérotée avec descriptions courtes et détails natifs, introduction latérale et prise de rendez-vous en fin de page. Aucune description clinique réécrite.
- **Tarifs** : montants alignés, mise en évidence visuelle de la valeur du point, deux catégories, moyens de paiement et accès directs. Les montants et textes tarifaires sont conservés.
- **Pages locales Nyon/Bassins** : texte existant avec un encadré pratique et la photo du cabinet concerné. Encadré fixe sur grand écran, repositionné dans le flux sur mobile.
- **Mentions légales et confidentialité** : lecture alignée à gauche, sommaire avec ancres et repérage de section. Le texte légal n’a pas été réécrit.

L’habillage est partagé dans `inc/presentation.php` et `css/interior.css`. Les filtres et le repérage du sommaire sont dans `js/interactions.js`. Les variantes anglaises existantes utilisent les mêmes mises en page et conservent les traductions Loco.

## Contrôles réalisés

- Syntaxe des 19 PHP et du JavaScript modifié valide.
- Suite SEO étendue aux identifiants HTML, aux ancres et à la langue du fil d’Ariane : 18 pages locales puis 18 pages de staging vérifiées. Un H1, métadonnées et canoniques cohérentes, données locales correctes, 301 historiques et 404/recherches noindex.
- Rapport : `docs/evidence/validation-staging-1.2.0-rc4.txt`.
- Les 16 pages intérieures FR/EN ont été ouvertes à 320 px : aucun débordement horizontal observé. Vérifications visuelles complémentaires à 390, 768 et 1280 px.
- Équipe : filtres 3 dentistes / 2 hygiénistes / 4 assistantes / 9 au total ; filtre anglais activé au clavier et compteur « 2 team members ».
- Galeries : changement de photo et compteur 02/03 ; cartes dépliables opérationnelles.
- FAQ : ouverture et réponse visible, indicateur ouvert contrasté.
- Sommaire légal : liens vers les bonnes sections, sous l’en-tête fixe.
- Comparaison des chaînes des soins et tarifs avec la version précédente : aucune description clinique ni valeur numérique tarifaire retirée.
- Les 14 médias, styles et scripts internes relevés sur les pages contrôlées répondent HTTP 200.
- Hostinger confirme la mise à jour du thème ; caches de staging purgés.
- Production relue : CSS 1.1.1, aucun CSS premium, indexation autorisée. Aucune écriture sur la production.

Le staging reste noindex et Site Kit reste désactivé sur cette copie. Aucune réservation n’a été soumise. Les essais ne remplacent pas un audit exhaustif d’accessibilité ni des tests sur tous les appareils physiques.

## Captures

- `docs/screenshots/staging-interior-team-desktop.png`
- `docs/screenshots/staging-interior-team-mobile.png`
- `docs/screenshots/staging-interior-cabinets-desktop.png`
- `docs/screenshots/staging-interior-faq-desktop.png`
- `docs/screenshots/staging-interior-prices-mobile.png`

## Suite

Attendre la validation visuelle du propriétaire. Après accord, sauvegarder et déployer le thème uniquement en production, en conservant les contenus, les réglages d’indexation, Site Kit et les traductions Loco de production. Ne pas copier la base de staging vers la production. Reprendre ensuite les contrôles sans `--staging`.
