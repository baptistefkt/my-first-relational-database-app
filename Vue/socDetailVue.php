<?php 
require '../Model/_displaySoc.php';
require 'header.php';
  ?>
    <div class="container">
        <h3><?=$socName?></h3>
        <a class="waves-effect waves-light btn indigo accent-1" onclick="window.print();return false;">Imprimer</a>
        <a href="createClientVue.php" class="waves-effect waves-light btn indigo accent-1">Créer un nouveau <?=$socName?></a>
        <table>
            <thead>
                <h1>Informations générales</h1>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Pays</th>
                    <th>Téléphone</th>
                    <th>TVA</th>
                </tr>
            </thead>
            <tbody>
                <?= displayData($socDetail,count($socDetail[0])); ?>
            </tbody>
            </table>
            <table>
                <thead>
                <h1>Facturation</h1>
                    <tr>
                        <th>Numero</th>
                        <th>Date</th>
                        <th>Objet</th>
                    </tr>
                </thead>
                <tbody>   
                    <?=displayData($factureBySoc,count($factureBySoc[0])); ?>
                </tbody>
            </table>
            <table>
                <thead>
                <h1>Personnes de contact</h1>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?= displayData($contactBySoc,count($contactBySoc[0]));?>
                </tbody>
            </table>
        </div>
    </body>
</html>