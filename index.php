<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
<form action="handle.php" method="post">
	<textarea name="inicontent" id="" cols="30" rows="10" style="resize:none;"><?php
		echo file_get_contents('a.ini');
	?>
	</textarea><br>
	<button>提交</button>
</form>
</body>
</html>
