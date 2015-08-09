<?php
echo "<pre> POST ";
var_dump($_POST);
echo "</pre>";
echo "<pre> GET ";
var_dump($_GET);
echo "</pre>";
	

 function isValid($name)
 { 
		if(mb_strlen($name,"UTF-8") > 3)
		{
		 return true;
		}
		else
		{
		 return false;
		}
       if(count($_POST)>0)
		{
            return true;
        }
        else
		{
			return false;
		}
 }
		
		 $name = $_POST['name'];
		$name = strip_tags($_POST["name"], ' ');
		$name = trim($name);
		$name = htmlspecialchars($name);
		
		if (isValid($name) )
		{
			echo "Success!";
		
		}
		else
		{
			echo "Fail!";
		}
?>
	<textarea><?=$name?></textarea>
	