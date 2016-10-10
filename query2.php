<?php
/**
 * Created by PhpStorm.
 * User: 1607084
 * Date: 10/10/2016
 * Time: 16:19
 */


$db = new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'baa0a9a8041f1c',
    'ea0c77dc',
    'acsm_eeffc4063160a9f'
);

$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio = 'Marvel Studios'";

$result = $db->query($sql_query);

while($row = $result->fetch_array()) {


    //print out fields
    echo "<p>" . $row['title'] .$row['yearReleased']. "</p>";
}