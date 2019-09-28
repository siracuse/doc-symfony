<?php

include('class/Cmd.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Generator relation doctrine</title>
    <link href="style.css" rel="stylesheet">
</head>


<body>
    <?php include('menu.php'); ?>

    <?php
    $cmd = new Cmd('Nouveau projet Symfony 3', '>composer create-project symfony/framework-standard-edition project-name');
    echo ($cmd->getResponse());
    ?>
    <!-- Nouveau projet Symfony 3
    <div class="code">
        <code>
            >create-project symfony/framework-standard-edition project_name
        </code>
    </div> -->



</body>

</html>


