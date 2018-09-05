<?php
function displaySoc($soc){       
    echo '<tr><td><a href=socDetailController.php?socId='.$soc['id_societe'].'>'.$soc['nom'].'</a></td>';
    echo '<td>'.$soc['adresse'].'</td>';
    echo '<td>'.$soc['pays'].'</td>';
    echo '<td>'.$soc['telephone'].'</td>';
    echo '<td>'.$soc['tva'].'</td></tr>';      
}

function sortSocType($array,$key){
    foreach($array as $soc){ 
        if ($soc['type']==$key){
            displaySoc($soc);        
        }
    }
}

function displayData($array,$length){
    foreach($array as $info){
        echo '<tr><td>'.$info[0].'</td>';
        for($i=1;$i<$length-1;$i++){
            echo '<td>'.$info[$i].'</td>';
        }
        echo '<td>'.$info[$length-1].'</td></tr>';
    }   
}
?>

