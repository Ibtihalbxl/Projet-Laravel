# DevProfile

DevProfile est une application web développée avec Laravel permettant aux développeurs de créer, gérer et présenter leur profil professionnel en ligne. Elle permet notamment la génération automatique d’un CV personnalisé au format PDF.

---

## 🚀 Fonctionnalités

- Authentification utilisateur avec Laravel Breeze
- Modification du profil utilisateur (nom, email, nom d'utilisateur, bio)
- Ajout, modification et suppression de projets
- Gestion des compétences techniques
- Génération de CV PDF contenant le profil, les compétences et les projets
- Interface propre, responsive et accessible

---

## 🛠️ Technologies utilisées

- **Laravel 10+** – Framework backend
- **Blade** – Moteur de templates Laravel
- **Tailwind CSS** – Pour une interface moderne et responsive
- **Laravel Breeze** – Authentification légère
- **MySQL** – Base de données
- **domPDF** – Génération de CV en PDF
- **PHP 8+**, **Composer**, **NPM**, **Vite**

---

## ⚙️ Installation

```bash
git clone https://github.com/Ibtixalbxl/devprofile.git
cd devprofile

composer install
npm install && npm run build

cp .env.example .env
php artisan key:generate

# Configuration de la base de données dans le fichier .env
php artisan migrate
php artisan serve
