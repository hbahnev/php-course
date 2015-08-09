<?php
echo "
<html>
	<head>
		<meta charset='utf-8'/>
	</head>

	<body>
	<form action ='response.php?submit=true' method = 'POST'>
		Потребителско име: <input type='text' name='name' />
		<br />
		Стара парола:
		<input type='password' name='old_pass' />
		<br />
		Нова парола:
		<input type='password' name='new_pass' />
		<br />
		Повторете паролата:
		<input type='password' name='repeat_pass' />
		<br />
		<input type='submit' value='Изпрати' />
	
	</form>
	
	</body>
<html>
";






















?>