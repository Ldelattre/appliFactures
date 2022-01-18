<?php

function bdd_connect () {
    $bdd = new PDO('mysql:host=localhost;dbname=facture', 'root', '');
    return $bdd;
}

function create_client (string $name) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('INSERT INTO client (name) VALUES (:name)');
    $request->execute([
        ':name' => $name
    ]);
}

function get_all_clients () {
    $bdd = bdd_connect();
    $request = $bdd->prepare('SELECT * FROM client');
    $request->execute();
    return $request->fetchAll();
}

function get_client (int $id) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('SELECT * FROM client WHERE id = :id');
    $request->execute([
        ':id' => $id
    ]);
    return $request->fetch();
}

function delete_client (int $id) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('DELETE FROM client WHERE id = :id');
    $request->execute([
        ':id' => $id
    ]);
}
function edit_client (int $id, string $client_name) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('UPDATE client SET name = :name WHERE id = :id');
    $request->execute([
        ':id' => $id,
        ':name' => $client_name
    ]);
}

// produit


function create_product (string $name, string $tva, string $price, string $units) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('INSERT INTO product (name, tva, price, units) VALUES (:name, :tva, :price, :units)');
    $request->execute([
        ':name' => $name,
        ':tva' => $tva,
        ':price' => $price,
        ':units' => $units
    ]);
}

function get_all_product () {
    $bdd = bdd_connect();
    $request = $bdd->prepare('SELECT * FROM product');
    $request->execute();
    return $request->fetchAll();
}

function get_product (int $id) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('SELECT * FROM product WHERE id = :id');
    $request->execute([
        ':id' => $id
    ]);
    return $request->fetch();
}

function delete_product (int $id) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('DELETE FROM product WHERE ID = :id');
    $request->execute([
        ':id' => $id
    ]);
}

function edit_product (int $id, string $product_name, int $tva, int $price, string $units) {
    $bdd = bdd_connect();
    $request = $bdd->prepare('UPDATE product SET name = :name, tva = :tva, price = :price, units = :units WHERE id = :id');
    $request->execute([
        ':id' => $id,
        ':name' => $product_name,
        ':tva' => $tva,
        ':price' => $price,
        ':units' => $units
        
    ]);
}

