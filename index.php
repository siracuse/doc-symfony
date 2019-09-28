<!DOCTYPE html>
<html>
<head>
    <title>Documentation Symfony</title>
    <link href="style.css" rel="stylesheet">
</head>


<body>
    <?php include('menu.php'); ?>

    <h1>Documentation Symfony 3.4</h1>

    <h2>Le but de ce site</h2>
    <p>J'ai créé ce site web afin de regrouper des mémos, des morceaux de code, des solutions et des outils
    dans le but de réaliser mes projets symfony plus facilement et rapidement </p>


    <h2><a href="cmd.php">CMD Utile</a> - Mes commandes les plus utilées</h2>
    <p>Sur cette page, vous retrouverez une liste de commande terminal que j'utilise le plus souvent.
    Cela peut être la création d'un bundle à la génération des getters et setters. </p>

    <h2>Formulaire de génération d'annotation relative au relation entité</h2>
    <p>Sur ces pages, vous retrouverez plusieurs formulaires permettant de générer les annotations automatiquement.<br>
    Par exemple pour une relation OneToMany entre un "Produit" et une "Marque"
    (Une marque peut avoir plusieurs produits, mais un produit n'est associé qu'a une seule marque), on obtient :

    <div class="code"><code>class Marque<br> {<br> /**<br> * @ORM\OneToMany(targetEntity="Produit", mappedBy="marque")<br> */<br> private $produits;</code></div>
    <br>
    <div class="code lastcode"><code>class Produit<br> {<br> /**<br> * @ORM\ManyToOne(targetEntity="Marque", inversedBy="produits")<br> * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")<br> */<br> private $marque;</code></div>
    </p>


    <h2>Source</h2>
    <p>Documentation officiel de symfony (anglais) : <a href="https://symfony.com/doc/3.4//index.html#gsc.tab=0">symfony.com/doc/3.4</a> </p>
</body>

</html>


