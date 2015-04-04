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
                    echo "<button><a href='#'>Edit</a></button>";
					echo "<button><a href='?'>Back</a></button>";
				}
				function printStudent($index,$student,$isInList=false){
                    if ($isInList) {
                        echo "<li>"."<a href='?s=$index'>".$student->name."</a>"."</li>";
                    } else {
                        echo "<table>";
                        echo "<tr>"."<th>Student Name</th>"."<th>Major</th>";
                        if (isset($student->marriages)) {
                            echo "<th>Marriages</th>"."</tr>";
                        }
                        echo "<tr>"."<td>".$student->name."</td>"."<td>".$student->major."</td>";
                        if (isset($student->marriages)) {
                            echo "<td>".$student->marriages."</td>";
                        }
                        echo "</table>";
                    }

//					echo
//						(
//						$isInList ? "<li>"."<a href='?s=$index'>".$student->name."</a>"."</li>" : "<tr>"."<td>".$student->name."</td>"
//						);
//
//					if(!$isInList) {
//                        echo "<td>" . $student->major . "</td>";
//                        if (isset($student->marriages)) {
//                            echo "<td>" . $student->marriages . "</td>";
//                        }
//                    }
//                    echo "</table>";
				}
			?>
	</div>
	
</body>
</html>