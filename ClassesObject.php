<!DOCTYPE html>
<html>
	<head>
        <
		<title></title>
	</head>
	<body>
        
        <?php 
            class Book{
                public $title ="";
                public $Authur ="";
                public $pages= 0;

                function __construct($title,$Authur,$pages){ // constructor (PHP does not allow constructor overloading)
                    $this->title = $title;
                    $this->Authur = $Authur;
                    $this->pages = $pages;
                    echo "$title, $Authur, $pages";

                }

                function checkPages(){ // object function
                    if ($this->pages>500){
                        return "true";
                    }else{
                        return "false";
                    }
                }

                function getPages(){ // getter
                    return $this->pages;
                }

                function setPages($pages){ // Setter
                    if($pages>700){
                        $this->pages = $pages;
                    }else{
                        $this ->pages = 0;
                    }
                }
              

            }

            $Book2 = new Book("Lord of the Ring","Tan Jun Qi", 700);
            echo $Book2->checkPages();

        ?>
        
       


		
	</body>
</html>