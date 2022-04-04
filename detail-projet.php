<!doctype html>
<html lang="fr">

<?php
include 'inc/menu.php';
include 'config/functions.php';


if (isset($_GET['id'])) {
    $projet = getProjetById($_GET['id']);
} else {
    header('Location : index.php');
}
?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Projet <?= $projet->nom ?></h2>
                    <div class="page_link">
                        <a href="index.php">Accueil</a>
                        <a href="projets.php">Projet </a>
                        <a href="detail-projet.php/" . <?= $projet->id ?>><?= $projet->nom ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="img/blog/karate.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a class="active"><?= $projet->language_use ?></a>
                            </div>
                            <ul class="blog_meta list">
                                <li><a>Anthony Rodrigues<i class="lnr lnr-user"></i></a></li>
                                <li><a><?= $projet->date ?><i class="lnr lnr-calendar-full"></i></a></li>
                                <li><a><?= $projet->categorie ?><i class="lnr lnr-list"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href=""><i class="fa fa-wikipedia-w"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="./pdf/<?= $projet->pdf ?>"><i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2>Astronomy Binoculars A Great Alternative</h2>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                    </div>

                </div>
                <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="#">
                                    <h4>Space The Final Frontier</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="#">
                                    <h4>Telescopes 101</h4>
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php include 'inc/footer.php'; ?>

</html>