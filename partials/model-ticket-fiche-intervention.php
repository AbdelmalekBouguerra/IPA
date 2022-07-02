<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog mw-100 w-75 modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fiche d'intervention</h4>
                    <form action="ficheIntervention.php" class="forms-sample" method="POST">
                        <input type="hidden" name="idTicket" id="idTicket">
                        <input type="hidden" name="materiel" id="materiel">

                        <div class="form-group">
                            <label for="1">Donnez les Prestations</label>
                            <textarea class="form-control" id="exampleFormControlTextarea3" name="prestations" rows="7"
                                maxlength="5000" placeholder="Entrez votre Prestations ici."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1">Donnez les Fournitures</label>
                            <textarea class="form-control" id="exampleFormControlTextarea3" name="fournitures" rows="7"
                                maxlength="5000" placeholder="Entrez votre Fournitures ici."></textarea>
                        </div>
                        <input type="submit" class="btn btn-success mr-2">
                        <button class="btn btn-danger" onclick="window.location.reload(true)">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>