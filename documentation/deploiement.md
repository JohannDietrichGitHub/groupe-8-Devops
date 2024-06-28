# Déploiement de l’application sur le serveur (Debian)

# Déploiement automatique

## Script .sh

Il a été mis en place un script [update.sh](http://update.sh) de forme suivant :

```bash
#!/bin/bash

# Aller dans le répertoire du projet
cd /chemin/vers/votre/projet

# Mettre à jour le code depuis le dépôt Git
git fetch origin
git reset --hard origin/main  # Assurez-vous de mettre à jour avec la branche correcte

# Redémarrer les conteneurs Docker avec Docker Compose
docker-compose -f docker-compose.prod.yml down
docker-compose -f docker-compose.prod.yml up -d --build
```

Celui-ci permet de déployer automatique les nouvelles version de l’application sous réserve d’automatiser son exécution.

## Automatisation de l’exécution du script

L’exécution du script .sh a été planifié chaque jour. En effet un livrable est attendu tout les jours, et l’exécution de ce script est donc tout à fait adapté.

Pour cela, nous avons utilisé `cron` sur Linux pour exécuter le script à intervalles réguliers.

Le paramétrage est actuellement tous les jours à 16h afin de vérifier si le déploiement se passe bien et d’avoir un marge d’intervention au besoin

# Sécurisation et cohérence de l’application

## Pipeline GitHub Actions concernant les images docker

Dès lors que du code est téléversé sur la branche main du dépôt distant de notre projet, il s’effectue une construction d’image docker et celles-ci sont directement hébergées sur le docker hub.

## Pipeline GitHub Actions concernant les tests

Dès lors que du code est téléversé sur la branche main du dépôt distant de notre projet, il s’effectue l’intégralité des test programmés dans l’application.

Ainsi nous nous prévenons de la régression de l’application mais assurons le bon fonctionnement des nouvelles fonctionnalité.

En découle un déploiement cohérent avec les attentes.
