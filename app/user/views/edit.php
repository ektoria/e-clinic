<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];
$user = get_where("SELECT * FROM users WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=user" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit user</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/user/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $user['id']; ?>">
              <div class="form-body">
                <div class="row">
                  
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Username</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Username" class="form-control" name="username" value="<?= $user['username']; ?>" autocomplete="off">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Password</label>
                      </div>
                      <div class="col-md-8">
                        <input type="password" placeholder="Password" class="form-control" name="password" autocomplete="off">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>