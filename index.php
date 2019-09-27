





<!DOCTYPE html>
<html>
<head>
    <title>Generator relation doctrine</title>
    <link href="style.css" rel="stylesheet">
</head>


<body>
    <form action="" method="post" class="onetomany">
        <input type="text" name="firstname" class="input-firstname" id="firstname" required>
        <label for="firstname" class="label-firstname">0,n</label>--------------
        <label for="secondname" class="label-secondname">1,1</label>
        <input type="text" name="secondname" class="input-secondname" id="secondname" required>

        <input type="submit" value="Valider" name="onetomany">
    </form>

    <?php

if (($_POST['onetomany'])) {
    $firstname = ucfirst($_POST['firstname']);
    $secondname = ucfirst($_POST['secondname']);

    $response = '<h3>Relation One-To-Many - Bidirectional </h3>';
    $response .= '<div class="code"><code>class '.$firstname;
    $response .= '<br> {';
    $response .= '<br> /**';
    $response .= '<br> * @ORM\OneToMany(targetEntity="'.$secondname.'", mappedBy="'.lcfirst($firstname).'"';
    $response .= '<br> */';
    $response .= '<br> private '.lcfirst($secondname).'s;</code></div>';

    $response .= '<br><br><hr><br>';
    $response .= '<div class="code"><code>class '.$secondname;
    $response .= '<br> {';
    $response .= '<br> /**';
    $response .= '<br> * @ORM\ManyToOne(targetEntity="'.$firstname.'", inversedBy="'.lcfirst($secondname).'s"';
    $response .= '<br> * @ORM\JoinColumn(name="'.lcfirst($firstname).'_id", referencedColumnName="id"';
    $response .= '<br> */';
    $response .= '<br> private '.lcfirst($firstname).';</code></div>';
    echo $response;
    unset($_POST);
}

?>


<form action="" method="post" class="form-example">
        <input type="text" name="firstname" class="input-firstname" id="firstname" required>
        <label for="firstname" class="label-firstname">0,n</label>--------------
        <label for="secondname" class="label-secondname">0,n</label>
        <input type="text" name="secondname" class="input-secondname" id="secondname" required>

        <input type="submit" value="Valider" name="manytomany">
</form>

<?php

if (($_POST['onetomany'])) {
    $firstname = ucfirst($_POST['firstname']);
    $secondname = ucfirst($_POST['secondname']);

    $response = '<h3>Relation One-To-Many - Bidirectional </h3>';
    $response .= '<div class="code"><code>class '.$firstname;
    $response .= '<br> {';
    $response .= '<br> /**';
    $response .= '<br> * @ORM\OneToMany(targetEntity="'.$secondname.'", mappedBy="'.lcfirst($firstname).'"';
    $response .= '<br> */';
    $response .= '<br> private '.lcfirst($secondname).'s;</code></div>';

    $response .= '<br><br><hr><br>';
    $response .= '<div class="code"><code>class '.$secondname;
    $response .= '<br> {';
    $response .= '<br> /**';
    $response .= '<br> * @ORM\ManyToOne(targetEntity="'.$firstname.'", inversedBy="'.lcfirst($secondname).'s"';
    $response .= '<br> * @ORM\JoinColumn(name="'.lcfirst($firstname).'_id", referencedColumnName="id"';
    $response .= '<br> */';
    $response .= '<br> private '.lcfirst($firstname).';</code></div>';
    echo $response;
    unset($_POST);
}

?>

</body>

</html>


