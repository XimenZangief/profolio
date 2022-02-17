<?php
include_once "../base.php";

dd($_POST);
// 根據POST的字串執行帳號的刪除
$db=new DB($_POST['table']);
$db->del($_POST['id']);
?>