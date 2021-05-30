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

		function sayhi(){

			echo "Hello User";
		}

		function sayname($name){
			echo "Hello $name";
		}
       
		function nameNage($name,$age)
		{
			echo "my name is $name and my age is $age";
		}
		sayname("micheal");
		nameNage("miky",21);
		sayhi();
        
		
        
		?>
		
	</body>
</html>