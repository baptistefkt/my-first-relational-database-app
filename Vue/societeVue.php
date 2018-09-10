  <?php
  require 'header.php';
  require '../Model/_displaySoc.php';
  ?>
    <div class="container">
      <h3><?=$type?>s</h3>
      <a class="waves-effect waves-light btn cyan darken-2" onclick="window.print();return false;">Imprimer<i class="material-icons right">print</i></a>
      <a href="createClientVue.php" class="waves-effect waves-light btn cyan darken-2">Créer un nouveau <?=$type?><i class="material-icons right">add</i></a>
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
          <?php echo sortSocType($dataSocBasic,$type); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
