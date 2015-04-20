<?php
include "db_connect.php";

while($row = $result->fetch_object()){
    echo "<h5>".$row->name."</h5>";
    echo "<h5>".$row->price."</h5>";
}

?>