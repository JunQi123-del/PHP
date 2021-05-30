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

        $index = 1;
        $index2 =1;
        // while loop
        while($index <= 5){
            echo "$index <br>";
            $index++;

        }
        // do while 
        do{
            echo "$index2 <br>";
            $index2++;

        }
        while($index2 <= 5);
        
        // for loop 
        for($i = 1; $i<= 5; $i++)
        {
            echo "$i <br>";
        }
        echo "For Loop<br>";
        $luckyNumbers = array(4,8,14,16,23,42);

        for($i =0; $i<count($luckyNumbers);$i++){
            echo "$luckyNumbers[$i] <br>";
        }
       
		
        
        
		?>
		
	</body>
</html>