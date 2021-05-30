<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
     
      
		
		<?php // <?php ..... anything run inside will be php script
        // Associate Array = key value pair
        
        function getmax($num1,$num2){
            if ($num1 >= $num2){
                return $num1;
            }else{
                return $num2;
            }
        }

        echo getmax(3,6);
		
        
		?>
		
	</body>
</html>