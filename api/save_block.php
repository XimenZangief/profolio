<?php 
include "../base.php";
dd($_POST);

// 陣列->字串
$_POST['content']=serialize($_POST['content']);

$Title->save($_POST);
to('../back/index.php?do=block');
?>