<?php
include "../../database/Database.php";
include "../../config/Config.php";

$obj = Database::getConnect();

$query = "SELECT * FROM users";

$results = $obj->select($query);

if ($results) {
    while ($data = $results->fetch_object()) {
        echo "ID: " . $data->id . "<br>";
        echo "First Name: " . $data->first_name . "<br>";
        echo "Last Name: " . $data->last_name . "<br>";
        echo "Email: " . $data->email . "<br>";
        echo "--------------------------<br>";
    }
}

