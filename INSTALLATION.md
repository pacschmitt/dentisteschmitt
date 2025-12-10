# Guide d'Installation - Site WordPress Cabinet Dentaire Schmitt

## Installation avec Docker (Recommandé)

### Prérequis
- Docker installé sur votre machine
- Docker Compose installé (ou Docker Desktop qui l'inclut)
- Port 8080 et 8081 disponibles sur votre machine

### Étapes d'installation

1. **Cloner le projet**
   ```bash
   git clone https://github.com/pacschmitt/dentisteschmitt.git
   cd dentisteschmitt
   ```

2. **Lancer les conteneurs Docker**
   ```bash
   docker compose up -d
   ```
   
   Cette commande va :
   - Télécharger les images Docker nécessaires (WordPress, MySQL, phpMyAdmin)
   - Créer et démarrer les conteneurs
   - Configurer le réseau entre les conteneurs

3. **Attendre que les services démarrent**
   ```bash
   docker compose logs -f wordpress
   ```
   
   Attendez de voir le message indiquant que WordPress est prêt (environ 30 secondes)

4. **Accéder à WordPress**
   
   Ouvrez votre navigateur et allez sur : http://localhost:8080
   
   Vous verrez l'écran d'installation de WordPress.

5. **Installation de WordPress**
   
   Suivez l'assistant d'installation :
   - **Langue** : Français
   - **Titre du site** : Cabinet Dentaire Schmitt
   - **Identifiant** : Choisissez un nom d'utilisateur
   - **Mot de passe** : Créez un mot de passe fort
   - **Email** : Votre adresse email
   - **Visibilité** : Décidez si les moteurs de recherche peuvent indexer le site

6. **Activer le thème Dentiste Schmitt**
   
   - Connectez-vous à l'administration : http://localhost:8080/wp-admin
   - Allez dans **Apparence > Thèmes**
   - Trouvez le thème "Dentiste Schmitt"
   - Cliquez sur **Activer**

7. **Configuration initiale du thème**
   
   a. **Créer les menus**
   - Allez dans **Apparence > Menus**
   - Créez un nouveau menu "Menu Principal"
   - Assignez-le à l'emplacement "Menu Principal"
   - Ajoutez des pages : Accueil, Services, À propos, Contact
   
   b. **Ajouter des services**
   - Allez dans **Services > Ajouter un service**
   - Créez plusieurs services (ex: Soins dentaires, Orthodontie, Implants)
   - Ajoutez des images mises en avant pour chaque service
   
   c. **Créer l'équipe**
   - Allez dans **Équipe > Ajouter un membre**
   - Ajoutez les dentistes et assistants
   - Ajoutez des photos pour chaque membre
   
   d. **Personnaliser le site**
   - Allez dans **Apparence > Personnaliser**
   - Ajoutez un logo
   - Modifiez les couleurs si nécessaire

## Gestion des conteneurs Docker

### Commandes utiles

```bash
# Démarrer les conteneurs
docker compose up -d

# Arrêter les conteneurs
docker compose down

# Voir les logs
docker compose logs -f

# Voir l'état des conteneurs
docker compose ps

# Redémarrer un service
docker compose restart wordpress

# Arrêter et supprimer tout (y compris la base de données)
docker compose down -v
```

## Accès aux services

- **Site WordPress** : http://localhost:8080
- **Admin WordPress** : http://localhost:8080/wp-admin
- **phpMyAdmin** : http://localhost:8081
  - Utilisateur : wordpress
  - Mot de passe : wordpress

## Sauvegarde et restauration

### Sauvegarder la base de données

```bash
docker exec dentisteschmitt-mysql mysqldump -u wordpress -pwordpress dentisteschmitt > backup.sql
```

### Restaurer la base de données

```bash
docker exec -i dentisteschmitt-mysql mysql -u wordpress -pwordpress dentisteschmitt < backup.sql
```

### Sauvegarder les fichiers

Les fichiers WordPress sont dans le dossier `wp-content/`. Faites simplement une copie de ce dossier.

## Dépannage

### Le site ne s'affiche pas

1. Vérifiez que les conteneurs sont en cours d'exécution :
   ```bash
   docker compose ps
   ```

2. Vérifiez les logs pour les erreurs :
   ```bash
   docker compose logs wordpress
   docker compose logs db
   ```

3. Assurez-vous que les ports 8080 et 8081 ne sont pas utilisés par d'autres applications.

### Erreur de connexion à la base de données

1. Attendez quelques minutes que MySQL démarre complètement
2. Redémarrez les conteneurs :
   ```bash
   docker compose restart
   ```

### Permissions de fichiers

Si vous rencontrez des problèmes de permissions, exécutez :
```bash
docker compose exec wordpress chown -R www-data:www-data /var/www/html/wp-content
```

## Mise en production

Pour déployer sur un serveur de production :

1. **Changer les mots de passe** dans docker-compose.yml
2. **Configurer SSL/HTTPS** avec un reverse proxy (Nginx ou Apache)
3. **Configurer les sauvegardes automatiques**
4. **Installer des plugins de sécurité** (Wordfence, Sucuri, etc.)
5. **Optimiser les performances** (cache, CDN, etc.)
6. **Configurer les emails** (SMTP)

## Support

Pour toute question ou problème, ouvrez une issue sur GitHub :
https://github.com/pacschmitt/dentisteschmitt/issues
