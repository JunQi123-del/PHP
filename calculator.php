<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
        <form action = "" method = "post">  
        
        First Num: <input type = "number" step = 0.1 name = "num1"> <br> 
        OP: <input type = "text" name = "op"> <br>
        Second Num: <input type = "number" name = "num2"> <br>
        
        <input type = "submit">
        </form>
		
		<?php // <?php ..... anything run inside will be php script
        // step = allow the number to be entered to the tenth place.
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $OP = $_POST["op"];

        if($OP == "-")
        {
            echo $num1-$num2;
        }else if ($OP == "+"){
            echo $num1+$num2;
        }else if ($OP == "*"){
            echo $num1*$num2;
        }else if ($OP == "/"){
           echo  $num1/$num2;
        }else{
            echo "invalid operation";
        }
		
        
        
		?>
		
	</body>
</html>