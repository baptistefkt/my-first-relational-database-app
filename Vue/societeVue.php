  <?php require 'header.php';
  ?>
    <div class="container">
      <h3><?=$type?>s</h3>
      <a class="waves-effect waves-light btn indigo accent-1" onclick="window.print();return false;">Imprimer</a>
      <a href="createClientVue.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau <?=$type?></a>
      <table>
        <thead>
          <tr>
              <th>Nom</th>
              <th>Adresse</th>
              <th>Pays</th>
              <th>Téléphone</th>
              <th>TVA</th>
          </tr>
        </thead>
        <tbody>
          <?php echo displaySocType($dataSocBasic,$type); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>