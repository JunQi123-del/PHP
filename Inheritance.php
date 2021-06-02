<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        
     
      
		
		<?php // <?php ..... anything run inside will be php script
        // Associate Array = key value pair
        class chef{
            function makechicken(){
                echo "The chef makes chicken";
            }
            function makesalad(){
                echo "The chef makes salad";
            }
            function makespecialdish(){
                echo "The chef makes special dish";
            }
        }

        class ItalianChef extends chef{
            function makespegeti(){ // italian chef inherits chef class, it can access chef class function plus more stuff.
                echo "Italian make pasta";
            }

            function makespecialdish(){ // function overriding
                echo "the chef makes italian special dish";
            }
        }
       
		$chef = new chef();
        $chef->makechicken();
        $chef->makespecialdish();
        
        $italianchef1 = new ItalianChef();
        $italianchef1->makechicken();
        $italianchef1->makespegeti();
        $italianchef1->makespecialdish();

        
		?>
		
	</body>
</html>