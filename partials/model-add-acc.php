<?php
$nom = "";
$prenom = "";
$matricule = "";
$email = "" ;
$userRole = "" ;
$userName = "" ;
$userPassword = "" ;
$confirmPassword = "" ;
$IdService = "";
$msg_error = "";
$Fonction = "";
include "./config/config.php";
// add a metriel ==================================
if(isset($_POST['nom'])) {
    echo '<script>console.log("form submited");</script>';
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $matricule = trim($_POST['matricule']);
    $email = trim($_POST['email']);
    $userRole = trim($_POST['userRole']);
    $userName = trim($_POST['userName']);
    $userPassword = trim($_POST['userPassword']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $IdService = trim($_POST['IdService']);
    $Fonction = trim($_POST['Fonction']);
    if ($userPassword == $confirmPassword) {
        try {
            if(isset($_POST['idEditAccount'])){
                $idEditAccount = trim($_POST['idEditAccount']);
                $query ='UPDATE users SET `nom`=:nom,`idService`=:IdService,`prenom`=:prenom,`matricule`=:matricule,`email`=:email
                ,`fonction`=:Fonction,`userName`=:userName,`userPassword`=:userPassword,`userRole`=:userRole WHERE
                `id`=:idEditAccount;';
                $stmt = $connection->prepare($query);
                $stmt->bindParam('idEditAccount', $idEditAccount, PDO::PARAM_INT);
            }else{
                                    echo "<script>
                                        console.log('i am in insert');
                                    </script>";
                $query = 'INSERT INTO
                users(`idService`,`nom`,`prenom`,`matricule`,`email`,`fonction`,`userName`,`userPassword`,`userRole`)
                VALUES(:IdService,:nom,:prenom,:matricule,:email,:Fonction,:userName,:userPassword,:userRole);';
                $stmt = $connection->prepare($query);

            }
            $stmt->bindParam('IdService', $IdService, PDO::PARAM_INT);
            $stmt->bindParam('nom', $nom, PDO::PARAM_STR);
            $stmt->bindParam('prenom', $prenom, PDO::PARAM_STR);
            $stmt->bindParam('matricule', $matricule, PDO::PARAM_STR);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->bindParam('userRole', $userRole, PDO::PARAM_STR);
            $stmt->bindParam('userName', $userName, PDO::PARAM_STR);
            $stmt->bindParam('userPassword', $userPassword, PDO::PARAM_STR);
            $stmt->bindParam('Fonction', $Fonction, PDO::PARAM_STR);
        
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }else{
        $msg_error = "pas correspondance de mot de passe";
    }
}
// ===================================================

?>
<div class="modal fade" id="add-account" tabindex="-1" role="dialog" aria-labelledby="model-add-account"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajoute un utilisateur</h4>
                    <form method="POST" class="forms-sample" id="addingAccountForm">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input value="<?php echo $nom;?>" name="nom" type="text" class="form-control"
                                        id="nom" placeholder="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom">Prenom</label>
                                    <input value="<?php echo $prenom;?>" name="prenom" type="text" class="form-control"
                                        id="prenom" placeholder="prenom" required>
                                </div>
                                <div class="form-group">
                                    <label for="IdService">IdService</label>
                                    <input value="<?php echo $IdService;?>" name="IdService" type="text" id="IdService"
                                        class="form-control" placeholder="Id Service" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="matricule">Matricule</label>
                                    <input value="<?php echo $matricule;?>" name="matricule" type="text" id="matricule"
                                        class="form-control" placeholder="matricule" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value="<?php echo $email;?>" name="email" type="email" class="form-control"
                                        id="email" placeholder="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="Fonction">Fonction</label>
                                    <input value="<?php echo $Fonction;?>" name="Fonction" type="text"
                                        class="form-control" id="Fonction" placeholder="Fonction" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userName">User name</label>
                            <input value="<?php echo $userName;?>" name="userName" type="text" class="form-control"
                                id="userName" placeholder="user name" required>
                        </div>
                        <div class="form-group">
                            <label for="userRole">User role</label>
                            <select name="userRole" class="form-control" id="userRole" required>
                                <option value="utilisateur">Utilisateur</option>
                                <option value="technicien">Technicien</option>
                                <option value="directeur">directeur</option>
                                <option value="superAdmin">Super Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userPassword">Mote de pass</label>
                            <input name="userPassword" type="password" class="form-control" id="userPassword"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm mot de pass</label>
                            <input name="confirmPassword" type="password" class="form-control" id="confirmPassword"
                                placeholder="Password" required>
                        </div>
                        <input type="submit" class="btn btn-success mr-2">
                        <button class="btn btn-danger" onclick="window.location.reload(true)">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>