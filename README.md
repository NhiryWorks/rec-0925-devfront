# Projet Test Frontend – Intégration Maquettes

Ce dépôt est le fork public de [AAAEP/rec-0925-devfront](https://github.com/AAAEP/rec-0925-devfront).  
Il contient mon travail d’intégration des maquettes fournies, en HTML sémantique et CSS avec Tailwind.

---

## 🚀 Installation & Lancement

### Prérequis
- Node.js (>= 18)
- npm (ou yarn)

### Étapes
```bash
# 1. Installer les dépendances
npm install

# 2. Lancer le serveur de développement
npm run dev

# 3. Compiler la version production
npm run build
```

⚠️ Les instructions de lancement sont identiques au projet de base.  
Aucun changement particulier n’a été apporté à la configuration de build.

---

## 🎨 Notes de design

- **Incohérences rencontrées**
  - Pour la réservation « Assurance », les couleurs définies initialement ne respectaient pas les normes d’accessibilité. J’ai donc ajusté la palette afin de garantir un meilleur contraste et une meilleure lisibilité.
  - La couleur de texte globale n’était pas définie précisément → j’ai appliqué `#2C2C2C` comme texte par défaut.

- **Arbitrages réalisés**
  - Utilisation de `grid` pour la mise en page des plans tarifs, car plus proche de la maquette que `flex`.
  - J’ai choisi d’utiliser `text-center` pour certains titres afin de respecter l’équilibre visuel.
  - Les icônes de la maquette ont été remplacées par des icones de icomoon faute d’assets fournis.

- **Polices**
  - Police principale : [Lato](https://fonts.bunny.net/fonts/lato) via Bunny.net.
  - Fallbacks : `sans-serif` pour garantir une lecture correcte si la police ne charge pas.

---

## ⏱ Temps passé

Environ **20 heures**

---

## ✅ Livrable

- Lien vers mon fork : [https://github.com/NhiryWorks/rec-0925-devfront](https://github.com/NhiryWorks/rec-0925-devfront)  
- Pull Request ouverte vers le dépôt d’origine.
