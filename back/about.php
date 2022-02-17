<h1 class="text-center font-weight-bold">編輯大字報</h1>

<?php
if(isset($_POST['id'])){
    $About->save($_POST);
}
$row = $About->find(1);
?>

<form action="?do=about" method="post">
    <!-- emmet -->
    <!-- table.all>tr>td.tt.ct+td.pp>input:text -->
    <table class="table text-center">
        <tr>
            <td width="20%">招呼詞</td>
            <td width="79%">
                <input type="text" name="hi" value="<?= $row['hi']; ?>">
            </td>
        </tr>
        <tr>
            <td width="20%">自我介紹</td>
            <td width="79%">
                <input type="text" name="name" value="<?= $row['name']; ?>">
            </td>
        </tr>
        <tr>
            <td width="20%">主內容</td>
            <td width="79%">
                <input type="text" name="intro1" value="<?= $row['intro1']; ?>">
            </td>
        </tr>
        <tr>
            <td width="20%">副內容</td>
            <td width="79%">
                <input type="text" name="intro2" value="<?= $row['intro2']; ?>">
            </td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>