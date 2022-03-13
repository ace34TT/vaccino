<?php //var_dump($doseRequest);?>
<h1>List Demande <?php //echo $idPreavis ?></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Reference</th>
      <th scope="col">Chef Fokontany</th>
      <th scope="col">Vaccin</th>
      <th scope="col">quantite</th>
      <th scope="col">Localisation</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 0; $i < count($doseRequest); $i++) { ?>
      <tr>
        <th scope="row"><?php echo $doseRequest[$i]['dose_rquestsId'] ?></th>
        <td><?php echo $doseRequest[$i]['firstname'] . " " . $doseRequest[$i]['lastname'] ?></td>
        <td><?php echo $doseRequest[$i]['vaccinesNom'] ?></td>
        <td><?php echo $doseRequest[$i]['dose_rquestsQuantity'] ?></td>
        <td><?php echo $doseRequest[$i]['fokontanysNom'] ?></td>
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
<?php ?>