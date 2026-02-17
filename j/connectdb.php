<?php
			$host = "localhost";
				$user = "root";
				$pwd = "";
				$db = "4119db";
				$conn = mysqli_connect($host ,$user, $pwd, $db) or die ("เชื่อมต่อข้อมูลไม่ได้");
				mysqli_query($conn, "SET NAMES utf8");
				