<?php
include "db_connect_local.php";

    $result = $mysqli->query("SELECT * FROM products WHERE id=".$_GET['product']);
if($mysqli->errno) die($mysqli->error);

?>
<section class="product-content padded">

    <?php
    while($row=$result->fetch_object()) {
        echo '<div class="row">';
        echo '<div class="image-slider column col-7 col-ms-6 col-xs-12">';
        echo '<div class="slider-wrapper">';
        echo '<div class="big-image">';
        echo '<img src="'.$row->image_url.'" alt="">';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="product-info column col-4 col-ms-6 col-xs-12">';
        echo '<div class="text-info ">';
        echo "<h4>".$row->name."</h4>";
        echo "<h5>&dollar;".$row->price."</h5>";
        echo "<p>".$row->description."</p>";
        echo "<p>Dimension:&nbsp;".$row->dimension."</p>";
        echo "<p>Designer:&nbsp;".$row->designer."</p>";
        echo '<div class="button">';
        echo "<a href='{$row->link}'>Check it out</a>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</section>


