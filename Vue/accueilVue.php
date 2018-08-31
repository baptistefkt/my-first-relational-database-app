<?php include 'header.php' ?>

  <div class="container">
  <h3>5 dernières factures</h3>
  <a href="create.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau client</a>
    <table>
      <thead>
        <tr>
            <th>Factures</th>
            <th>Date</th>
            <th></th>
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
            <th>TVA</th>
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
            <th>Telephone</th>
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
