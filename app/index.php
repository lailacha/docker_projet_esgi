<?php 
session_start();
require './model/bd.inc.php';
include "./view/header.html.php";
if (!isset($_REQUEST['uc'])) $uc = 'sign';
else
    $uc = $_REQUEST['uc'];
switch ($uc) {
    case 'sign': {
            include("./controller/c.sign.php");
            break;
        }
    case 'users': {
        include("./controller/c.users.php");
        break;
    }
    case 'deconnexion': {
            session_destroy();
            break;
        }
}
include "view/footer.html.php";
