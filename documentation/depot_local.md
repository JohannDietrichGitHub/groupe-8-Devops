# Initialisation d’un dépôt local

# Créer un dépôt git local

Cette étape est à réaliser dans le cadre du déploiement initial de l’application.

## Installation et configuration de git

### Installation de git

Installation de git avec apt :

```bash
sudo apt update
sudo apt install git
```

Vérifiez l’installation en exécutant :

```bash
git --version
```

### Configuration de git

Avant d’exécuter des commandes git, il vous faut configurer git avec les informations de votre compte :

```bash
git config --global user.name "Votre Nom"
git config --global user.email "votre@email.com"
```

Si le dépôt d’intérêt est privé, il faudra également configurer les clés SSH pour y accéder.

## Création et configuration du dépôt git local

### Initialisation du dépôt git local

Allez dans le répertoire du projet où vous souhaitez créer le dépôt git :

```bash
cd /chemin/vers/votre/projet
```

Initialisez un nouveau dépôt git local :

```bash
git init
```

### Ajout du dépôt distant

Si vous avez déjà un dépôt distant, vous pouvez l’ajouter comme origin :

```bash
git remote add origin url_du_dépôt
```

Si vous n’avez pas encore de dépôt distant, vous pouvez en créer un sur une plateforme comme GitHub ou GitLab pour ajouter son URL comme origin
