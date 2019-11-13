<h1 class="mb-5">Les CMD utiles</h1>

<!--<div class="div-cmd">-->
<!--    <div class="title-cmd mb-2">Nouveau projet Symfony 3</div>-->
<!--    <pre><code>> composer create-project symfony/framework-standard-edition project_name</code></pre>-->
<!--</div>-->

<!--<code>&lt;section&gt;</code>-->


<?php
include('class/Cmd.php');

$cmd = new Cmd('Création de la bdd', 'php bin/console doctrine:database:create');
echo($cmd->getResponse());


echo '<hr>';

$cmd = new Cmd('Création d\'une entité', 'php bin/console doctrine:generate:entity');
echo($cmd->getResponse());

$cmd = new Cmd('Générer les getters et les setters', 'php bin/console doctrine:generate:entities BundleName:entity_name');
echo($cmd->getResponse());

echo '<hr>';

$cmd = new Cmd('Visualiser les requetes de création et de modification de table', 'php bin/console doctrine:schema:update --dump-sql');
echo($cmd->getResponse());

$cmd = new Cmd('Exécuter les requêtes affichées précédemment', 'php bin/console doctrine:schema:update --force');
echo($cmd->getResponse());

echo '<hr>';

$cmd = new Cmd('Visualiser les requetes de création, modification et de suppression', 'php bin/console doctrine:schema:update --complete --dump-sql');
echo($cmd->getResponse());

$cmd = new Cmd('Exécuter les requêtes affichées précédemment', 'php bin/console doctrine:schema:update --complete --force');
echo($cmd->getResponse());

echo '<hr>';

$cmd = new Cmd('Création de formulaire à partir d\'une entitée ', 'php bin/console generate:doctrine:form BundleName:entity_name');
echo($cmd->getResponse());

?>




