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
        <?php if($langue === "français")echo("<p>Vous êtes bien connecté&nbsp;!</p>"); 
        if($langue === "english")echo("<p>You are successfully logged in&nbsp;!</p>")?>
    </div>
</section>
<?php require "footer.php";?>
