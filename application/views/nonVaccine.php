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
  <?php //var_dump($vaccinePresence);
  ?>
  <h1> Personne non vaccine <?php //echo $idPreavis  ?></h1>
  <table class="table">
    <thead>
      <tr>
      <th scope="col">Nom</th>
        <th scope="col">CIN</th>
        <th scope="col">Localisation</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      for ($i = 0; $i < count($vaccinePresence); $i++) {
        if($vaccinePresence[$i]['presence']==0){?>
        <tr>
        <td><?php echo $vaccinePresence[$i]['firstname'] ." ".$vaccinePresence[$i]['lastname']?></td>
          <td><?php echo $vaccinePresence[$i]['personsCin'] ?></td>
          <td><?php echo $vaccinePresence[$i]['fokontanysNom'] ?></td>
          <td><input type="submit" value="vacciner" class="btn btn-outline-secondary"></td>
          <td><input type="submit" value="Fiche" class="btn btn-outline-secondary"></td>
        </tr>
      <?php }}  ?>
    </tbody>
  </table>
  <?php ?>
</body>
</html>