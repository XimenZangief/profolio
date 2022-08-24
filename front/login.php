<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">想要登登登登？</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body d-flex flex-column">
                <label for="acc">
                    帳號：<input type="text" id="acc">
                </label>
                <label for="pwd">
                    密碼：<input type="password" id="pw">
                </label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="login()">登入吧</button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">還是算了</button>
            </div>
            <?php
            if($_SESSION['loginMsg']){
                echo $_SESSION['loginMsg'];
            }
            ?>
        </div>
    </div>
</div>