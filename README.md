# Projet CRUD en PHP avec MySQL et Ajax

Ce dépôt Git contient un projet simple de CRUD (Create, Read, Update, Delete) développé en PHP, utilisant MySQL comme base de données et Ajax pour les interactions asynchrones. Ce projet permet de gérer une liste d'utilisateurs avec les opérations CRUD de base.

## Structure du Projet

Le projet est organisé de la manière suivante :

- **index.php** : La page principale affichant la liste des utilisateurs et offrant des fonctionnalités CRUD.
- **addFrom.php** : La page permettant d'ajouter un nouvel utilisateur.
- **script.js** : Le script JavaScript contenant les fonctions pour les opérations Ajax.
- **read_user.php** : Le script PHP pour récupérer et afficher la liste des utilisateurs.
- **update_user.php** : Le script PHP pour mettre à jour les informations d'un utilisateur.
- **mod_user.php** : Le script PHP pour récupérer les informations d'un utilisateur à des fins de modification.
- **delete_user.php** : Le script PHP pour supprimer un utilisateur.
- **conf.php** : La classe PHP contenant la configuration de la base de données et les fonctions pour les opérations CRUD.
- **add_user.php** : Le script PHP pour l'ajout d'un nouvel utilisateur.

## Instructions d'Utilisation

1. **Configuration de la Base de Données :** Assurez-vous de configurer correctement les paramètres de connexion à la base de données dans le fichier **conf.php**.

2. **Importation de la Base de Données :** Créez une base de données nommée `crud_project` et importez le fichier SQL fourni (**crud_project.sql**) pour créer la table nécessaire.

3. **Exécution du Projet :** Assurez-vous que votre serveur web (comme Apache) est configuré correctement et que le projet est accessible via votre navigateur.

4. **Utilisation :** Accédez à la page principale (index.php) pour voir la liste des utilisateurs. Vous pouvez ajouter, modifier et supprimer des utilisateurs en utilisant les fonctionnalités fournies.

## Notes

- Ce projet est conçu à des fins éducatives et peut nécessiter des ajustements en fonction des besoins spécifiques du déploiement.
- Assurez-vous d'utiliser des pratiques de sécurité appropriées, telles que la validation et l'échappement des données, lors de la création de projets en production.

N'hésitez pas à explorer et à personnaliser le projet en fonction de vos besoins spécifiques. Bon codage !