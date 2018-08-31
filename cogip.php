
  <?php include 'partials/header.php' ?>
  <?php include 'partials/appeldb.php' ?>
    <div class="container">
    <h3>Historique de clients</h3>
    <a class="waves-effect waves-light btn indigo accent-1" onclick="window.print();return false;">Imprimer</a>
    <a href="create.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau client</a>
      <table>
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
          <?php echo out1(); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
