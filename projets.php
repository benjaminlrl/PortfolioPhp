<?php require 'sessionStart.php';?>
<?php 
if($langue === "français") $title="Projets";
if($langue === "english")$title="Projects";
$titlePage= $title?>
<?php
if (isset($_GET['langue'])) {
    $langue = htmlspecialchars($_GET['langue']);
}
?>
<?php 
$titlePage = 'Projets';
require 'head.php';
?>
<body class="body-projets">
<?php require 'footer.php';?>