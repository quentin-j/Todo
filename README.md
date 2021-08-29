# Todo

Test technique sur la réalisation d'une to-do list

## 1 : List all TODOs

- Pour avoir accès à la BDD il faut se rendre dans le dossier data puis renommer `db_connect_rename.php` en `db_connect.php` puis compléter les fonctions :

- $sName
- $uName
- $pass
- $db_name

#### Si la connexion est bonne alors le message

- "connected to the database" devrait aparaître en haut de l'écran. (se refférer au fichier dans le dossier image `success_BDD_connect.png`)

#### Si la connexion échoue alors le message :

- "connection failed : (erreur en cours)" devrait aparaître. (se refférer au fichier dans le dossier image `erreur_BDD_connect.png`)

#### Base de données

- Il est possible d'importer la base de donnée utilisée durant le développement dans le fichier `database_todo.sql` situé dans le dossier data

## 2 : Change a TODO state

- La ligne 11 (`echo "connected to the database";`) du fichier db_connect.php a été commentée car elle provoqué un bug d'affichage sur les TODOs.
- Dans le fichier `index.php` la ligne 66 permet de rafraîchir la page et permet de réorganiser les TODOs (les tâches en cours sont en hauts et dans l'ordre de création et les tâches complétées sont en bas) (se refférer aux fichiers dans le dossier image `2Checked_1Unchecked_befor.png` et `2Checked_1unchecked_after.png`)

## 3 : Detail a TODO

- ajout d'une page 404 et d'une url personlisée si l'utilisateur entre un ID inexistant dans l'url personnalisé (se référer aux fichiers dans le dossier image `singlePage.png`/ `customURL.png`/`404Page.png`/`custom404URL.png`)

## 4 : Add a new TODO

- message d'erreur ou de succés dans l'url (se référer aux fichiers `erreurURLNoTitle.png` et `successUrl.png`)
- possibilité d'enregistrer en base de donnée un TODO sans description (se référer aux fichier `newTodo.png` et `newTodoBDD.png`)
- affichage du message d'erreur en cas de validation du formulaire d'ajout si le titre est manquant (se référer au fichier `errorNoTitle.png`)