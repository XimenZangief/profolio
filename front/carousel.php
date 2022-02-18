<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- 
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> 
    -->
    <div class="carousel-inner">
        <?php
        $marquees = $Marquee->all(['sh' => 1]);
        foreach ($marquees as $marquee) {
        ?>
            <div class="carousel-item">
                <img src="./img/<?= $marquee['name']; ?>" class="d-block w-100" alt="<?= $marquee['intro']; ?>">
            </div>
        <?php
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>