# MANGATHEQUE

## Introduction

Mon projet consistait à créer une bibliothèque de manga.
Le site se consistue de :

- une page d'accueil avec la liste de tout les mangas.
- une fiche profil avec leurs informations.
- une page login pour se connecter.
- une page inscription pour s'inscrire.
- une page contact avec formulaire.
- une barre de recherche.

La base de données à été relié avec la `function getConnection():PDO.` `[(function/db.php)].
Un tableau multi dimensionnelle est visible dans [(data/books.php)].


### INDEX - ACCUEIL 

La page d'accueil est constistué a partir d'une page [index.php]. Les partis header, nav et footer on été réafecter dans leurs pages respective dans le dossier layout afin d'être organisé.

Layout est donc constitué de :

- [header.php]
- [nav.php]
- [footer.php]

Pour la nav & le footer, je me suis inspiré de notre exercice My corps et je suis allé exploré sur Tailwindcss et Flowbite pour découvrir leurs potentiels. J'ai fais soft afin de pouvoir me consacrer aux autres partis du site.

Dans mon index, nous pouvons y retrouver :
- un `try catch` qui vient reccuperer et afficher qu'une erreur de connexion est en cours.
- la requete `$stmt = $pdo->query("SELECT * FROM books");` qui vient lancer l'instance avec PDO.
- suivis d'un `$stmt->fetchAll(PDO::FETCH_ASSOC);` pour récuperer et lire les résultats.
Ces requêtes sont fonctionnelles et permettent à PDO d'afficher les mangas sur `index.php` accompagné de la bouble `foreach ($books as $manga) `.

- Une 2e requête existe dans la page mais n'est pas fonctionnelle.
Rien ne se rajoute au niveau de la base de donnée. Je n'ai pas encore trouvé ce qui n'allais pas, mais j'ai tendance à me perdre dans les noms de mes variables. (ligne 19 et 21).

### MANGA - PAGE PROFIL

Quand on clique sur la photo du manga en page [index.php] sur l'accueil, on accède aux informations du manga avec :
- son titre, 
- la photo du premier tome, 
- son autheur, 
- un sommaire sur l'histoire, 
- son genre (plusieurs devraient apparaitrent et son enregister dans la base de données, mais qu'un seul s'affiche.),
- le nombre de tomes parru en France 
- et son année de sortie.

Au début, cela ne fonctionnait pas : au lieu d'avoir seulement les informations d'un seul mangas, toutes les informations s'affichaient pour tout les titres. Je me suis pas mal melanger dans les noms des variables et parfois des erreurs de synthaxe.

J'ai essayé de faire : `$stmt = $pdo->query("SELECT * FROM books AS b INNER JOIN gender_books AS g_b ON g_b.books_id = b.id_books INNER JOIN gender AS g ON g_b.gender_id = g.id");`
pour affiché les plusieurs genres de mangas. Mais celle ci reste obsolète.

### BASE DE DONNEES - PHPMYADMIN 

Ma base de donnée contient plusieurs tables :
- books => pour afficher les mangas
- gender => pour les genres des mangas
- gender_books => pour servir de clé étranger aux 2 tables précédentes afin d'afficher plusieurs genre
- members et inscprtion => je me suis melanger entre ces 2 tables pour les informations des pages [contact.php] [inscription.php] et [login.php].

J'ai passé beaucoup de temps à travaillé sur la base de donnée pour pouvoir tout afficher.
J'ai eu pas mal d'erreur inconnu que je ne connaissais pas et apres beaucoup de recherche que je ne comprenais pas non plus. En regardant sur internet, j'ai essayé de verifier toute les étapes possibles mais j'avais toujours des erreurs incconu. (asset/img/error.png).


J'ai donc tout repris le lendemain pour la base de données en reprenant PDO de 0 dans un dosier seul, j'ai reussi à affiché a l'aide de var_dump les données de mes mangas. J'ai donc rapatrié le dossier au projet pour l'affichage des mangas. 



### REGISTRER - INSCRIPTION

J'ai tenté de faire un espace inscription, mais celui ci affiche un [NOT FOUND The requested URL was not found on this server] au moment de l'essaie de l'inscription. Je pense qu'il y a un liens avec la 2e requete pdo de la page [index.php] qui n'est pas fonctionnelle. 
[registrer.php]


### LOGIN - CONNEXION 

Un espace connexion est affiché. Je n'ai malheureusement pas pu le testé à cause de l'erreur au moment de l'inscription. 
Je ne peux pas dire s'il est fonctionnelle ou non.
[login.php]

### CONTACT - CONTACT

Une page [contact.php] à été créer afin de venir inclure un formulaire de contact. Lors du test rien ne se passe au niveau de la base de donnée : pas d'ajout. Aucun message d'erreur ne s'affiche non plus. La page fait directement un rebond sur la page comme si rien ne s'était passé. Il doit y avoir une imcompréhension entre la base de donnée. Je n'ai pas eu le temps de vérifier. 


## Conclusion
J'ai encore beaucoup de pratique a revoir. Mais a force d'excercer, je me repère davatange. 
Je compte bien continuer ce projet par la suite.






