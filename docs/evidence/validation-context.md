# Contexte de validation

28 octobre 2026 : WordPress 7.1.3 local, PHP 8.4.3, SQLite Database Integration, Polylang 3.9.1 et AIOSEO 5.0.4. Les pages et modèles FR/EN reproduisent les routes publiques ; il ne s’agit pas d’une copie de la base de production.

- Tests HTTP exécutés avec AIOSEO actif puis inactif.
- Champs titre et description personnalisés enregistrés dans AIOSEO : conservation vérifiée, puis valeurs de test retirées.
- Une pièce jointe de médiathèque créée localement : dimensions, srcset et tailles WordPress vérifiés.
- Navigateur : menu, Échap, fiches de soins au clavier, photos 1→2→3 et commandes désactivées en fin de galerie.
- Aucun débordement horizontal de l’accueil et de la page Cabinets à 587 px lors du contrôle.
- Denteo : sélection des deux cabinets visible ; choix du motif à Bassins accessible. Aucun rendez-vous soumis.
- Contrôle visuel à 587×774 et 1280×720 ; portraits et logo de production non reproduits dans toutes les captures locales.
- Les fichiers crawl.json et public-pages-status.json décrivent le site public AVANT déploiement. Les fichiers validation-*.txt décrivent la version corrigée LOCALE.
