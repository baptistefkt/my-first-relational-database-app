<?php include 'header.php';
require '../Model/accueilModel.php';?>

  <div class="container">
  <h3>5 dernières factures</h3>
  <a href="../Controller/facturesController.php" class="waves-effect waves-light btn cyan darken-2">Voir toutes les factures</a>
  <a href="../Vue/createFactureVue.php" class="waves-effect waves-light btn cyan darken-2">Créer une nouvelle facture</a>
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
  <a href="create.php" class="waves-effect waves-light btn cyan darken-2">Voir toutes les sociétés</a>
  <a href="create.php" class="waves-effect waves-light btn cyan darken-2">Créer un nouveau client</a>
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
  <a href="contactVue.php" class="waves-effect waves-light btn cyan darken-2">Voir tous les contacts</a>
  <a href="createContactVue.php" class="waves-effect waves-light btn cyan darken-2">Créer un nouveau client</a>
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
