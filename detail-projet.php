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

<section class="banner_area">
    <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2><?= $projet->nom ?></h2>
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

<section class="blog_area single-post-area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="./img/img-couverture/<?= $projet->couverture ?>" width="1140px" height="350px" alt="">
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
                                <?php if(!is_null($projet->git_lien)){ ?>
                                <li><a href="<?= $projet->git_lien ?>"><i class="fa fa-github"></i></a></li>
                                <?php } if($projet->pdf != null){ ?>
                                <li><a href="./<?= $projet->pdf ?>"><i class="fa fa-file-pdf-o"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2><?= $projet->nom ?></h2>
                        <p class="excert">
                        <?= $projet->content ?>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>

</html>