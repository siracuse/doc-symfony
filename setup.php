<h3 class="mb-5">Installation et mise en place du projet</h3>

<!--<div class="div-cmd">-->
<!--    <div class="title-cmd mb-2">Nouveau projet Symfony 3</div>-->
<!--    <pre><code>> composer create-project symfony/framework-standard-edition project_name</code></pre>-->
<!--</div>-->

<!--<code>&lt;section&gt;</code>-->


<?php
include('class/Cmd.php');
$cmd = new Cmd('Nouveau projet Symfony 3 :', '> composer create-project symfony/framework-standard-edition project-name');
echo($cmd->getResponse());
?>


<div class="title-cmd mb-2">Actions à réalisées pour un projet vierge :</div>
<ul class="mb-5">
    <li>Suppression du bundle AppBundle dans le répertoire src</li>
    <li>Supprimer l’appel du bundle Appbundle dans le <code>AppKernel.php</code></li>
    <li>Suppression de la route app dans <code>routing.yml</code></li>
    <li>Suppression du répertoire default dans <code>app/Ressources/views</code></li>
    <li>Mettre en commentaire les services liés à <code>AppBundle</code></li>
</ul>


<?php
$cmd = new Cmd('Création d\'un bundle :', '> php bin/console generate:bundle');
echo($cmd->getResponse());
?>

<div class="title-cmd mb-2">À faire lors de la création d'un bundle :</div>
<ul>
    <li>Suppression du fichier DefaultController.php dans <code>src/monBundle/Controller</code></li>
    <li>Suppression du dossier Default dans <code>src/monBundle/Ressources/views</code></li>
    <li>Modifier le composer.json : <code>"AppBundle\": "src/AppBundle" </code>--&gt; <code>"": "src/"</code></li>
    <li>Effectuer la commande: <code> composer dump-autoload</code></li>
</ul>
