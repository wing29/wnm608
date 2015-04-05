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

                if (isset($_GET['modify'])) {
                    $data = json_decode($file, true);
                } else {
                    $data = json_decode($file);
                }

                if(isset($_GET['modify'])) {
                    $index = intval($_GET['modify']);
                    if (isset($_POST['name'])) {
                        $data[$index]['name'] = $_POST['name'];
                    }
                    if (isset($_POST['major'])) {
                        $data[$index]['major'] = $_POST['major'];
                    }
                    if (isset($_POST['marriages'])) {
                        $data[$index]['marriages'] = $_POST['marriages'];
                    }
                    $ret = file_put_contents($filename, json_encode($data));

                    if ($ret == false) {
                        echo "<div><h5>Oops! something went wrong. File is not updated</h5></div>";
                        echo "<button><a href='?s=$index'>Back</a></button>";

                    } else {
                        echo "<div><h5>Update Successful!</h5></div>";
                        echo "<button><a href='?s=$index'>Back</a></button>";
                    }
                }
				else if (!isset($_GET['s'])) {
                    echo "<ul>";
					foreach($data as $key=>$val){
						printStudent($key,$val,true);
					}
                    echo"</ul>";
				} else {
                    echo "<form id='updateForm' action='student_list.php?modify=".$_GET['s']."' method='post'>";
					printStudent($_GET['s'],$data[$_GET['s']]);
                    echo "<button form='updateForm' type='submit'>Update</button>";
					echo "<button><a href='?'>Back</a></button>";
                    echo "</form>";
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
                        echo "<tr>"."<td><input class='input' name='name' value='$student->name'></td>"."<td><input class='input' name='major' value='$student->major'></td>";
                        if (isset($student->marriages)) {
                            echo "<td><input class='input' name='marriages' value='$student->marriages'></td>";
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