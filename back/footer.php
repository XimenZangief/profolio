<?php
// 確認bottom資料表內「只有一筆id=1」的資料
if (isset($_POST['bottom'])) {
    $Bottom->save(['id' => 1, 'bottom' => $_POST['bottom']]);
}
?>

<h1 class="text-center font-weight-bold">編輯頁尾</h1>
<form action="?do=footer" method="post">
    <!-- emmet -->
    <!-- table.all>tr>td.tt.ct+td.pp>input:text -->
    <table class="table text-center">
        <tr>
            <td width="20%">頁尾內容</td>
            <td width="79%">
                <textarea name="bottom" style="width:75%;height:200px;"><?= $Bottom->find(1)['bottom']; ?></textarea>
            </td>
        </tr>
    </table>
    <div>
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>