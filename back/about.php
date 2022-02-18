<?php
if (isset($_POST['id'])) {
    $About->save($_POST);
}
$row = $About->find(1);
?>

<h1 class="text-center font-weight-bold">編輯ABOUT</h1>
<form action="?do=about" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary text-white">招呼詞</span>
        </div>
        <input type="text" class="form-control" name="hi" placeholder="<?= $row['hi']; ?>">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-info text-white">自我介紹</span>
        </div>
        <input type="text" class="form-control" name="name" placeholder="<?= $row['name']; ?>">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary text-white">主內容</span>
        </div>
        <input type="text" class="form-control" name="intro1" placeholder="<?= $row['intro1']; ?>">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-info text-white">副內容</span>
        </div>
        <input type="text" class="form-control" name="intro2" placeholder="<?= $row['intro2']; ?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>