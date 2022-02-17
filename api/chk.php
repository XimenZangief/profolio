<?php 
include_once "../base.php";

echo $chk=$Users->math('count','*',['account'=>$_POST['acc'],'password'=>$_POST['pw']]);
