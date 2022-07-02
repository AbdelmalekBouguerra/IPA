<?php
// accept a ticket ==================================
if(isset($_POST['motif'])) {
    echo '<script>console.log("am here");</script>';
$motif = trim($_POST['motif']);
$idMotif = trim($_POST['idMotif']);

try {
$query = "UPDATE ticket SET motifRefus=:motif, status='refuse' WHERE id=:id;";
$stmt = $connection->prepare($query);
$stmt->bindParam('id', $idMotif, PDO::PARAM_INT);
$stmt->bindParam('motif', $motif, PDO::PARAM_STR);
$stmt->execute();
} catch (PDOException $e) {
echo "Error : ".$e->getMessage();
}
}
// ===================================================

?>


<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog mw-100 w-75 modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Motif de rejet</h4>
                    <form class="forms-sample" method="POST">
                        <input type="hidden" name="idMotif" id="idMotif">
                        <div class="form-group">
                            <label for="1">Écrivez le motif du refus</label>
                            <textarea class="form-control" id="exampleFormControlTextarea3" name="motif" rows="7"
                                maxlength="5000"
                                placeholder="Entrez votre explication ici , max 5000 caractères"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success mr-2">
                        <button class="btn btn-danger" onclick="window.location.reload(true)">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>