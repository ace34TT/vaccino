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
    <h1> Enregistrement </h1>
    <div class="card" style="width: 40%;">
      <div class="card-body" style="margin-left: 20%;">
      <form action="<?php echo site_url("/ControllerFormulaire/insertPersons") ?>" method="POST">
        <div class="col-md-9">
          <div class="form-group">
            <input type="text" name="nom" class="form-control" placeholder="Nom">
          </div>
          <div class="form-group">
            <input type="text" name="prenom" class="form-control" placeholder="Prenom">
          </div>
          <div class="form-group">
            <input type="date" name="naissance" class="form-control" placeholder="Naissance">
          </div>
          <div class="form-group">
            <input type="text" name="fokontany_id" class="form-control" placeholder="Fokontany">
          </div>
          <div class="form-group">
            <input type="text" name="cin" class="form-control" placeholder="CIN">
          </div>
          <input type="submit" class="btn btn-secondary" value="Register" />
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>