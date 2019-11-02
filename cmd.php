<h1>Les CMD utiles</h1>

<?php
include('class/Cmd.php');
$cmd = new Cmd('Nouveau projet Symfony 3', 'composer create-project symfony/framework-standard-edition project-name');
echo($cmd->getResponse());

$cmd = new Cmd('Création d\'un bundle', 'php bin/console generate:bundle');
echo($cmd->getResponse());

echo '<hr>';

$cmd = new Cmd('Création de la bdd', 'php bin/console doctrine:database:create');
echo($cmd->getResponse());

$cmd = new Cmd('Configuration de la bdd',
    '# app/config/config.yml<br>
    doctrine:<br>
    &nbsp;dbal:<br>
    &nbsp;&nbsp;driver:   pdo_mysql<br>
    &nbsp;&nbsp;host:     "%database_host%"<br>
    &nbsp;&nbsp;dbname:   "%database_name%"<br>
    &nbsp;&nbsp;user:     "%database_user%"<br>
    &nbsp;&nbsp;password: "%database_password%"<br>'
);
echo($cmd->getResponse());

echo '<hr>';

$cmd = new Cmd('Création d\'une entité', 'php bin/console doctrine:generate:entity');
echo($cmd->getResponse());

$cmd = new Cmd('Générer les getters et les setters', 'php bin/console doctrine:generate:entities BundleName:entity_name');
echo($cmd->getResponse());

$cmd = new Cmd('Visualiser les requetes qui vont être effectuées', 'php bin/console doctrine:schema:update --dump-sql');
echo($cmd->getResponse());

$cmd = new Cmd('Exécuter les requêtes affichées précédemment', 'php bin/console doctrine:schema:update --force');
echo($cmd->getResponse());


?>





