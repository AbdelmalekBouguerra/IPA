<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap');

.modal {
    border-radius: 7px;
    overflow: hidden;
    background-color: transparent;
}

.center {
    font-size: 36px;
    font-weight: 700;
    font-family: 'Noto Serif', serif;
    color: #fff;
    margin-top: 420px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal .logo a img {
    width: 30px;
}

.modal .modal-content {
    background-color: transparent;
    border: none;
    border-radius: 7px;
}

.modal .modal-content .modal-body {
    border-radius: 7px;
    overflow: hidden;
    background-color: #fff;
    padding-left: 0px;
    padding-right: 0px;
    -webkit-box-shadow: 0 10px 50px -10px rgba(0, 0, 0, 0.9);
    box-shadow: 0 10px 50px -10px rgba(0, 0, 0, 0.9);
}

.modal .modal-content .modal-body h2 {
    font-size: 18px;
}

.modal .modal-content .modal-body p {
    color: #777;
    font-size: 14px;
}

.modal .modal-content .modal-body h3 {
    color: #000;
    font-size: 22px;
}

.modal .modal-content .modal-body .close-btn {
    color: #000;
}

.modal .modal-content .modal-body .promo-img {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
}

.modal .cancel {
    color: gray;
    font-size: 14px;
}

.modal .btn-primary {
    padding-top: 10px;
    padding-bottom: 10px;
}

.form-control {
    border: transparent;
    border: 1px solid #ccc;
}

.form-control:active,
.form-control:focus,
.form-control:hover {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

.btn {
    border-radius: 4px;
    border: none;
}

.btn:active,
.btn:focus {
    outline: none;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

.bg-image {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.logo img {
    width: 70px;
}

.custom-note {
    color: #999;
}

.custom-note a {
    color: #555;
    font-weight: 900 !important;
}
</style>
<!-- Modal
<div
  class="modal fade"
  id="chose-type-ticket"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choisi</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button>BC</button>
        <button>BA</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body py-0">


                <div class="d-flex main-content">
                    <div class="bg-image promo-img mr-3" style="background-image: url('./img/bcd1.jpg');">
                    </div>
                    <div class="content-text p-4">
                        <h3>Sign up to access all the resourcess</h3>
                        <p>All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue.
                        </p>

                        <form action="" method="post" name="send-ticket">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="desc" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect">Type de commande</label>
                                <select name="type-ticket" onchange="yesnoCheck(this);" class="form-control"
                                    id="exampleSelect">
                                    <option value="AM">Achat matériel</option>
                                    <option value="RP">Remplacement de piece</option>
                                    <option value="RM">Reparation de matériel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect">Choisi votre matériel</label>
                                <select id="ifYes" class="form-control" id="exampleSelect" disabled>
                                    <option value="RP">pc</option>
                                    <option value="AM">imprimant</option>
                                    <option value="RM">scaner</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block">
                            </div>
                            <div class="form-group ">
                                <p class="custom-note"><small>By signing up you will agree to our <a href="#">Privacy
                                            Policy</a></small></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<!-- showing matériel select if chose certien option -->
<script>
function yesnoCheck(that) {
    if (that.value == "RM" || that.value == "RP") {
        document.getElementById("ifYes").disabled = false;
    } else {
        document.getElementById("ifYes").disabled = true;
    }
}
</script>