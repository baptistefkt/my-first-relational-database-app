<?php include 'header.php';
?>

  <div class="container">
  <h3>5 dernières factures</h3>
  <a href="../Controller/facturesController.php" class="waves-effect waves-light btn cyan darken-2">Voir toutes les factures<i class="material-icons right">visibility</i></a>
  <a href="../Vue/createFactureVue.php" class="waves-effect waves-light btn cyan darken-2">Créer une nouvelle facture<i class="material-icons right">add</i></a>
    <table>
      <thead>
        <tr>
            <th>Date</th>
            <th>Facture</th>
            <th>Société</th>
            <th>Objet</th>
        </tr>
      </thead>
      <tbody>
        <?php echo out3(); ?>
      </tbody>
    </table>
  </div>
  <div class="container">
  <h3>5 dernières sociétés</h3>
  <a href="../Controller/societeController.php?type=Fournisseur" class="waves-effect waves-light btn cyan darken-2">Voir les fournisseurs<i class="material-icons right">visibility</i></a>
  <a href="../Controller/societeController.php?type=Client" class="waves-effect waves-light btn cyan darken-2">Voir les clients<i class="material-icons right">visibility</i></a>
  <a href="../Controller/createSocieteController.php?type=Client" class="waves-effect waves-light btn cyan darken-2">Ajouter une société<i class="material-icons right">add</i></a>
    <table>
      <thead>
        <tr>
            <th>Société</th>
            <th>Adresse société</th>
            <th>Pays</th>
            <th>Téléphone</th>
            <th>TVA</th>
            <th>Type société</th>
        </tr>
      </thead>
      <tbody>
        <?php echo out1(); ?>
      </tbody>
    </table>
  </div>
  <div class="container">
  <h3>5 derniers contacts</h3>
  <a href="contactVue.php" class="waves-effect waves-light btn cyan darken-2">Voir tous les contacts<i class="material-icons right">visibility</i></a>
  <a href="createContactVue.php" class="waves-effect waves-light btn cyan darken-2">Créer un nouveau client<i class="material-icons right">add</i></a>
    <table>
      <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Société</th>
        </tr>
      </thead>
      <tbody>
        <?php echo out2(); ?>
      </tbody>
    </table>
  </div>
<?php include 'footer.php' ?>
