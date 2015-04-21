<?php
include "db_connect_local.php";

    $result = $mysqli->query("SELECT * FROM products WHERE id=".$_GET['product']);
if($mysqli->errno) die($mysqli->error);

while($row = $result->fetch_object()){
    echo "<h4>".$row->name."</h4>";
    echo "<h5>".$row->price."</h5>";
    echo "<p>".$row->description."</p>";
    echo "<p>".$row->dimension."</p>";
    echo "<p>".$row->designer."</p>";
    ?>
    <div class="button"><?php echo "<a href='{$row->link}'>Check it out</a>";?></div>

<?php
}
?>

