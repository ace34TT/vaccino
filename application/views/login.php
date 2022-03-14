<!DOCTYPE html>
<html>
<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<head>
  <title>403 Forbidden</title>
  <style>
    .special-card {
      background-color: rgba(0, 0, 0, 2);
      opacity: .7;
    }
  </style>
</head>
<body>
  <div style="margin-left: 20%;">
    <h1> Login  </h1>
    <div class="card" style="width: 40%;">
      <div class="card-body" style="margin-left: 20%;">
        <div class="col-md-8">
          <h5>Utilisateur</h5>
          <div class="form-group">
            <select name="roles_id" class="form-control">
              <option value="1">Admin</option>
              <option value="2">Invite</option>
            </select>
          </div>
          <h5>mot de passe</h5>
          <div class="form-group">
            <input type="text" name="pwd1" class="form-control" placeholder="">
          </div>
          <input type="submit" class="btn btn-secondary" value="Connexion" />
        </div>
      </div>
    </div>
  </div>
</body>
</html>