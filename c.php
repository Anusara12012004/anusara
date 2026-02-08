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
<h1>c.php</h1>

<?php
	echo @$_SESSION['name'] . "<br>";
	echo @$_SESSION['nickname']  . "<br>";
?>
</body>
</html>
