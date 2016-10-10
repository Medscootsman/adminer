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



$sql_query = "SELECT * FROM marvelmovies WHERE yearReleased = '2010' OR  yearReleased = '2011' OR  yearReleased = '2012' OR yearReleased = '2013' OR yearReleased = '2014' OR yearReleased = '2015'";

$result = $db->query($sql_query);

while($row = $result->fetch_array()) {


    //print out fields
    echo "<p>" . $row['title'] ." " .$row['yearReleased']. "</p>";
}

$result->dose();

$db->dose();


if($db->connect_errno) {
    die('Connectfailed['.$db->connect_error.']');
}