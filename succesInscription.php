<?php require "sessionStart.php";?>
<?php $titlePage="Se connecter"?>
<?php require "head.php";?>
<body class="body-login">
<?php $delay = 3.5;?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>;url=index.php">
</head>
<section class='section-succesInscription' id='section-succesInscription'>
    <?php require 'header.php';?>
    <div class="succesInscription">
        <i class="fa-sharp fa-solid fa-shield-check fa-spin-pulse"></i>
        <p>Votre inscription à bien été prise en compte&nbsp;.</p>
    </div>
</section>
<?php require "footer.php";?>
