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
                                <?php if (!is_null($projet->git_lien)) { ?>
                                    <li><a href="<?= $projet->git_lien ?>"><i class="fa fa-github"></i></a></li>
                                <?php }
                                if ($projet->pdf != NULL) { ?>
                                    <li><a href="./<?= $projet->pdf ?>"><i class="fa fa-file-pdf-o"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2><?= $projet->nom ?></h2>
                        <p class="excert">
                            <!-- ICI -->
                        <p> Depuis quelques ann??es, la population d'abeilles est en tr??s forte diminution, avec une disparition totale sur certaines zones. Ce ph??nom??ne porte le nom de ?? Syndrome d'effondrement des colonies d'abeilles ?? ou CCD (Colony Collapse Disorder) : subitement, les ruches se vident de leurs abeilles sans que l???on ne retrouve aucun cadavre ?? proximit??. Ce syndrome est tr??s pr??occupant en raison de l'importance ??cologique de l'abeille en tant que pollinisatrice. <br /><br /> Les ??tudes en cours montrent que plusieurs causes sont responsables de cette disparition progressive : traitements pesticides, infections parasitaires, maladies, pollution, r??duction de la ressource alimentaire (quantit?? et diversit?? des fleurs fournissant nectar et pollen) et des habitats, comp??tition avec des esp??ces invasives, changement climatique, multiplication des ??missions ??lectromagn??tiques, nouveaux pr??dateurs... <br /> <br /> Les cons??quences sont terribles, seules 25 % des cultures ne d??pendent pas de l'action des insectes pollinisateurs (les c??r??ales par exemple). On estime ?? 153 milliards d'euros par an l'apport mondial de l'action pollinisatrice des insectes. Nous sommes confront??s ?? la perspective d'une perte ??conomique de grande envergure, mais aussi d'une perte ??cologique majeure, les insectes ne jouant pas dans les ??cosyst??mes le seul r??le de porteurs de pollen mais s'inscrivant dans de multiples cha??nes d'interactions utiles -sinon indispensables-aux divers maillons en pr??sence. <br /> <br /> <img src="img/images/mcd_ruche_presentation.png" class="rounded mx-auto d-block" width="80%" alt="..."> <br /><br />
                        <h3>Ma mission</h3>
                        <ul class="list-group">
                            <li class="list-item">Mesurer le poids de la ruche et dimensionner une alimentation solaire</li>
                            <li class="list-item">Mesurer la temp??rature et l???hygrom??trie, localiser la ruche</li>
                            <li class="list-item">Communiquer les valeurs par SMS p??riodiquement et alerter par SMS en cas de d??faut temp??rature ou d??faut batterie</li>
                        </ul> <br />
                        <h3>Quelques images de la r??alisation</h3>
                        <div class="row">
                            <div class="col-12 my-3"><img src="img/images/mcd_ruche_connecte_1.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-6 my-3"><img src="img/images/mcd_ruche_connecte_2.1.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-6 my-3"><img src="img/images/mcd_ruche_connecte_2.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-3 my-3"><img src="img/images/mcd_ruche_connecte_3.1.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-4 my-3"><img src="img/images/mcd_ruche_connecte_3.2.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-4 my-3"><img src="img/images/mcd_ruche_connecte_3.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-4 my-3"><img src="img/images/mcd_ruche_connecte_f.jpg" class="img-thumbnail" alt="..."></div>
                            <div class="col-7 my-3"><img src="img/images/mcd_ruche_connecte_interco.png" class="img-thumbnail" alt="..."></div>
                        </div>
                        <br />
                        <div class="alert alert-success" role="alert">Nous avons particip?? et d??croch?? le premier prix du d??veloppement durable ?? l'olympiade des m??tiers.</div> <!-- ICI -->
                        <br />

                        <h3>Le PowerPoint</h3> <video controls width="100%">
                            <source width="480" src="video/projet_ruche_co.mp4" type="video/mp4"> Sorry, your browser doesn't support embedded videos.
                        </video> <br />
                        <div class="alert alert-primary" role="alert">Vous pouvez retrouver le Powerpoint en cliquant sur l'icone PDF. </div> <!-- ICI -->

                        <!-- ICI -->

                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>

</html>