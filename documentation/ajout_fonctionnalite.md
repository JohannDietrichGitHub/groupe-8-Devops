## Pour commencer :

1. Récupérer le répository Git pour obtenir le projet.
    
    ```bash
    git clone <https://github.com/JohannDietrichGitHub/groupe-8-Devops.git>
    cd groupe-8-Devops
    
    ```
    
2. Assurez-vous que vous êtes sur la branche principale (main).
    
    ```bash
    git checkout main
    git pull origin main
    
    ```
    

## Ajouter une nouvelle fonctionnalité :

1. Créer une nouvelle branche à partir de la branche principale.
    
    ```bash
    git checkout -b feature/nom_de_la_fonctionnalité
    
    ```
    
2. Faire toutes les modifications nécessaires pour ajouter la fonctionnalité.
3. Ajouter, committer et pusher les modifications sur la branche de fonctionnalité.
    
    ```bash
    git add .
    git commit -m "Ajout de la fonctionnalité <nom_de_la_fonctionnalité>"
    git push origin feature/nom_de_la_fonctionnalité
    
    ```
    

## Appliquer les changements sur la branche principale :

1. Récupérer les dernières modifications de la branche principale.
    
    ```bash
    git checkout main
    git pull origin main
    
    ```
    
2. Merge la branche principale dans la branche de fonctionnalité et gérer les éventuels conflits.
    
    ```bash
    git checkout feature/nom_de_la_fonctionnalité
    git merge main
    
    ```
    
3. Créer une Pull Request (PR) sur la plateforme de gestion de code et demander une revue d'un membre du groupe.
4. Après que la revue et les tests soient passés, merger la branche de fonctionnalité dans la branche principale.
    
    ```bash
    git checkout main
    git merge feature/nom_de_la_fonctionnalité
    
    ```
    
5. Pousser les modifications sur la branche principale.
    
    ```bash
    git push origin main
    
    ```
    

## Résumé des commandes Git :

```bash
git clone <https://github.com/JohannDietrichGitHub/groupe-8-Devops.git>
cd groupe-8-Devops
git checkout main
git pull origin main
git checkout -b feature/nom_de_la_fonctionnalité
# Modifications du code
git add .
git commit -m "Ajout de la fonctionnalité <nom_de_la_fonctionnalité>"
git push origin feature/nom_de_la_fonctionnalité
git checkout main
git pull origin main
git checkout feature/nom_de_la_fonctionnalité
git merge main
# Résolution des conflits si nécessaire
# Créer une Pull Request sur la plateforme de gestion de code
git checkout main
git merge feature/nom_de_la_fonctionnalité
git push origin main

```
