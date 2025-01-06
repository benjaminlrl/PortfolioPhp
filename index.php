<?php require 'sessionStart.php';?>
<?php

// Si une langue est passée dans l'URL, on met à jour la variable $langue
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']); // Sécurisation de la donnée
}
?>
<?php 
$titlePage = 'Benjamin Lorieul';
require 'head.php';
?>
<body class="body-login">
<section class="section-acceuil" id="section-acceuil">
    <?php require 'header.php';?>
    <?php require 'acceuil.php';?>
</section> 
<div class="icone-up">
    <a href="#section-acceuil"><i class="fa-solid fa-arrow-up fa-bounce fa-2xl"></i></a>
</div>        
<?php require 'presentation.php';?>
<?php require 'parcours.php';?>
<?php require 'competences.php';?>
<?php require 'langues.php';?>
<?php require 'certifications.php';?>
<?php require 'footer.php';?>