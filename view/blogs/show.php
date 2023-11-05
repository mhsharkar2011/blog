<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>Job Portal | Free Job Portal</title>

    <!-- ***** Style Start ***** -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- ***** Style End ***** -->
</head>

<body>

<?php

include "../../database/Database.php";
include "../../config/Config.php";

 $db = Database::getConnect();
 $query = "SELECT * FROM users";
 $read = $db->select($query);

if(isset($_GET['msg'])){
 echo "<span style='color:green'>".$_GET['msg']."</span>";
}

$id = $_GET['id'];
print_r($id);
$deleteQuery = "DELETE FROM users WHERE id = $id";

$delete = $db->delete($deleteQuery);
?>

<table class="tblone">
<tr>
 <th width="10%">Serial</th>
 <th width="35%">Name</th>
 <th width="25%">Email</th>
 <th width="15%">Action</th>
</tr>
<?php if($read){?>
<?php 
$i=1;
while($row = $read->fetch_assoc()){
?>
<tr>
 <td><?php echo $i++ ?></td>
 <td><?php echo $row['first_name'] . $row['last_name']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><a href="edit.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>
 <td>
    <form action="" method="post">
    <button class="btn btn-danger" type="submit" name="delete" value="Delete">DELETE</button>
    </form>
 </td>
</tr>


<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php } ?>
</table>
<a href="create.php">Create</a>