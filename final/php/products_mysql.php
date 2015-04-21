<?php
include "db_connect_local.php";

$result = $mysqli->query("SELECT * FROM products");
if($mysqli->errno) die($mysqli->error);

while($row = $result->fetch_object()){
    ?>
    <div class="product column col-4 col-ms-6 col-xs-12">
        <div class="image-wrapper">
            <?php echo '<img src="'.$row->image_url.'" alt="">' ?>

            <div class="caption-wrapper">
                <div class="caption padded-xl nd">
                    <h5><?php echo $row->name ?></h5>
                    <h5>$<?php echo $row->price ?></h5>
                    <?php echo "<a href='?product={$row->id}'>View</a>"?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>