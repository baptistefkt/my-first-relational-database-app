
  <?php require 'header.php';
  require '../Model/ContactModel.php'; ?>
    <div class="container">
      <h3>Historique des contacts</h3>
      <a class="waves-effect waves-light btn cyan darken-2" onclick="window.print();return false;">Imprimer</a>
      <a href="createContactVue.php" class="waves-effect waves-light btn cyan darken-2">Créer un nouveau client</a>
      <table class="bordered centered responsive-table">
        <thead>
          <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Telephone</th>
              <th>Email</th>
              <th>Société</th>
              <th>Adresse société</th>
              <th>Factures</th>
          </tr>
        </thead>
        <tbody>
          <?php echo outContact(); ?>
        </tbody>
      </table>
    </div>
<?php include 'footer.php' ?>
