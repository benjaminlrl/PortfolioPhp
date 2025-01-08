<?php require 'sessionStart.php';?>
<?php
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
<div class="sections-container"> 
    <div class="section-wrapper">      
        <?php require 'presentation.php';?>
    </div>
    <div class="section-wrapper"> 
        <?php require 'parcours.php';?>
    </div>
    <div class="section-wrapper">
        <?php require 'competences.php';?>
    </div>
    <div class="section-wrapper">
        <?php require 'langues.php';?>
    </div>
</div>
<?php require 'certifications.php';?>
<?php require 'footer.php';?>
