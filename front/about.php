<section class="about" id="about">
    <div class="container text-lg-center">
        <h1 class="mb-5 display-4">ＡＢＯＵＴ</h1>
        <div class="row">
            <?php
            $about = $About->find(1);
            ?>
            <div class="col-md-3">
                <h3><?= $about['hi']; ?></h3>
                <p><?= $about['name']; ?></p>
            </div>
            <div class="col-md-6">
                <h3><?= $about['intro1']; ?></h3>
                <p><?= $about['intro2']; ?></p>
            </div>
            <div class="col-md-3">
                <h3><?= mb_strrev($about['hi']); ?></h3>
                <p><?= mb_strrev($about['name']); ?></p>
            </div>
        </div>
    </div>
</section>