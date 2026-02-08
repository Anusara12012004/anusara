<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ธิดารัตน์ บุญสุภา(ฟิล์ม)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	$_SESSION['name'] = "ธิดารัตน์ บุญสุภา";
	$_SESSION['nickname'] = "ฟิล์ม";
	
	//echo $_SESSION['name'] ;
	//echo $_SESSION['nickname'] ;
?>
</body>
</html>
