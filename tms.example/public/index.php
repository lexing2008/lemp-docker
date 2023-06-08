<?php
echo 'Hi world! Current time: '. date('Y-m-d H:i:s');


$con = mysqli_connect('db', 'root', 'pass');
echo '<pre>';

echo '<h3>Databases: </h3>';
$result =  $con->query('SHOW DATABASES');
while($obj = $result->fetch_object()){
    echo $obj->Database . '<br>';
}
?>

<h3>Image from imgproxy:</h3>
<img src="http://img.seatos.local/0/fit/250/250/ce/1/plain/local:///1.jpg">
