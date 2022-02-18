<?php
$row = $Title->find(3);
// 字串->陣列
$block = unserialize($row['content']);
?>

<h1 class="ct">區塊管理</h1>

<form action="../api/save_block.php" method="post">
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="content[]" value="1" id="chk1" <?= (in_array(1, $block)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="chk1">大字報</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="content[]" value="2" id="chk2" <?= (in_array(2, $block)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="chk2">輪播圖</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="content[]" value="3" id="chk3" <?= (in_array(3, $block)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="chk3">時間軸</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="content[]" value="4" id="chk4" <?= (in_array(4, $block)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="chk4">作品集</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="content[]" value="5" id="chk5" <?= (in_array(5, $block)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="chk5">頁尾</label>
    </div>
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <button type="submit">修改</button>
    <button type="reset">重置</button>
</form>