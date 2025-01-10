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
<body class="body-login" style="<?= $bodyStyle; ?>">
<section class="section-acceuil" id="section-acceuil" style="<?= $sectionStyle; ?>">
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
