<?php
 function get_pets(){
    $petsJson = file_get_contents('pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}