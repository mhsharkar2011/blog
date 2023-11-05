<?php
include "../../database/Database.php";
include "../../config/Config.php";

$id = $_GET['id'];
$db = Database::getConnect();
$query = "SELECT * FROM users";
$show = "SELECT * FROM users WHERE id = $id";

$results = $db->select($query);
$userShow = $db->select($show);

if ($results) {
    while ($data = $results->fetch_object()) {
        echo "ID: " . $data->id . "<br>";
        echo "First Name: " . $data->first_name . "<br>";
        echo "Last Name: " . $data->last_name . "<br>";
        echo "Email: " . $data->email . "<br>";
        echo "--------------------------<br>";
    }
}

if ($userShow) {
    while ($data = $userShow->fetch_object()) {
        echo "ID: " . $data->id . "<br>";
        echo "First Name: " . $data->first_name . "<br>";
        echo "Last Name: " . $data->last_name . "<br>";
        echo "Email: " . $data->email . "<br>";
        echo "--------------------------<br>";
    }
}

// $newFirstName = 'Jon';
// $newLastName = 'Doe';
// $newEmail = 'jon@mail.com';
// $newPassword = password_hash('password', PASSWORD_DEFAULT); 

// $query = "INSERT INTO users (first_name, last_name, email,password) VALUES ('$newFirstName','$newLastName','$newEmail','$newPassword')";
// $stmt = $db->create($query);


$query = "DELETE FROM users WHERE id = 3";
$result = $db->delete($query);