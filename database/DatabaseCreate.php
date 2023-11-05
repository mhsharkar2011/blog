<?php 
require_once "Database.php";

$db = new Database();

$query = "SELECT * FROM users";

$results = $db->select($query);

foreach($results as $res){
    echo $res['name'] . "<br/>";
    echo $res['email'];
}