<?php 
include_once "../base.php";

// echo $chk=$Users->math('count','*',['account'=>$_POST['acc'],'password'=>$_POST['pw']]);

$inputAccount = $_POST['acc'];
$inputPassword = $_POST['pw'];

$pdo = new PDO('mysql:host=localhost;charset=utf8;dbname=s1100422','s1100422','s1100422');

//驗證帳號&PDO防禦injection
$stmt= $pdo->prepare("SELECT account, password FROM users WHERE account = :account");
$stmt->execute([':account' => $inputAccount]);
$arr= $stmt->fetchAll();

//驗證密碼
if($arr[0]['password'] == $inputPassword){
    $_SESSION['currentLogin']= $arr[0]['account'];
    header('location:./back/index.php');
}
else{
    $backUrl = $_SERVER['HTTP_REFERER']; //上一頁的url
    $_SESSION['loginMsg']= "帳號或密碼錯誤";
    header("location:".$backUrl);
}