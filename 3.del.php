<?php
require("dbconfig.php");

$id=(int)$_GET['id'];
if ($id <=0) {
	echo "error!! empty ID";
	exit(0);
} 

	$sql = "Delete from todo where id=?;"; 
	//SQL中的 ? 代表未來要用變數綁定進去的地方
	$stmt = mysqli_prepare($db, $sql ); //precompile sql指令，建立statement 物件，以便執行SQL
	mysqli_stmt_bind_param($stmt, "i", $id); //綁定參數到變數 $id 上, 型態為 i (integer)
	mysqli_stmt_execute($stmt); //執行SQL
?>
<a href="1.新首頁.html">回工作列表</a>