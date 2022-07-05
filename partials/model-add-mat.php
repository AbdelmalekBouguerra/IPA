<?php
include "./config/config.php";
// add a metriel ==================================
if(isset($_POST['idUser'])) {
        echo '<script>
            console.log("form submited");
        </script>';

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
        if(isset($_POST['idEditMateriel'])){
            echo '<script type="text/javascript">
                ' .
                'console.log("am in Edit");
            </script>';
            $idEditMateriel = trim($_POST['idEditMateriel']);
                        echo '<script type="text/javascript">
                            ' .
                            'console.log('.$idEditMateriel.');
                        </script>';
            $query = 'UPDATE materiel SET
            `idUser`=:idUser,`idFournisseur`=:idFournisseur,`libelle`=:libelle,`Marque`=:marque,`typeMateriel`=:typeMateriel,`categorie`=:categorie,`nSerie`=:nSerie,`prixAchat`=:prixAchat,
            `dateAchat`=:dateAchat,`dateMiseEnMarche`=:dateMiseEnMarche,`dateDebutGarantie`=:dateDebutGarantie,`dateFinGarantie`=:dateFinGarantie
            WHERE `id`=:idEditMateriel ;';
            $stmt2 = $connection->prepare($query);
            $stmt2->bindParam('idEditMateriel', $idEditMateriel, PDO::PARAM_INT);
        }else{
            echo '<script type="text/javascript">
                ' .
                'console.log("am in Insert");
            </script>';
            $query = 'INSERT INTO
            materiel(`idUser`,`idFournisseur`,`libelle`,`Marque`,`typeMateriel`,`categorie`,`nSerie`,`prixAchat`,`dateAchat`,`dateMiseEnMarche`,`dateDebutGarantie`,`dateFinGarantie`)
            VALUES(:idUser,:idFournisseur,:libelle,:marque,:typeMateriel,:categorie,:nSerie,:prixAchat,:dateAchat,:dateMiseEnMarche,:dateDebutGarantie,:dateFinGarantie)';
            $stmt2 = $connection->prepare($query);
        }
        $stmt2->bindParam('idUser', $idUser, PDO::PARAM_INT);
        $stmt2->bindParam('idFournisseur', $idFournisseur, PDO::PARAM_INT);
        $stmt2->bindParam('categorie', $categorie, PDO::PARAM_STR);
        $stmt2->bindParam('nSerie', $nSerie, PDO::PARAM_STR);
        $stmt2->bindParam('libelle', $libelle, PDO::PARAM_STR);
        $stmt2->bindParam('typeMateriel', $typeMateriel, PDO::PARAM_STR);
        $stmt2->bindParam('marque', $marque, PDO::PARAM_STR);
        $stmt2->bindParam('prixAchat', $prixAchat, PDO::PARAM_STR);
        $stmt2->bindParam('dateAchat', $dateAchat, PDO::PARAM_STR);
        $stmt2->bindParam('dateMiseEnMarche', $dateMiseEnMarche, PDO::PARAM_STR);
        $stmt2->bindParam('dateDebutGarantie', $dateDebutGarantie, PDO::PARAM_STR);
        $stmt2->bindParam('dateFinGarantie', $dateFinGarantie, PDO::PARAM_STR);
        $stmt2->execute();
    } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
                    echo '<script type="text/javascript">
                        ' .$e->getMessage().
                        'console.log("am in Insert")';
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
                    <form class="forms-sample" method="POST" id="addingMaterielForm">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="idUser">id utilsateur</label>
                                    <input type="text" class="form-control" id="idUser" name="idUser"
                                        placeholder="s'il n'existe pas, laisser-la vide">
                                </div>
                                <div class="form-group">
                                    <label for="idFournisseur">id fournisseur</label>
                                    <input type="text" class="form-control" id="idFournisseur" name="idFournisseur"
                                        placeholder="s'il n'existe pas, laisser-la vide">
                                </div>
                                <div class="form-group">
                                    <label for="categorie">categorie</label>
                                    <input type="text" class="form-control" id="categorie" name="categorie">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="libelle">libelle</label>
                                    <input type="text" class="form-control" id="libelle" name="libelle">
                                </div>
                                <div class="form-group">
                                    <label for="4">marque</label>
                                    <input type="text" class="form-control" id="marque" name="marque">
                                </div>
                                <div class="form-group">
                                    <label for="typeMateriel">type materiel</label>
                                    <input type="text" class="form-control" id="typeMateriel" name="typeMateriel">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nSerie">Numéro de série</label>
                                    <input type="text" class="form-control" id="nSerie" name="nSerie">
                                </div>
                                <div class="form-group">
                                    <label for="prixAchat">prix d'achat</label>
                                    <input type="text" class="form-control" id="prixAchat" name="prixAchat">
                                </div>
                                <div class="form-group">
                                    <label for="dateAchat">date achat</label>
                                    <input type="date" class="form-control" id="dateAchat" name="dateAchat">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="dateMiseEnMarche">date mise en marche</label>
                                    <input type="date" class="form-control" id="dateMiseEnMarche"
                                        name="dateMiseEnMarche">
                                </div>
                                <div class="form-group">
                                    <label for="dateDebutGarantie">date debut garantie</label>
                                    <input type="date" class="form-control" id="dateDebutGarantie"
                                        name="dateDebutGarantie">
                                </div>
                                <div class="form-group">
                                    <label for="dateFinGarantie">date fin garantie</label>
                                    <input type="date" class="form-control" id="dateFinGarantie" name="dateFinGarantie">
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