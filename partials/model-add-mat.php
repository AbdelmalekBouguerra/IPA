<?php
include "./config/config.php";
// add a metriel ==================================
if(isset($_POST['idUser'])) {
    echo '<script>console.log("form submited");</script>';
    $idUser = trim($_POST['idUser']);
    $idFournisseur = trim($_POST['idFournisseur']);
    $categorie = trim($_POST['categorie']);
    $libelle = trim($_POST['libelle']);
    $marque = trim($_POST['marque']);
    $nSerie = trim($_POST['nSerie']);
    $prixAchat = trim($_POST['prixAchat']);
    $typeMateriel = trim($_POST['typeMateriel']);
    $dateAchat = trim($_POST['dateAchat']);
    $dateMiseEnMarche = trim($_POST['dateMiseEnMarche']);
    $dateDebutGarantie = trim($_POST['dateDebutGarantie']);
    $dateFinGarantie = trim($_POST['dateFinGarantie']);
    try {
        $query = 'INSERT INTO
        materiel(`idUser`,`idFournisseur`,`libelle`,`Marque`,`typeMateriel`,`categorie`,`nSerie`,`prixAchat`,`dateAchat`,`dateMiseEnMarche`,`dateDebutGarantie`,`dateFinGarantie`)
        VALUES(:idUser,:idFournisseur,:libelle,:marque,:typeMateriel,:categorie,:nSerie,:prixAchat,:dateAchat,:dateMiseEnMarche,:dateDebutGarantie,:dateFinGarantie)';
        $stmt = $connection->prepare($query);
        $stmt->bindParam('idUser', $idUser, PDO::PARAM_INT);
        $stmt->bindParam('idFournisseur', $idFournisseur, PDO::PARAM_INT);
        $stmt->bindParam('categorie', $categorie, PDO::PARAM_STR);
        $stmt->bindParam('nSerie', $nSerie, PDO::PARAM_STR);
        $stmt->bindParam('libelle', $libelle, PDO::PARAM_STR);
        $stmt->bindParam('typeMateriel', $typeMateriel, PDO::PARAM_STR);
        $stmt->bindParam('marque', $marque, PDO::PARAM_STR);
        $stmt->bindParam('prixAchat', $prixAchat, PDO::PARAM_STR);
        $stmt->bindParam('dateAchat', $dateAchat, PDO::PARAM_STR);
        $stmt->bindParam('dateMiseEnMarche', $dateMiseEnMarche, PDO::PARAM_STR);
        $stmt->bindParam('dateDebutGarantie', $dateDebutGarantie, PDO::PARAM_STR);
        $stmt->bindParam('dateFinGarantie', $dateFinGarantie, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
    }
}
// ===================================================

?>

<div class="modal fade" id="add-materiel" tabindex="-1" role="dialog" aria-labelledby="model-add-materiel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajoute materiel</h4>
                    <form class="forms-sample" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="1">id utilsateur</label>
                                    <input type="text" class="form-control" id="1" name="idUser"
                                        placeholder="s'il n'existe pas, laisser-la vide">
                                </div>
                                <div class="form-group">
                                    <label for="2">id fournisseur</label>
                                    <input type="text" class="form-control" id="2" name="idFournisseur"
                                        placeholder="s'il n'existe pas, laisser-la vide">
                                </div>
                                <div class="form-group">
                                    <label for="4">categorie</label>
                                    <input type="text" class="form-control" id="4" name="categorie">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="3">libelle</label>
                                    <input type="text" class="form-control" id="3" name="libelle">
                                </div>
                                <div class="form-group">
                                    <label for="4">marque</label>
                                    <input type="text" class="form-control" id="4" name="marque">
                                </div>
                                <div class="form-group">
                                    <label for="4">type materiel</label>
                                    <input type="text" class="form-control" id="4" name="typeMateriel">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="4">Numéro de série</label>
                                    <input type="text" class="form-control" id="4" name="nSerie">
                                </div>
                                <div class="form-group">
                                    <label for="4">prix d'achat</label>
                                    <input type="text" class="form-control" id="4" name="prixAchat">
                                </div>
                                <div class="form-group">
                                    <label for="4">date achat</label>
                                    <input type="date" class="form-control" id="4" name="dateAchat">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="4">date mise en marche</label>
                                    <input type="date" class="form-control" id="4" name="dateMiseEnMarche">
                                </div>
                                <div class="form-group">
                                    <label for="4">date debut garantie</label>
                                    <input type="date" class="form-control" id="4" name="dateDebutGarantie">
                                </div>
                                <div class="form-group">
                                    <label for="4">date fin garantie</label>
                                    <input type="date" class="form-control" id="4" name="dateFinGarantie">
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