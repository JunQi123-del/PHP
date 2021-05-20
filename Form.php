<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
        <form action = "Form.php" method = "post">  
        colour: <input type = "text" name = "colour"> <br>
        Plural Noun: <input type = "text" name = "PluralNoun"> <br>
        Celebrity: <input type = "text" name = "Celebrity"> <br>
        password: <input type = "password" name = "password"> <br>
        <input type = "submit">
        </form>
		
		<?php // <?php ..... anything run inside will be php script

		echo $_GET["colour"];
        echo $_GET["PluralNoun"];
        echo $_GET["Celebrity"]; //
        echo $_POST["password"]; //$_POST will receive remove the data from the URL and the form method must also be post.
        
        

		
		?>
		
	</body>
</html>