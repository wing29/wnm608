<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student List</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container padded">
            <h2>Student List</h2>
            <div class="separator"></div>
			<?php
				$filename = 'students.json';
				$file = file_get_contents($filename);
				$data = json_decode($file);

				if(!isset($_GET['s'])){
                    echo "<ul>";
					foreach($data as $key=>$val){
						printStudent($key,$val,true);
					}
                    echo"</ul>";
				}else{
					printStudent($_GET['s'],$data[$_GET['s']]);
					echo "<button><a href='?'>Back</a></button>";
				}
				function printStudent($index,$student,$isInList=false){

					echo "<li>".
						( 
						$isInList ? "<a href='?s=$index'>".$student->name."</a>" : $student->name
						).
						"</li>";

					if(!$isInList) {
                        echo "<li>" . $student->major . "</li>";
                        if (isset($student->marriages)) {
                            echo "<li>" . $student->marriages . "</li>";
                        }
                    }
				}
			?>
	</div>
	
</body>
</html>