<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" value="" />
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>

<?php 
    $a = ["a"=>"Apple","b"=>"Ball","c"=>"Cat"];
    if(isset($_POST['submit'])){
        $txt = $_POST['text'];
        $result = array_search($txt,$a);
        echo "You Have search {$txt} and your search key is {$result}";
    }


    $arr = ["Apple","Apple","Apple","Banna","Apple","Banna","Orange","Apple","Apple","Orange"," ","-"];
    $ar = [];
    foreach($arr as $value){
        $ar[] = $value;
       echo "<pre>";
       print_r(implode(',', $ar));
       echo "</pre>";
    }
    
    echo "<pre>";
    print_r(array_count_values($arr));
    echo "</pre>";
    
?>