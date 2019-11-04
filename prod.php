<?php
include('class/Cmd.php');

?>
<h3 class="mb-5">Mise en production</h3>


<div class="title-cmd mb-2">Checklist :</div>
<ul>
    <li>Supprimer les dossiers <code>dev</code> et <code>prod</code> dans le dossier <code>var/cache/</code></li>
    <li>Vérifier ou créer les pages d'erreur twig</li>
    <li class="title-cmd mb-2">Vérifier la sécurité des dépendances :</li>
    <pre><code>&gt; php bin/console security:check</code></pre>

    <li><code></code></li>

</ul>

