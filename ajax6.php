<?php

require_once('_init.php');

$tab = [];

extract($_POST);

$tab['resultat'] = '';

if( !isset($mode)) $mode = '';

if($mode == 'envoi'){

        $insert = $mysqli->query("INSERT INTO employes (prenom, nom) VALUES ('$prenom' , '$nom')");
        $tab['resultat'] = "L'employe" . $prenom ." " . $nom . "a bien ete ajoute";
}
else {

    $result = $mysqli->query("SELECT * FROM employes");

    $tab['resultat'] .= "<table border='5'>";
    $tab['resultat'] .= "<thead>";
    $tab['resultat'] .= "<tr>";

            while($colonne = $result->fetch_field())
            {

                $tab['resultat'] .= "<th>"  . $colonne->name . "</th>";

            }



    $tab['resultat'] .= "</tr>";
    $tab['resultat'] .= "</thead>";


    $tab['resultat'] .= "<tbody>"; 

                while($ligne = $result->fetch_assoc()){

                  $tab['resultat'] .= "<tr>";

                        foreach($ligne as $key => $value){
               
                  $tab['resultat'] .= "<td>" . $value . "</td>";
                        }
                  $tab['resultat'] .= "</tr>";
                }
// fin du while
    $tab['resultat'] .= "</tbody>"; 
    $tab['resultat'] .= "</table>"; 

    // fin du else
}
echo json_encode($tab);