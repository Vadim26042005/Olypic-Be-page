# 🚀 JO-Event menager

Ceci est un projet designier a faire en groupe mais je l'est fait tout seul et c'est moi le premier a le finir.
Et ce guide est fait pour le lancer en local

---

## 🛠️ Installation locale (WAMP recommandé)

1. Télécharger et installer **WampServer** : [https://www.wampserver.com/](https://www.wampserver.com/)
2. Lancer WAMP et accéder à **phpMyAdmin**
3. Importer la base de données :
   - Aller dans phpMyAdmin
   - Créer une nouvelle base nommée **gostage_database**
   - Importer le fichier `gostage_database.sql` fourni dans ce dépôt
4. Copier le dossier du projet dans :
   C:\wamp64\www\GoStage\

markdown
5. Accéder au site depuis :
http://localhost/GoStage/view/connexion.php



---

## 📦 Fonctionnalités principales

### 👤 Authentification

- **Création de compte**  
  ↳ `view/registration.php` → `be-account/registration.php`

- **Connexion**  
  ↳ `view/connection.php` → `be-account/connection.php`

---

### 🧑‍🎓 Espace User

- **Modification du profil**  
  ↳ `view/user-profile.php` → `be-profile/data_update`

- **Consulter des et modifier des evenement**  
  ↳ `view/create-event.php`

- **supprimer les evenelent**  
  ↳ `view/create-event.php` → `be-events/delete-event.php`


---
### Comment lancer
- **Aller dans le dossier `www` de WampServer**  
  ↳ `C:\wamp64\www`  
  Copiez le dossier `Olypic-Be-page` dans ce répertoire.

- **Lancer WampServer**  
  Assurez-vous que le serveur Apache et MySQL sont **au vert** dans l'icône de la barre des tâches.

- **Accéder au site dans votre navigateur**  
  ↳ [http://localhost/GoStage/view/connexion.php](http://localhost/Olypic-Be-page/index.php)

## 🧪 Technologies utilisées

- PHP / HTML / CSS / JavaScript
- MySQL (via phpMyAdmin)
- WAMP (développement local)
- GitHub (gestion de version)

---

## ✅ Contenu du dépôt

- Code source complet du projet
- Composants réutilisables (`header`, `footer`)
- Fichier SQL : `olympic-sahour.sql`
- README explicatif

---

## 🔗 Liens utiles

- 📁 Dossier projet : `Olypic-Be-page`
- 🗃️ Base de données : `olympic-sahour.sql`

---

## 📌 Remarques

Ce projet est en ligne vous pouvez aller le voir sur https://jo-hermanoes.free.nf

---
