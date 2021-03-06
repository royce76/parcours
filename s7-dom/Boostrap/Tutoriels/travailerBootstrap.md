# L'outil Bootstrap

Maintenant que vous savez ce qu'est un framework, le moment est venu de vous expliquer rapidement la naissance de Bootsrap histoire que vous sachiez son origine et comment l'intégrer dans votre site.

## 1\.Histoire du framework

A l'origine Bootstrap était un projet interne à la société **Twitter**. Plusieurs ingénieurs de la société travaillaient ensemble mais chacun avec leur manière de coder ce qui menait à des **incohérences, des bugs et un temps de maintenance très élevé**.

Mark Otto et Jacob Thornton ont alors commencé à développer Bootstrap, un framework front-end permettant de **standardiser** le travail de tous ces développeurs. Les **résultats bénéfiques** se sont vite fait sentir et l'équipe a décidé d'améliorer le projet avant de le placer sous licence open-source en 2011 puis de le mettre sur GitHub.

Le succès et l'engouement sont immédiats et Bootstrap finit par devenir le framework front-end **le plus populaire du marché**.

## 2\.Intégrer Bootstrap à son projet

Avant d'intégrer Bootstrap, il faut d'abord se poser une question, quelle version intégrer ?

Bien souvent il existe **plusieurs versions d'un même outil**, certaines étant plus ou moins stables et performantes. Le dilemme est donc de savoir si on utilise  la dernière technologie à ses risques et périls ou si l'on se passe de certaines fonctionnalités pour utiliser un outil stable.

Sur un framework front-end comme Bootstrap, les risques sont moindres, nous travaillerons donc avec la **dernière version** à savoir la 4. Si vous utilisez d'autres versions comme la 3, certaines de nos explications ne seront peut-être pas valables.

Il existe deux manières d'intégrer Bootstrap à son projet, aucune n'est meilleure que l'autre, c'est à vous de faire votre choix

**A\.Ajouter directement les fichiers Bootstrap**

Concrètement Bootstrap se présente sous la forme d'un **ensemble de fichiers CSS et JS** avec des classes et des scripts déjà écrits que vous pouvez utiliser à votre guise.

Pour se faire il suffit d'ajouter le CSS et le JavaScript Bootsrap à votre projet, comme vous ajouteriez n'importe quel fichier.

Pour récupérer les fichiers de Bootstrap rendez-vous à cette adresse : https://getbootstrap.com/docs/4.5/getting-started/download/. Choisissez "Compiled CSS and JS". Nous ne téléchargerons pas les fichiers source juste en dessous, ils s'utilisent quand vous souhaitez apporter des modifications structurelles au framework, ce qui n'est pas notre cas.

Vous récupérez normalement un dossier bootstrap à décompresser. A l'intérieur se trouve un dossier CSS et un dossier JS. **Tous les fichiers CSS sont à ajouter dans le dossier CSS de votre projet et les fichiers JS dans le dossier JS.**

Il faut maintenant **faire le lien** vers ces fichiers dans vos pages HTML. Nous allons donc ajouter le CSS Bootstrap à notre page dans le ```<head>``` à l'aide la balise ```<link>``` comme nous avons l'habitude de le faire :

```
<link rel="stylesheet" href="css/bootstrap.css">

```
Nous pouvons maintenant utiliser les différente mises en forme que nous propose Bootstrap. Cependant nous voulons aussi avoir accès aux fonctionnalités JavaScript.

Cela se fait à l'aide de la balise ```<script>``` et de l'attribut ```src``` juste avant la fermeture de la balise ```</body>```. Il est nécessaire de placer le JavaScript à la **fin de votre document** pour éviter les bugs mais nous verrons cela plus en détails dans la partie dédiée au JavaScript.

```
<script src="js/bootstrap.js"></script>
</body>

```

NB: pour fonctionner Bootstrap utilise Jquery, il est donc nécessaire de charger également la librairie Jquery. Si vous utilisez une base Boilerplate (ce que vous devriez faire) dans ce cas Jquery est déjà inclus à votre projet. Idem pour Popper.js.

**B\.Utiliser  un CDN**

Voilà une deuxième manière, un peu plus simple, d'utiliser Bootsrap. Cependant vous devez vous demander ce qu'est un CDN (Content Delivery Network). Pour faire simple il s'agit d'un serveur qui met gratuitement du contenu à disposition du public.

Au lieu de télécharger les fichiers Bootstrap on peut donc simplement **inclure un lien vers ceux-ci sur le CDN**.

Pour ce faire rendez-vous à cette adresse https://getbootstrap.com/docs/4.5/getting-started/introduction/ rubrique "Quick start" et vous trouverez les différents liens CDN à ajouter à votre projet. A l'heure où nous écrivons ces lignes voilà les liens à intégrer à votre projet :

Lien CSS à charger avant vos feuilles de style personnelles

```
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

```

Liens vers Javascript et Jquery à inclure juste avant la fermeture de votre balise ```<body>```

```
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

```

Le risque cependant avec un CDN est que si le serveur connaît un problème alors **Bootstrap sera inutilisable**, même chose si vous n'avez pas accès à internet. Par contre si le CDN Bootsrap est déjà en cache dans le navigateur du visiteur alors **le chargement de la page sera beaucoup plus rapide**. A vous donc de faire votre choix de méthode d'intégration.

## 3\.Sources

- https://fr.wikipedia.org/wiki/Bootstrap_%28framework%29

- https://v4-alpha.getbootstrap.com/
