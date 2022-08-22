<?php 

require_once '../model/model.php';

if (deleteProduct($_GET['ID'])) {
    header('Location: ../showAllProducts.php');
}

 ?>