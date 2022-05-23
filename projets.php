<!doctype html>
<html lang="fr">


<?php
	include 'inc/menu.php';
	include 'config/functions.php';

	$projets = getAllProjet();
?>

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Projets</h2>
							<div class="page_link">
								<a href="index.php">Accueil</a>
								<a href="projets.php">Projets</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Gallery Area =================-->
		<section class="home_gallery_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>MES PROJETS</h2>
				<p>Vous retrouverez ici tous mes projets professionels, scolaires et personnels que j'ai pu mis
					en oeuvre.</p>
			</div>
			<div class="isotope_fillter">
				<ul class="gallery_filter list">
					<li class="active" data-filter="*"><a href="#">Tous</a></li>
					<li data-filter=".php"><a href="#">PHP</a></li>
					<li data-filter=".symfony"><a href="#">Symfony</a></li>
					<li data-filter=".angular"><a href="#">Angular</a></li>
					<li data-filter=".autres"><a href="#">Autres</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="gallery_f_inner row imageGallery1">

				<?php foreach ($projets as $projet) { ?>

					<div class="col-lg-4 col-md-4 col-sm-6 <?= getLanguageByProjet($projet->id) ?>">
						<div class="h_gallery_item">
							<div class="g_img_item">
								<img class="img-fluid" src="img/img-projet/<?= $projet->image ?>" width="340px" height="339px" alt="">
								<a class="light" href="./detail-projet.php?id=<?= $projet->id ?>"><img src="img/img-projet/icon.png" alt=""></a>
							</div>
							<div class="g_item_text">
								<h4><?= $projet->nom ?></h4>
								<p><?= $projet->categorie ?></p>
							</div>
						</div>
					</div>

				<?php } ?>


			</div>

		</div>
	</section>
        <!--================End Home Gallery Area =================-->
        
        <?php include 'inc/footer.php'; ?>

</html>