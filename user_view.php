<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
<h1>
	<?php
		foreach ($result as $object) 
		{
			$id = $object->id;
			if ($id == 1) 
			{
				echo '------------------------- <br>';
				echo $id.'<br>';
				echo $object->username.'<br>';
				echo '------------------------- <br>';
			}
			else
			{
				echo $id.'<br>';
				echo $object->username.'<br>';
				echo '------------------------- <br>';
			}
		}
	?>
</h1>
</body>
</html>
