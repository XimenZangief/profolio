<?php
if (isset($_POST['id'])) {
    if ($_POST['id'] == 1) {
        $Title->save(['id' => 1, 'content' => $_POST['content']]);
    } else {
        $Title->save(['id' => 2, 'content' => $_POST['content']]);
    }
}
$titles = $Title->all();
foreach ($titles as $title) {
?>

    <h1 class="text-center font-weight-bold">編輯<?= $title['title']; ?></h1>
    <form action="?do=title" method="post">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">編輯<?= $title['title']; ?>內容</span>
            </div>
            <textarea class="form-control" style="width:75%;height:200px;" name="content"><?= $title['content']; ?></textarea>
        </div>
        <div class="mt-3">
            <input type="hidden" name="id" value="<?= $title['id']; ?>">
            <input type="submit" value="編輯"> |
            <input type="reset" value="重置">
        </div>
        <hr>
    </form>
<?php  } ?>