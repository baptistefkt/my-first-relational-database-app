<?php
include 'header.php';
 ?>

        <div class="container">
            <h3>Historique des factures</h3>
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
                    <?php echo outFact(); ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
