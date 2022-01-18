<?php

switch ($_GET['action']) {
    case 'add':
        if (!empty($_POST['nom-produit'])) {
            create_product($_POST['nom-produit'], $_POST['tva'], $_POST['price'], $_POST['units']);
            header('Location: http://factures.test/?data=produits', true, 301);
        } else {
            die('Le nom produit est obligatoire !');
        }
    break;
    
    case 'delete':
        if (!empty($_GET['cid'])) {
            delete_product($_GET['cid']);
            header('Location: http://factures.test/?data=produits', true, 301);
        } else {
            die('L\'identifiant client est obligatoire !');
        }
    break;

    case 'edit':
        if (!empty($_POST['cid']) && !empty($_POST['product_name'])) {
            edit_product($_POST['cid'], $_POST['product_name'], $_POST['tva'], $_POST['price'], $_POST['units']);
            header('Location: http://factures.test/?data=produit&action=view&cid='.$_POST['cid'], true, 301);
        } else {
            die('L\'identifiant client est obligatoire !');
        }
    break;

    case 'view':
        if (!empty($_GET['cid'])) {
            $produit = get_product($_GET['cid']);
            if (!empty($produit)) {
                print_view('produit', ['produit' => $produit]);
                die;
            }
        }
        print_view('404');
    break;

    case 'list':
        $clients = get_all_clients();
        print_view('clients/list', ['clients' =>$clients]);
        break;

    default:
        print_view('404');
}
