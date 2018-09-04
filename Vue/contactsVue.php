
  <?php require 'header.php';
  ?>
    <div class="container">
      <h3>Historique de personnes de contact</h3>
      <a class="waves-effect waves-light btn indigo accent-1" onclick="window.print();return false;">Imprimer</a>
      <a href="createClientVue.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau client</a>
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
          <?php echo out2(); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
