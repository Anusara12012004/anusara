<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อนุสรา แสนขรยาง(นุช)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	$_SESSION['name'] = "อนุสรา แสนขรยาง";
	$_SESSION['nickname'] = "นุช";
	
	//echo $_SESSION['name'] ;
	//echo $_SESSION['nickname'] ;
?>
</body>
</html>
