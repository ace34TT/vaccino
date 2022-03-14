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
    <h1> Insert doseRequest </h1>
    <div class="card" style="width: 40%;">
      <div class="card-body" style="margin-left: 20%;">
      <form action="<?php echo site_url("/ControllerDoseRequest/insertDoseRequest") ?>" method="POST">
        <div class="col-md-9">
          <div class="form-group">
            <input type="text" name="user_id" class="form-control" placeholder="user_id">
          </div>
          <div class="form-group">
            <input type="date" name="date" class="form-control" placeholder="date">
          </div>
          <div class="form-group">
            <input type="text" name="vaccine_id" class="form-control" placeholder="vaccine_id">
          </div>
          <div class="form-group">
            <input type="number" name="quantity" class="form-control" placeholder="Quantite">
          </div>
          <input type="submit" class="btn btn-secondary" value="commander" />
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>