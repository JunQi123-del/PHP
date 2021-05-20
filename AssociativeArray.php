<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
        <form action = "" method = "post">  
        
        Student Name : <input type = "text" name = "name">
        
        <input type = "submit">
        </form>
		
		<?php // <?php ..... anything run inside will be php script
        // Associate Array = key value pair
        $grades = array("Jim"=>"A+","Pam"=>"B-","Oscar" =>"C+");
        $grades["Jim"] = "B";
        echo $grades["Jim"];
        echo "<br>";
        echo $grades["Pam"];
        echo $grades[$_POST["name"]];
        
		
        
		?>
		
	</body>
</html>