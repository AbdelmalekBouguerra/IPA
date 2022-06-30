<div class="modal fade" id="add-materiel" tabindex="-1" role="dialog" aria-labelledby="model-add-materiel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajoute materiel</h4>
                    <form class="forms-sample">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="1">id utilsateur</label>
                                    <input type="text" class="form-control" id="1"
                                        placeholder="s'il n'existe pas, laisser-la vide">
                                </div>
                                <div class="form-group">
                                    <label for="2">id fournisseur</label>
                                    <input type="text" class="form-control" id="2"
                                        placeholder="s'il n'existe pas, laisser-la vide">
                                </div>
                                <div class="form-group">
                                    <label for="4">categorie</label>
                                    <input type="text" class="form-control" id="4">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="3">libelle</label>
                                    <input type="text" class="form-control" id="3">
                                </div>
                                <div class="form-group">
                                    <label for="4">marque</label>
                                    <input type="text" class="form-control" id="4">
                                </div>
                                <div class="form-group">
                                    <label for="4">type materiel</label>
                                    <input type="text" class="form-control" id="4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="4">prix d'achat</label>
                                    <input type="text" class="form-control" id="4">
                                </div>
                                <div class="form-group">
                                    <label for="4">date achat</label>
                                    <input type="date" class="form-control" id="4">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="4">date mise en marche</label>
                                    <input type="date" class="form-control" id="4">
                                </div>
                                <div class="form-group">
                                    <label for="4">date debut garantie</label>
                                    <input type="date" class="form-control" id="4">
                                </div>
                                <div class="form-group">
                                    <label for="4">date fin garantie</label>
                                    <input type="date" class="form-control" id="4">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success mr-2">
                        <button class="btn btn-danger" onclick="window.location.reload(true)">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>