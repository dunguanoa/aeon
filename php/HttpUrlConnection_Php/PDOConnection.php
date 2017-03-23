<?php
$dbName = "android_db";
$user = "root";
$pwd = "1234";
$host = "localhost";
$cnn = new PDO('mysql:dbname='.$dbName.';host='.$host, $user, $pwd);