<h1 class="text-center font-weight-bold">輪播圖管理</h1>
<hr>
<table class="table">
    <form action="../api/upload_marquee.php" method="post" enctype="multipart/form-data">
        <div class='custom-file m-auto d-block mb-2'>
            <label for="upload" class='custom-file-label'>選擇檔案</label>
            <input class="custom-file-input" type="file" name="name" id="upload">
        </div>
        <div class="mx-auto m-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
            <input class='form-control' type="text" name="intro" id="intro">
        </div>
        <div>
            <input type="submit" value="上傳" class="btn btn-primary px-3 text-center mx-5">
        </div>
    </form>
</table>
<hr>
<div class="row">
    <table class="table table-striped table-hover text-center align-middle">
        <tr>
            <td>圖片</td>
            <td>說明</td>
            <td>狀態</td>
            <td>管理</td>
        </tr>
        <tr>
            <?php
            $rows = $Marquee->all();
            foreach ($rows as $row) {
            ?>
                <td class='align-middle'>
                    <img src='../img/<?= $row['name']; ?>' style='width:192px;height:25px;'>
                </td>
                <td class='align-middle'><?= $row['intro']; ?></td>
                <td class='align-middle'>
                    <a href='../api/upload_marquee.php?id=<?= $row['id']; ?>'>
                        <?php
                        echo ($row['sh'] == 1) ? "顯示(1)" : "隱藏(0)";
                        ?>
                    </a>
                </td>
                <td class='align-middle'>
                    <a class='btn btn-info' onclick="edit(this,'<?= $row['id']; ?>')">修改</a>
                    <a class='btn btn-danger ml-2' onclick="del('marquee',<?= $row['id']; ?>)">刪除</a>
                </td>
        </tr>
    <?php
            }
    ?>
    </table>
</div>
</div>

<script>
    function edit(dom, id) {
        let text = $(dom).parent().prev().prev().text();
        let intro = prompt("請輸入要修改的圖片標題", text);
        if (intro != null) {
            $.get("../api/upload_marquee.php", {
                id,
                intro
            }, (res) => {
                console.log(id, intro);
                console.log(res);
                // location.reload();
                $(dom).parent().prev().prev().text(intro);
            })
        }
    }

    function del(table, id) {
        console.log(table, id);
        $.post("../api/del.php", {
            table,
            id
        }, () => {
            location.reload();
        })
    }
</script>
