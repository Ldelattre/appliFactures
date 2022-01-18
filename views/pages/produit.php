<div class="container">
    <div class="row">
        <form method="POST" action="/?data=produit&action=edit">
            <div class="form-group">
                <input type="text" class="form-control h1" required name="product_name" id="product_name" value="<?= $produit['name'] ?>">
                <input type="int" class="form-control h1" required name="tva" id="tva" value="<?= $produit['tva'] ?>">
                <input type="int" class="form-control h1" required name="price" id="price" value="<?= $produit['price'] ?>">
                <input type="text" class="form-control h1" required name="units" id="units" value="<?= $produit['units'] ?>">
            </div>
            <input type="hidden" name="cid" value="<?= $produit['ID'] ?>">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>