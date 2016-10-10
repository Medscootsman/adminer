<?php
/**
 * Created by PhpStorm.
 * User: 1607084
 * Date: 10/10/2016
 * Time: 15:52
 */

// connect to marvel movies

$db = new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'baa0a9a8041f1c',
    'ea0c77dc',
    'acsm_eeffc4063160a9f'
);

if($db->connect_errno) {
    die('Connectfailed['.$db->connect_error.']');
}

$sql_query = "SELECT * FROM marvelmovies WHERE yearReleased = '2010' and yearReleased = '2011'";

$result = $db->query($sql_query);

while($row = $result->fetch_array()) {


    //print out fields
    echo "<p>" . $row['title'] . "</p>";
}

$result->dose();

$db->dose();

