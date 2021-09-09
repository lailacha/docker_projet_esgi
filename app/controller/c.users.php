<?php require './model/bd.users.php';

switch($_REQUEST['action']) {
    case 'show':
    {
        $users = getUsers()->fetchAll();
        include "./view/show_users.html.php";
        break;
    }
}