<?php
include 'config/bdd.php';


function getAllProjet()
{

    $bd = bdd();

    $getAllProjet = $bd->prepare("SELECT * FROM projet");

    $getAllProjet->execute();
    $result = $getAllProjet->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

function getAllProjetIndex()
{

    $bd = bdd();

    $getAllProjet = $bd->prepare("SELECT * FROM projet WHERE forindex = 1");

    $getAllProjet->execute();
    $result = $getAllProjet->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

function getProjetById($id)
{

    $bd = bdd();

    $getProjet = $bd->prepare("SELECT * FROM projet WHERE id = ?");

    $getProjet->execute(array($id));
    $result = $getProjet->fetch(PDO::FETCH_OBJ);

    return $result;
}

function getLanguageByProjet($id_projet)
{
    $bd = bdd();

    $getLanguageByProjet = $bd->prepare("SELECT `language`.nom FROM `language` 
    INNER JOIN composition_projet ON composition_projet.id_language = `language`.id
    WHERE composition_projet.id_projet = ?
    ");

    $getLanguageByProjet->execute(array($id_projet));
    $result = $getLanguageByProjet->fetchAll(PDO::FETCH_OBJ);

        $resulat = "";
        foreach ($result as $res) {
            $resulat = $res->nom . " " . $resulat;
        }


    return $resulat;
}
