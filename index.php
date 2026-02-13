<?php
include_once(__DIR__ . './view/header/header.php');
include_once(__DIR__ . './controller/GeneraliController.php');

$generaliForm = new GeneraliController(); 
$generaliForm->getGeneraliForm();

include_once(__DIR__ . './view/footer/footer.php');
?>