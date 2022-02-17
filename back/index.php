<?php
include_once "../base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>作品集後台管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/bbf53becfc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../back.css">
</head>

<body>
    <div class="container text-center">
        <div>
            <h1>作品集管理後台</h1>
		</div>
		<div id="left">
			<div style="min-height:400px;">
				<a href="?do=title">大字報管理</a>
				<a href="?do=marquee">輪播圖管理</a>
				<a href="?do=about">ABOUT管理</a>
				<a href="?do=portfolio">作品集管理</a>
				<a href="?do=footer">頁尾管理</a>
				<a href="?do=logout" style="color:#f00;">登出</a>
			</div>
		</div>
		<div id="right">
			<?php
			// 題目要求後台登入必須預設進入權限管理頁，所以直接給admin.php
			$do = $_GET['do'] ?? 'title';
			$file =  $do . ".php";
			if (file_exists($file)) {
				include $file;
			} else {
				// echo "檔案不存在";
				include "title.php";
			}
			?>
		</div>
	</div>
</body>

</html>