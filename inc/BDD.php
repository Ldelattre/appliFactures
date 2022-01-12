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