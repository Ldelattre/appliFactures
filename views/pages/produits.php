<div class="container">
    <div class="row">
        <h1 class="col-sm-12 text-center">Application de factures</h1>
        <form action="?data=produit&action=add" method="POST" class="col-sm-10 col-md-8 align-self-center">
            <h2>Ajouter un produit</h2>
            <div class="form-group mb-3">
                <label class="form-group-text" for="nom-produit">Nom du produit</label>
                <input class="form-control type="text" id="nom-produit" name="nom-produit" placeholder="nom-produit" required>
            </div>
            <div class="form-group mb-3">
                <label class="form-group-text" for="tva">Nom du produit</label>
                <input class="form-control type="float" id="tva" name="tva" placeholder="tva" required>
            </div>
            <div class="form-group mb-3">
                <label class="form-group-text" for="price">prix</label>
                <input class="form-control type="float" id="price" name="price" placeholder="price" required>
            </div>
            <div class="form-group mb-3">
                <label class="form-group-text" for="units">unité</label>
                <input class="form-control type="text" id="units" name="units" placeholder="units" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>

        <!-- afficher les clients dans un tableau -->
        <!-- 2 colonnes : nom client -> bouton supprimer -->
        <table class="table table-striped">
            <thead>
                <th>Nom du produit</th>
                <th>tva</th>
                <th>price</th>
                <th>units</th>
                <th>actions</th>
            </thead>
            <tbody>
                <?php
                    $produits = get_all_product();
                    foreach ($produits as $produit) :
                ?>
                    <tr>
                        <td><?= $produit['name'] ?></td>
                        <td><?= $produit['tva'] ?></td>
                        <td><?= $produit['price']  ?></td>
                        <td><?= $produit['units']  ?></td>
                        <td>
                            <a href="/?data=produit&action=view&cid=<?= $produit['ID'] ?>" class="btn btn-primary">voir</a>
                            <a href="/?data=produit&action=delete&cid=<?= $produit['ID'] ?>" class="btn btn-danger">supprimer</a>
                        </td>
                    </tr>
                <?php 
                    endforeach; 
                ?>
            </tbody>
        </table>
    </div>
</div>