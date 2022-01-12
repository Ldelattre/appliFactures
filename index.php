<?php 
include 'inc/view.php';
include 'inc/BDD.php';

if (empty($_GET)) {
    print_view('home');
} else {
    if (empty($_GET['data']) && empty($_GET['action'])) {
        print_view('404');
        die;
    }

    switch ($_GET['data']) {
        case 'client' :
            include 'controllers/clientController.php';
        break;

        case 'users' :
            print_view('users');
        break;
        default :
            print_view('404');
    }
}