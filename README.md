# Todo

Test technique sur la réalisation d'une to do-list

## 1 : List all TODOs

- Pour avoir accés à la BDD il faut ce rendre dans le dossier data puis renommé `db_connect_rename.php` en `db_connect.php` puis compléter les fonctions :

- $sName
- $uName
- $pass
- $db_name

#### Si la connexion est bonne alors le message

- "connected to the database" devrait aparaître en haut de l'écran. (ce refférer à l'image dans le dossier image `success_BDD_connect.png`)

#### Si la connexion échou alors le message :

- "connection failed : (erreur en cours)" devrait aparaître. (ce refférer à l'image dans le dossier image `erreur_BDD_connect.png`)

#### Base de données

- Il est possible d'importer la base de donnée utilisé durant le développement dans le fichier `database_todo.sql` situé dans le dossier data

## 2 : Change a TODO state

- La ligne 11 (`echo "connected to the database";`) du fichier db_connect.php à était commenté car elle provoqué un bug d'affichage sur les TODOs.
- Dans le fichier `index.php` la ligne 66 permet de rafraichir la page et permet de réorganiser les TODOs (les tâches en cours sont en hauts et dans l'ordre de création et les tâches complété sont en bas) (ce refférer aux images dans le dossier image `2Checked_1Unchecked_befor.png` et `2Checked_1unchecked_after.png`)
