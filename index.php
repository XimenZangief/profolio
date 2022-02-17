<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WelcomeToXimenZangief</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="./jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/bbf53becfc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./custom.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G14BT2QGYZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-G14BT2QGYZ');
    </script>
</head>

<body>
    <!-- header & navbar -->
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
                    <h1 class="display-2"><?= $Title->find(1)['title']; ?></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- header & navbar END -->

    <!-- 輪播圖 -->
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
    <!-- 輪播圖 END -->

    <!-- 自介 -->
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
    <!-- 自介END -->

    <!-- TIMELINE -->
    <div class="container-fluid pt-lg-5" id="timeline">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5 text-lg-center">Backend Devoloper Roadmap</h4>
                        <div class="hori-timeline" dir="ltr">
                            <ul class="list-inline events">
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-danger text-danger">HTML5</div>
                                        <h5 class="font-size-16"><i class="fab fa-html5 fa-7x" style="color:#e45126"></i></h5>
                                        <p class="text-muted"></p>
                                        <div></div>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-primary text-primary">CSS3</div>
                                        <h5 class="font-size-16"><i class="fab fa-css3-alt fa-7x" style="color:#0c73b8;"></i></h5>
                                        <p class="text-muted"></p>
                                        <div></div>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-warning text-warning">JS</div>
                                        <h5 class="font-size-16"><i class="fab fa-js-square fa-7x" style="color:#e4a227"></i></h5>
                                        <p class="text-muted"></p>
                                        <div></div>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-info text-info">PHP</div>
                                        <h5 class="font-size-16"><i class="fab fa-php fa-7x" style="color:#787cb4"></i></h5>
                                        <p class="text-muted"></p>
                                        <div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TIMELINE END -->

    <!-- 作品集 -->
    <section class="portflio" id="portflio">
        <div class="container">
            <h1 class="mb-5 display-1">PORTFOLIO</h1>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <?php
                    $portfolios = $Portfolio->all(['sh' => 1], 'order by `id` desc limit 3');
                    foreach ($portfolios as $portfolio) {
                    ?>
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
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- 作品集 END -->

    <!-- Login Modal -->
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
            </div>
        </div>
    </div>
    <!-- Login Modal END-->

    <!-- footer -->
    <footer id="footer">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="mailto:s9671073@gmail.com"><i class="fa fa-envelope fa-2x text-secondary" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/bob780605"><i class="fa fa-twitter fa-2x" alt="twitter icon"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="www.linkedin.com/in/ximenZangief"><i class="fa fa-linkedin fa-2x" alt="linkedin icon"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/XimenZangief"><i class="fa fa-github-square fa-2x text-dark" alt="github icon"></i></a>
            </li>
        </ul>
        <?= $Bottom->find(1)['bottom']; ?>
    </footer>
    <!-- footer END -->
    <script>
        $(document).ready(function() {
            var scrollLink = $('.scroll');

            // 捲動動畫
            scrollLink.click(function(e) {
                e.preventDefault();
                $('body,html').animate({
                    scrollTop: $(this.hash).offset().top
                }, 500);
            });

            // 切換active
            $(window).scroll(function() {
                var scrollbarLocation = $(this).scrollTop();

                scrollLink.each(function() {
                    var sectionOffset = $(this.hash).offset().top - 20;
                    if (sectionOffset <= scrollbarLocation) {
                        $(this).parent().addClass('active');
                        $(this).parent().siblings().removeClass('active');
                    }
                })
            })

            $('.nav-link').hover(function() {
                $(this).addClass("btn btn-secondary");
            }, function() {
                $(this).removeClass("btn btn-secondary");
            })
        })
        $('.carousel-item:first').addClass("active");

        $('.card:odd').addClass("bg-info");
        $('.card:even').addClass("featured bg-inverse text-white");
        $('.card-header:even').addClass("bg-primary text-white");
        $('.card-header:odd').addClass("bg-danger text-uppercase");

        function login() {
            $.post("api/chk.php", {
                    acc: $("#acc").val(),
                    pw: $("#pw").val(),
                },
                (chk) => {
                    if (parseInt(chk)) {
                        // 題目要求登入後進首頁
                        location.href = "back/index.php";
                    } else {
                        alert(`
                        こんぺここんぺここんぺこー！
                                登入失敗peko~
                        `);
                    }
                }
            )
        }
    </script>

</body>

</html>