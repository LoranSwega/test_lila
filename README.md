# Test de développement

Le but de ce test est de voir ta façon d'aborder une tâche et ta façon d'écrire du code.

## Consigne

Intégrer la page web mobile contenue dans le fichier PSD/index.psd à partir de l'architechture de fichiers fournis.

## Contraintes

* Intégre le design contenu dans index.psd en html et css (version mobile uniquement) en respectant l'organisation des dossiers fournis
* Pour le listing des bons plans, utilise la variable PHP $posts, présente dans index.php (explications à la suite)
* Utilise ton compte GitHub pour rendre ton travail de la manière suivante :
1. Fork ce repo pour pouvoir travailler sur le projet depuis ton compte github
2. Commit tes modifications sur ton repo
3. Fais moi une pull request une fois que tu as terminé l'exercice pour que je fasse une review de ton code

**Si jamais tu galère avec github** : https://www.grafikart.fr/formations/git/fork-pull-request

## Docs

La variable $posts contient un tableau d'objets PHP. L'objet posède les propriétés suivantes :
* username (String)
* profile_pic (String)
* is_premium (BOOL)
* date (Int)
* type = 'news' | 'deal' (String)
* post_content (String)
* url (String)

## Resultat attendu

* Chaque post devra être clickable et ouvrir le lien contenu dans la propriété **url** dans une nouvel onglet
* Les utilisiteurs premium auront leur nom de couleur orange, les autres de couleur noire
* La propriété **type** peut être égale à "news" dans le cas d'une actualité ou "deal" dans le cas d'une promotion. 
* Le petit rond de couleur sera orange dans le cas d'une actualité et bleu dans le cas d'une promotion
* La date doit être formatée comme dans le PSD, ex : le 23/04/16