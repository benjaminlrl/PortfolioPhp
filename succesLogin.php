<?php require "sessionStart.php";?>
<?php $titlePage="Se connecter"?>
<?php $langue = isset($_GET['langue']) ? $_GET['langue'] : 'français';
if($langue === 'français') {
    $message = "Vous êtes bien connecté !";
}
if ($langue === 'english') {
    $message = "You have successfully logged in!";
}
?>
<?php require "head.php";?>
<?php $delay = 2.5;?>
<head>
    <meta http-equiv="refresh" content="<?php echo $delay; ?>;url=index.php">
</head>
<body class="body-login">
<section class='section-succesInscription' id='section-succesInscription'>
    <?php require 'header.php';?>
    <div class="succesInscription">
        <i class="fa-sharp fa-solid fa-shield-check fa-spin-pulse"></i>
        <p><?php echo $message?></p>
    </div>
</section>
<?php require "footer.php";?>