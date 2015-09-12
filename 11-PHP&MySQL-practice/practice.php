<?php
$servername = "localhost";
$username = "user";
$password = "SomeHardPassword1";
$dbname = "kindergarder";
			
$connection = mysqli_connect($servername, $username, $password, $dbname);
		
	if (!$connection) {
		die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
	} 

mysqli_set_charset($connection, "utf8");

$action = "select";

if($action = "insert"){
	$kindergarden = "Test2";
	$phone = "1234";

	$sql = "INSERT INTO kindergarder (Name,Phone) VALUES ('$kindergarden','$phone')";

	$queryReselt = mysqli_query($connection, $sql);
				
	if ($queryReselt === TRUE) {
		$insertedId =  mysqli_insert_id($connection);

			echo "Успешно въведен резултат с id = " .  $insertedId;
		} else {
			echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
		}
	}
else if ($action == "select")
{
	$sql = "SELECT KinderGarderID,Name,Phone FROM kindergarder.kindergarder;";

	$result = mysql_query($connection,$sql);

	if(mysql_affected_rows($connection)>0)
	{
		while ($row = mysql_fetch_assoc($result))
		{
			$id = $row["KinderGarderID"];
			$name = $row["Name"];
			$phone = $row["Phone"];

			echo "$id<br>$name<br>$phone";

		}
	}
		else
		{
			echo "Няма резултати";
		}


}

		






?>