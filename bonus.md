# Bonus

On a réussi à rendre l'affiche de notre site oBlog dynamique.  
En effet, toutes les données affichées se basent sur les tableaux du fichier `inc/data.php`.  
:muscle:

Maintenant, on va ajouter une couche intermédiaire entre les données, et notre code : des fonctions :nerd_face:

Pourquoi ?  
Tout simplement pour bien répartir les différentes parties (couches) du code :
  - les données source à afficher
  - comment afficher ces données (visuel)
  - gestion du contenu pour chaque page

## #1 - Fournir tous les articles

- écrire une fonction `getArticlesList()` retournant le tableau complet de tous les articles
- il sera nécessaire d'inclure le fichier `inc/data.php` afin d'avoir la liste dans le corps de la fonction
- supprimer l'inclusion du fichier `inc/data.php` de la page d'accueil, et n'utiliser que la fonction `getArticlesList` pour récupérer tous les articles

## #2 - Fournir les données sur 1 article

- écrire une fonction `getArticle($id)`
  - retournant le tableau complet de tous les articles
  - et prenant en paramètre l'id de l'article que l'on souahite récupéré
- il sera nécessaire d'inclure le fichier `inc/data.php` afin d'avoir la liste dans le corps de la fonction
- supprimer l'inclusion du fichier `inc/data.php` de la page d'un article, et n'utiliser que la fonction `getArticle` pour récupérer les données de l'article à afficher
