<?php

$server='localhost';
$user='root';
$password='';
$db='coronasupportdb';

$con = mysqli_connect($server, $user, $password, $db,'3306');

if($con)
{
    ?>
    <script>
        alert("connection succesfull!");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("No connection");
    </script>
    <?php

}

?>