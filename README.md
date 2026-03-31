# 🚀 Hackat’Innov - Système de Gestion de Hackathons

![PHP](https://img.shields.io/badge/PHP-8.4-777bb4.svg?style=flat-square&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479a1.svg?style=flat-square&logo=mysql)
![Vue.js](https://img.shields.io/badge/Vue.js-3.0-4fc08d.svg?style=flat-square&logo=vue.js)

## 📝 Présentation du Projet
**Hackat’Innov** est une plateforme dédiée à l'organisation et à la gestion d'événements de type hackathon. Ce projet propose une architecture backend robuste (API REST JSON), une base de données relationnelle sécurisée et une interface d'administration pour la gestion des événements (Conférences et Initiations).

Ce travail met l'accent sur la **cybersécurité (OWASP)**, l'**intégrité des données** et les **architectures réseaux sécurisées**.

---

## 🏗️ Architecture du Projet
Le projet suit une structure modulaire pour une meilleure maintenance :

* **/api/** : Points d'entrée de l'API (recherche de hackathons).
* **/src/** : Classes métiers (Membre, Evenement, Conference, Initiation).
* **/util/** : Utilitaires techniques (connexion PDO).
* **/sql/** : Scripts de création de la base de données et jeux d'essais.
* **/tests/** : Tests unitaires avec PHPUnit.
* **admin_evenement.php** : Interface d'administration sécurisée.

---

## 🛡️ Sécurité & Intégrité
Points clés mis en œuvre :
* **Requêtes Préparées (PDO) :** Protection contre les injections SQL.
* **Transactions SQL :** Garantie de l'atomicité lors des insertions en tables "Mère/Fille".
* **Filtrage des entrées :** Utilisation de `filter_input` pour désinfecter les saisies utilisateurs.
* **Architecture DMZ :** Isolation du serveur de base de données du réseau public.

---

## 🚀 Installation

1.  **Serveur Local :** Utiliser Laragon ou XAMPP (PHP 8.2+ requis).
2.  **Base de données :** Exécuter les scripts SQL fournis pour créer la base `hackatinnov`.
3.  **Configuration :** Ajuster les paramètres de connexion dans `util/bdd.php`.
4.  **Autoloading :**
    ```bash
    composer install
    ```

---

## 🧪 Tests Unitaires
Le projet suit la méthodologie **TDD** (Test Driven Development). Pour lancer les tests :
```bash
./vendor/bin/phpunit tests
