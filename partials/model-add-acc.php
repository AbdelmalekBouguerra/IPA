<div class="modal fade" id="add-account" tabindex="-1" role="dialog" aria-labelledby="model-add-account"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajoute un utilisateur</h4>
                    <form class="forms-sample">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="1">Nom</label>
                                    <input type="text" class="form-control" id="1" placeholder="nom">
                                </div>
                                <div class="form-group">
                                    <label for="2">Prenom</label>
                                    <input type="text" class="form-control" id="2" placeholder="prenom">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="3">Matricule</label>
                                    <input type="text" class="form-control" id="3" placeholder="matricule">
                                </div>
                                <div class="form-group">
                                    <label for="4">Email</label>
                                    <input type="email" class="form-control" id="4" placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="5">User name</label>
                            <input type="text" class="form-control" id="5" placeholder="user name">
                        </div>
                        <div class="form-group">
                            <label for="6">User role</label>
                            <select class="form-control" id="6">
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mote de pass</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Confirm mot de pass</label>
                            <input type="password" class="form-control" id="exampleInputConfirmPassword1"
                                placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-success mr-2">
                        <button class="btn btn-danger" onclick="window.location.reload(true)">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>