<div class="container">
    <div class="row">
        <form method="POST" action="/?data=client&action=edit">
            <div class="form-group">
                <input type="text" class="form-control h1" required name="client_name" id="client_name" value="<?= $client['name'] ?>">
            </div>
            <input type="hidden" name="cid" value="<?= $client['id'] ?>">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>