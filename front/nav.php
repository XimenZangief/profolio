<header id="top">
    <nav class="navbar navbar-expand-lg fixed-top navbar-toggleable-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">XimenZangief</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link scroll" href="#top">TOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#timeline">TIMELINE</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link scroll" href="#stage">STAGE</a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#portflio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#footer">FOOTER</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                LOGIN
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-2"><?= $Title->find(1)['content']; ?></h1>
            </div>
        </div>
    </div>
</header>