# Site WordPress - Cabinet Dentaire Schmitt

Un site WordPress moderne et professionnel pour le cabinet dentaire Schmitt, incluant un thème personnalisé et une configuration Docker complète.

## 🦷 Fonctionnalités

- **Thème WordPress personnalisé** adapté aux cabinets dentaires
- **Design responsive** optimisé pour tous les appareils
- **Types de contenu personnalisés** :
  - Services dentaires
  - Membres de l'équipe
- **Sections principales** :
  - Page d'accueil avec hero section
  - Présentation des services
  - Informations de contact
  - Footer avec zones de widgets
- **Configuration Docker** pour un développement facile
- **Interface d'administration phpMyAdmin** incluse

## 🚀 Installation Rapide

### Prérequis

- Docker
- Docker Compose

### Étapes d'installation

1. **Cloner le repository**
   ```bash
   git clone https://github.com/pacschmitt/dentisteschmitt.git
   cd dentisteschmitt
   ```

2. **Démarrer les conteneurs Docker**
   ```bash
   docker-compose up -d
   ```

3. **Accéder au site**
   - **Site WordPress** : http://localhost:8080
   - **phpMyAdmin** : http://localhost:8081

4. **Configuration initiale de WordPress**
   - Suivez l'assistant d'installation WordPress
   - Langue : Français
   - Titre du site : Cabinet Dentaire Schmitt
   - Nom d'utilisateur et mot de passe admin (à définir)

5. **Activer le thème**
   - Connectez-vous à l'admin WordPress (http://localhost:8080/wp-admin)
   - Allez dans **Apparence > Thèmes**
   - Activez le thème **Dentiste Schmitt**

## 📁 Structure du Projet

```
dentisteschmitt/
├── docker-compose.yml          # Configuration Docker
├── uploads.ini                 # Configuration PHP pour les uploads
├── README.md                   # Ce fichier
└── wp-content/
    └── themes/
        └── dentiste-schmitt/   # Thème personnalisé
            ├── style.css       # Styles principaux
            ├── functions.php   # Fonctions du thème
            ├── header.php      # En-tête
            ├── footer.php      # Pied de page
            ├── index.php       # Template principal
            ├── page.php        # Template de page
            ├── single.php      # Template d'article
            └── js/
                └── main.js     # JavaScript principal
```

## ⚙️ Configuration

### Base de données

Les informations de connexion par défaut sont :
- **Hôte** : db
- **Base de données** : dentisteschmitt
- **Utilisateur** : wordpress
- **Mot de passe** : wordpress

### phpMyAdmin

Accédez à phpMyAdmin sur http://localhost:8081 avec :
- **Utilisateur** : wordpress
- **Mot de passe** : wordpress

## 🎨 Personnalisation du Thème

### Couleurs

Les couleurs principales sont définies dans `style.css` avec des variables CSS :
```css
--primary-color: #0077be;
--secondary-color: #00a8e8;
--accent-color: #4ecdc4;
```

### Menus

Deux emplacements de menu sont disponibles :
1. **Menu Principal** - Navigation principale du site
2. **Menu Footer** - Navigation dans le pied de page

Configurez-les dans **Apparence > Menus**.

### Widgets

Trois zones de widgets dans le footer :
1. **Footer 1** - Première colonne
2. **Footer 2** - Deuxième colonne
3. **Footer 3** - Troisième colonne

Configurez-les dans **Apparence > Widgets**.

### Types de contenu personnalisés

#### Services Dentaires
- Créez des services dans **Services > Ajouter un service**
- Ajoutez une image mise en avant pour chaque service
- Les services s'affichent automatiquement sur la page d'accueil

#### Équipe
- Créez des membres de l'équipe dans **Équipe > Ajouter un membre**
- Ajoutez une photo et une description pour chaque membre

## 🔧 Commandes Docker Utiles

```bash
# Démarrer les conteneurs
docker-compose up -d

# Arrêter les conteneurs
docker-compose down

# Voir les logs
docker-compose logs -f

# Redémarrer les conteneurs
docker-compose restart

# Arrêter et supprimer les données
docker-compose down -v
```

## 📝 Contenu Suggéré

### Services à ajouter
1. Soins dentaires généraux
2. Orthodontie
3. Implantologie
4. Esthétique dentaire
5. Parodontologie
6. Dentisterie pédiatrique

### Pages à créer
1. À propos
2. Services
3. Équipe
4. Contact
5. Rendez-vous
6. FAQ
7. Mentions légales
8. Politique de confidentialité

## 🛠️ Développement

### Modifier le thème

Les fichiers du thème sont dans `wp-content/themes/dentiste-schmitt/`. Toute modification sera immédiatement visible après rechargement de la page.

### Ajouter des fonctionnalités

Éditez `functions.php` pour ajouter :
- Nouveaux types de contenu
- Shortcodes personnalisés
- Widgets
- Fonctionnalités additionnelles

## 🔐 Sécurité

Pour la production, pensez à :
1. Changer les mots de passe par défaut
2. Utiliser des mots de passe forts
3. Configurer SSL/HTTPS
4. Installer des plugins de sécurité WordPress
5. Maintenir WordPress et les plugins à jour
6. Sauvegarder régulièrement la base de données

## 📱 Responsive Design

Le thème est entièrement responsive et optimisé pour :
- Desktop (1200px+)
- Tablettes (768px - 1199px)
- Mobiles (< 768px)

## 🌐 Compatibilité Navigateurs

- Chrome (dernières versions)
- Firefox (dernières versions)
- Safari (dernières versions)
- Edge (dernières versions)

## 📄 Licence

Ce projet est sous licence GPL v2 ou ultérieure.

## 👥 Auteur

Cabinet Dentaire Schmitt

## 🆘 Support

Pour toute question ou problème, veuillez ouvrir une issue sur GitHub.

---

**Note** : Ce projet est configuré pour le développement local. Pour un déploiement en production, des configurations supplémentaires de sécurité et de performance sont nécessaires.