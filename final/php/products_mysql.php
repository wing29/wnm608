<?php
include "db_connect_local.php";

$result = $mysqli->query("SELECT * FROM products");
if($mysqli->errno) die($mysqli->error);
?>

<div class="main_content"> <!-- wraps the main content -->
            <!-- begin carousel -->
            <section class="slider padded">
            
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <ul>
                            <li><a href=""><img src="images/gallery/carousel/plant_carousel.jpg" alt="product"></a></li>
                            <li><a href=""><img src="images/gallery/carousel/gift_idea_carousel.jpg"></a></li>
                            <li><a href=""><img src="images/gallery/carousel/wall_carousel.jpg"></a></li>
                        </ul>
                    </div>
            
                    <a href="#" class="left" id="left">&lsaquo;</a>
                            <a href="#" class="right" id="right">&rsaquo;</a>
                </div>
            
            </section><!-- End carousel -->
<section class="gallery padded">
<div class="row">

<?php
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
</div>
</section>