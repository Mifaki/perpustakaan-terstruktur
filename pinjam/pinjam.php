<?php
include "read-cart.php";
include "add-cart.php";
include "delete-cart.php";
include "save-cart.php";

$fitur = $_GET['fitur'];
switch ($fitur) {
    case 'add':
        $idbuku = $_GET['idbuku'];
        add($idbuku);
        break;
    case 'delete':
        $idbuku = $_GET['idbuku'];
        delete($idbuku);
        break;
    case 'save':
        save();
        break;
    case 'read':
    default:
        read();
        break;
}

?>