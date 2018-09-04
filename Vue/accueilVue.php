<?php include 'header.php';
?>

  <div class="container">
  <h3>5 dernières factures</h3>
  <a href="create.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau client</a>
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
  <a href="create.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau client</a>
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
  <h3>5 dernières personnes</h3>
  <a href="create.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau client</a>
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
</body>
</html>
