<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
        <form action = "Arrays.php" method = "post">  
        Apples: <input type = "checkbox" name = "fruits[]" value = "Apples"> <br>
        Oranges: <input type = "checkbox" name = "fruits[]" value = "Oranges"> <br>
        Pears: <input type = "checkbox" name = "fruits[]" value = "Pears"> <br>
        
        <input type = "submit">
        </form>
		
		<?php // <?php ..... anything run inside will be php script

		
        $friends = array("Kevin","Karen","Oscar","Jim");
        $friends[1] = "doos";
        echo $friends[0];        
        echo "<br>";
        echo $friends[1];
        echo count($friends);
        echo "<br>";
        echo "<br>";
		$fruits = $_POST["fruits"];
        echo $fruits[2];
        
		?>
		
	</body>
</html>