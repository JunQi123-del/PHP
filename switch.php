<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
        <form action = "" method = "post">  
        
       Grade: <input type = "text" name = "grade">
        
        <input type = "submit">
        </form>
		
		<?php // <?php ..... anything run inside will be php script
        // step = allow the number to be entered to the tenth place.
       $grade = $_POST["grade"];
       switch($grade){
           case "A":
                echo "you did amazing";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "you did okay";
                break;
            case "P":
                echo "Better luck next time";
                break;
            case "F":
                echo "Dont give up";    
                break;
            default : 
                echo "Invalid Grade";

       }
		
        
        
		?>
		
	</body>
</html>