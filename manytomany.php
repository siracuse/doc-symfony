<form action="" method="post" class="form-example">
    <input type="text" name="firstname" class="input-firstname" id="firstname" required>
    <label for="firstname" class="label-firstname">0,n</label>--------------
    <label for="secondname" class="label-secondname">0,n</label>
    <input type="text" name="secondname" class="input-secondname" id="secondname" required>

    <input type="submit" value="Valider" name="manytomany">
</form>

<?php

if (isset($_POST['manytomany'])) {
    $firstname = ucfirst($_POST['firstname']);
    $secondname = ucfirst($_POST['secondname']);

    $response = '<h3><a href="https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#many-to-many-bidirectional" target=_blank>Relation Many-To-Many - Bidirectional</a> </h3>';
    $response .= '<div class="code"><code>class ' . $firstname;
    $response .= '<br> {';
    $response .= '<br> /**';
    $response .= '<br> * @ORM\ManyToMany(targetEntity="' . $secondname . '", inversedBy="' . lcfirst($firstname) . 's")';
    $response .= '<br> * @ORM\JoinTable(name="' . lcfirst($firstname) . 's_' . lcfirst($secondname) . 's")';
    $response .= '<br> */';
    $response .= '<br> private $' . lcfirst($secondname) . 's;</code></div>';

    $response .= '<br><hr><br>';
    $response .= '<div class="code lastcode"><code>class ' . $secondname;
    $response .= '<br> {';
    $response .= '<br> /**';
    $response .= '<br> * @ORM\ManyToMany(targetEntity="' . $firstname . '", mappedBy="' . lcfirst($secondname) . 's")';
    $response .= '<br> */';
    $response .= '<br> private $' . lcfirst($firstname) . 's;</code></div>';
    echo $response;
    unset($_POST);
}

?>


