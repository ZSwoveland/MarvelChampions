<?php 
require_once('ConnectDB.php');
//Creates a connection the search the DB
function selectFromDB($Name,$Stage){
    
    $sql = "SELECT Health FROM Villains where VillainName = '$Name' AND Stage = '$Stage'";
    $result = Connect()->query($sql);

    return $result;
}
//Calculates the # of Players and what stage the Player has selected to start at to determine what is the Villains Max HP
function VillainHPCalc($Name,$Stage,$Players){
    if(selectFromDB($Name,$Stage) != NULL){
        return selectFromDB($Name,$Stage)*$Players;
    }
    else{
        return "Error has Occurred check Database";
    }
} 