<div class="container">
    <div class="row">
        <h1 class="col-sm-12 text-center">Application de factures</h1>
        <form action="?data=client&action=add" method="POST" class="col-sm-10 col-md-8 align-self-center">
            <h2>Ajouter un client</h2>
            <div class="form-group mb-3">
                <label class="form-group-text" for="nom-client">Nom du client</label>
                <input class="form-control type="text" id="nom-client" name="nom-client" placeholder="nom du client" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>

        <!-- afficher les clients dans un tableau -->
        <!-- 2 colonnes : nom client -> bouton supprimer -->
        <table class="table table-striped">
            <thead>
                <th>Nom du client</th>
                <th>actions</th>
            </thead>
            <tbody>
                <?php
                    $clients = get_all_clients();
                    foreach ($clients as $client) :
                ?>
                    <tr>
                        <td><?= $client['name'] ?></td>
                        <td>
                            <a href="/?data=client&action=view&cid=<?= $client['id'] ?>" class="btn btn-primary">voir</a>
                            <a href="/?data=client&action=delete&cid=<?= $client['id'] ?>" class="btn btn-danger">supprimer</a>
                        </td>
                    </tr>
                <?php 
                    endforeach; 
                ?>
            </tbody>
        </table>
    </div>
</div>