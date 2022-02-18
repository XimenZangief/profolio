<section class="portflio" id="portflio">
    <div class="container">
        <h1 class="mb-5 display-1">PORTFOLIO</h1>
        <div class="row no-gutters">
            <?php
            $portfolios = $Portfolio->all(['sh' => 1], 'order by `id` desc limit 3');
            foreach ($portfolios as $portfolio) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <?= $portfolio['title']; ?>
                        </div>
                        <div class="card-block py-lg-3">
                            <h4 class="card-title"><?= $portfolio['titleEng']; ?></h4>
                            <p class="card-text">
                                <a href="<?= $portfolio['href']; ?>">
                                    <img src="./img/<?= $portfolio['name']; ?>" alt="<?= $portfolio['titleEng']; ?>" width="70%" height="70%">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>