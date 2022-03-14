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
  <?php //var_dump($recuReste);

  ?>
  <h1> Personne non vaccine <?php //echo $idPreavis
                    ?></h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Reference</th>
        <th scope="col">Chef Fokontany</th>
        <th scope="col">Vaccin</th>
        <th scope="col">quantite demande</th>
        <th scope="col">quantite Recu</th>
        <th scope="col">Reste</th>
        <th scope="col">Localisation</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      /*for ($i = 0; $i < count($doseResponse); $i++) { ?>
        <tr>
          <th scope="row"><?php echo $doseResponse[$i]['dose_rquestsId'] ?></th>
          <td><?php echo $doseResponse[$i]['firstname'] . " " . $doseResponse[$i]['lastname'] ?></td>
          <td><?php echo $doseResponse[$i]['vaccinesNom'] ?></td>
          <td><?php echo $doseResponse[$i]['dose_rquestsQuantity'] ?></td>
          <td><?php echo $recuReste[$i]['recu'] ?></td>
          <td><?php echo $recuReste[$i]['reste'] ?></td>
          <td><?php echo $doseResponse[$i]['fokontanysNom'] ?></td>
          <td><?php echo $doseResponse[$i]['fokontanysNom'] ?></td>
          <td><input type="submit" value="Historiques" class="btn btn-outline-secondary"></td>
        </tr>
      <?php } ?>
    </tbody>
    <div class="input-group mb-5">
      <form action="<?php echo base_url() ?>/DevisController/insertDevisDetails/<?php //echo $idPreavis 
                                                                                ?>" method="GET">
        <input type="text" name="produit" class="form-control" placeholder="Nom produit" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input type="number" name="quantite" class="form-control" placeholder="quantite" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <input type="submit" value="Ajouter" class="btn btn-outline-secondary">
      </form>
    </div>
  </table>
  <?php */?>
</body>

</html>