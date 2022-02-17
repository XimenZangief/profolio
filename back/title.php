<?php
// 確認title資料表內「只有一筆id=1」的資料
if (isset($_POST['title'])) {
    $Title->save(['id' => 1, 'title' => $_POST['title']]);
}
?>

<h1 class="text-center font-weight-bold">編輯大字報</h1>
<form action="?do=title" method="post">
    <!-- emmet -->
    <!-- table.all>tr>td.tt.ct+td.pp>input:text -->
    <table class="table text-center">
        <tr>
            <td width="20%">標題內容</td>
            <td width="79%">
                <textarea name="title" style="width:75%;height:200px;"><?= $Title->find(1)['title']; ?></textarea>
            </td>
        </tr>
    </table>
    <div>
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>