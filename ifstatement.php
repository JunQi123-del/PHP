<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
     
      
		
		<?php // <?php ..... anything run inside will be php script
        // Associate Array = key value pair
        
        $isMale = true;
        $isTall = true;
        $isFemale = true;
        if($isMale && $isTall)
        {
            echo "Hello i am a male and is tall";
        }
        else if($isMale && !$isTall){
            echo "I am a short male";
        }
        else {
            echo "I am a female";
        }
		
        
		?>
		
	</body>
</html>