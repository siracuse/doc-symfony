<?php
include('class/Cmd.php');

?>
<h3 class="mb-5">FOSUser Bundle</h3>

<?php
$cmd = new Cmd('Pour créer un utilisateur', 'php bin/console fos:user:create nomutilisateur email motdepasse');
echo($cmd->getResponse());

$cmd = new Cmd('Pour activer un utilisateur', 'php bin/console fos:user:activate nomutilisateur');
echo($cmd->getResponse());

$cmd = new Cmd('Pour désactiver un utilisateur', 'php bin/console fos:user:deactivate nomutilisateur');
echo($cmd->getResponse());

$cmd = new Cmd('Mettre le ROLE_ADMIN', 'php bin/console fos:user:promote nomutilisateur ROLE_ADMIN');
echo($cmd->getResponse());

$cmd = new Cmd('Enlever le ROLE_ADMIN', 'php bin/console fos:user:demote nomutilisateur ROLE_ADMIN');
echo($cmd->getResponse());

$cmd = new Cmd('Changer le mot de passe', 'php bin/console fos:user:change-password nomutilisateur nouveaumotdepasse');
echo($cmd->getResponse());


//
//<p>
//    Setup / activer username et remplacer automatiquement le username par l'email pour l'authentification / rajouter des
//    champs supplémentaire dans le fos_user / template Twig
//</p>
//
//<div class="div-cmd mb-4">
//    <div class="title-cmd mb-2">Nouveau projet Symfony 3.4 :</div>
//    <pre>
//        <code>&gt; composer create-project symfony/framework-standard-edition project-name</code>
//        <code>&gt; composer create-project symfony/framework-standard-edition project-name</code>
//        <code>&gt; composer create-project symfony/framework-standard-edition project-name</code>
//    </pre>
//</div>
//
//<p>
//
//
//</p>
//
//<a href="https://ourcodeworld.com/articles/read/205/how-to-add-custom-field-to-the-user-table-with-fosuserbundle-manually-in-symfony">Source</a>