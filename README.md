# Todo

Test technique sur la réalisation d'une to do-list

## 1 : List all TODOs

pour avoir accés à la BDD il faut ce rendre dans le dossier data puis renommé `db_connect_rename.php` en `db_connect.php` puis compléter les fonctions :

- $sName
- $uName
- $pass
- $db_name

#### Si la connexion est bonne alors le message : 

- "connected to the database" devrait aparaître en haut de l'écran. (ce refféreé à l'image dans le dossier image success_BDD_connect.png)

#### Si la connexion échou alors le message : 

- "connection failed : (erreur en cours)" devrait aparaître. (ce refféreé à l'image dans le dossier image erreur_BDD_connect.png)

#### Base de données

- il est possible d'importer la base de donnée utilisé durant le développement dans le fichier `database_todo.sql` situé dans le dossier data