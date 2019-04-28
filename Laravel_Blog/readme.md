D'abord vous devrez installer(ou avoir déjà installer ):

1) composer install
2) npm install

Puis définissez votre fichier de paramètres .env avec vos paramètres de base de données(nom de base, votre login et mot de passe)

Apres générer la clé avec la commande:

  php artisan key:generate

Suite vous devez créer toutes les migrations avec la commande:

  php artisan migrate --seed

 A la fin exécutez le serveur avec la commande :

  php artisan serve

---------------------------------------------------------------------------------------------------------

Description du projet et des choix:

On a choisi de travailler avec phpMyAdmin parce que l'on a installé le serveur virtuel "MAMPserveur"(WAMP/LAMP)
et le virtuel phpMyAdmin est par defaut.  
On a pas trop utilisé le Git car on a programmé sur seule machine, sur la deuxieme on n'a pas reussi lancer le projet il y avait des
problemes avec phpMyAdmin notamment liés aux connexions avec de bases, nous avons passés pas mal de temps pour résoudre le probleme mais nous n'avons pas reussi et c'est pour cela que nous sommes resté sur seule machine, mais chacun s'est autant investi , et nous avons travaillé en équipe !


INSTRUCTION POUR REALISER LE TEST:

Connecter avec votre propre compte avec google+
Puis appuyer sur le "Logout" pour pouvoir tester Authentification avec votre comte lequel vous allez créer(appuyer sur Registrer puis saisissez  votre nom, email , mot de passe)
Vous allez voir le page avec votre Nom et 3 dernière articles publier, Appuyer sur diffèrents catégories et choisissez une parmi les 4 premières.
Appuyer sur « Create Post » pour pouvoir créer votre propre article, ici on a choisi l’attribut en HTML « required » ça veut dire tous les champs sont obligatoire à remplir pour pouvoir créer votre propre article.
Suite appuyer sur « Home » et vous allez voir que votre article va apparaitre aussi sur le page d’accueil, après vous pouvez le supprimer.
A la fin allez sur "Contact Us".

Fonctionnalités:
CRUD 
utilisation vuejs
google autorisation
Identification


Remarque : le projet était très intéressent à réaliser.  On a visé plusieurs fonctionnalités, il en y a lequel que on a essayé mais on ne les a pas réussis (comme par exemple ajout de rôles utilisateur), mais c’est plus au niveau de temps que on était limité (par rapport aux révisions des autres examens.) .
Nous avons trouvé ce projet très enrichissant et nous avons beaucoup appris au cours de ce semestre.
