<!doctype html>
<html lang="fr">

<?php
	include 'inc/menu.php';
	include 'config/functions.php';

	$projets = getAllProjetIndex();
?>



	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="container box_1620">
			<div class="banner_inner d-flex align-items-center">
				<div class="banner_content">
					<div class="media">
						<div class="d-flex">
							<img src="img/personal1.jpg" width="668" alt="">
						</div>
						<div class="media-body">
							<div class="personal_text">
								<h6>Salut tout le monde, je suis </h6>
								<h3>Anthony Rodrigues</h3>
								<h4>Etudiant en BTS SIO</h4>
								<p>Passionné par le monde du numérique depuis de nombreuses années, j'ai pour objectif,
									à moyen terme, de crée ma propre entreprise afin d'aider les entreprises dans leur
									transition numérique.</p>
								<ul class="list basic_info">
									<li><a href="#"><i class="lnr lnr-calendar-full"></i> 15 Octobre 2001</a></li>
									<li><a href="#"><i class="lnr lnr-phone-handset"></i> +33 6 51 89 66 18</a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> contact@anthony-rodrigues.fr</a>
									</li>
									<li><a href="#"><i class="lnr lnr-home"></i>Limoges</a></li>
								</ul>
								<ul class="list personal_social">
									<li><a href="https://github.com/gwentey"><i class="fa fa-github"></i></a></li>
									<li><a href="https://www.linkedin.com/in/anthony-rodrigues-dev/"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Welcome Area =================-->
	<section class="welcome_area p_120">
		<div class="container">
			<div class="row welcome_inner">
				<div class="col-lg-6">
					<div class="welcome_text">
						<h4>A PROPOS DE MOI</h4>
						<p>Je suis actuellement en 2ème année de BTS SIO option SLAM à Suzanne Valadon Limoges. Ces deux
							ans de formation m’auront permis d’acquérir diverses connaissances dans le support et la
							mise à disposition des services informatiques, dans la conception et le développement
							d’applications, ainsi que des notions de cybersécurité mais également des mathématiques et
							sans oublier de fortes notions en culture économique, juridique et managériale.</p>
						<div class="row">

							<div class="col-md-4">
								<div class="wel_item">
									<i class="lnr lnr-book"></i>
									<h4>8</h4>
									<p>Projets terminée</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="wel_item">
									<i class="lnr lnr-users"></i>
									<h4>2</h4>
									<p>Idées de projet</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="tools_expert">
						<div class="skill_main">
							<div class="skill_item">
								<h4>Symfony <span class="counter">60</span>%</h4>
								<div class="progress_br">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="skill_item">
								<h4>PHP <span class="counter">80</span>%</h4>
								<div class="progress_br">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="skill_item">
								<h4>HTML <span class="counter">80</span>%</h4>
								<div class="progress_br">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="skill_item">
								<h4>Angular <span class="counter">60</span>%</h4>
								<div class="progress_br">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="skill_item">
								<h4>Merise <span class="counter">80</span>%</h4>
								<div class="progress_br">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Welcome Area =================-->

	<!--================My Tabs Area =================-->
	<section class="mytabs_area p_120">
		<div class="container">
			<div class="tabs_inner">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Experiences</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Formations</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<ul class="list">
							<li>
								<span></span>
								<div class="media mediamodif">
									<div class="d-flex">
										<p>2022, 7 semaines</p>
									</div>
									<div class="media-body">
										<h4>STAGE SADEM GROUP</h4>
										<p>Analyse des besoins de l’entreprise : UML, Merise<br />
											Développement d’un thème et plugin : Wordpress<br />
											Réalisation d’un Symfony avec récupération d’article : API Rest<br />
											Réalisation d’une document technique approfondie<br />
										</p>
									</div>
								</div>
							</li>
							<li>
								<span></span>
								<div class="media mediamodif">
									<div class="d-flex">
										<p >2021, 5 semaines</p>
									</div>
									<div class="media-body">
										<h4>STAGE LYCEE HOTELIER : Jean Monnet</h4>
										<p>Analyse des besoins de l’entreprise : Merise<br />
											Développement de l’application sous Symfony<br />
											Réalisation d’une documention technique<br />
										</p>
									</div>
								</div>
							</li>
							<li>
								<span></span>
								<div class="media mediamodif">
									<div class="d-flex">
										<p>2021, Saisonnier</p>
									</div>
									<div class="media-body">
										<h4>DECATHLON : Vendeur Sportif</h4>
										<p>Conseilles des clients sportifs dans leurs choix<br />
											Mise en rayon qualitative et garanties la disponibilité des produits<br />
											Organisation des tâches en équipe <br />
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<ul class="list">
							<li>
								<span></span>
								<div class="media mediamodif">
									<div class="d-flex">
										<p >2020 - 2022</p>
									</div>
									<div class="media-body">
										<h4>BTS SIO SLAM</h4>
										<p>2ème année, Major de promotion<br /><br />
											Support et mise à disposition des services informatiques<br />
											Conception et développement d’applications<br />
											Cybersécurité des services informatiques<br />
											Lycée Suzanne Valadon<br />
											Limoges
										</p>
									</div>
								</div>
							</li>
							<li>
								<span></span>
								<div class="media mediamodif">
									<div class="d-flex">
										<p>2019</p>
									</div>
									<div class="media-body">
										<h4>BAC STI2D</h4>
										<p>Mention Assez Bien <br />Lycée Godefroy de Bouillon<br /> Clermont-Ferrand
										</p>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End My Tabs Area =================-->

	<!--================Feature Area =================-->
	<section class="feature_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>Mes Compétences</h2>
				<p>Je fais régulièrement de la veille informatique afin de me tenir au courant des dernières nouveautés
					technologiques</p>
			</div>
			<div class="feature_inner row">
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<i class="flaticon-city"></i>
						<h4>Support et mise à disposition de services informatiques</h4>
						<p>-Gestion du patrimoine informatique<br />
							-Répondre aux incidents et aux demandes d’assistance et d’évolution<br />
							-Mise à disposition de services informatique aux utilisateurs</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<i class="flaticon-sketch"></i>
						<h4>Conception et développement d’applications</h4>
						<p>-Programmation orientée objet<br />
							-Conception d’architectures logicielles<br />
							-Exploitation et de la symfonyation des données<br />
							-Rédaction des documentations technique</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<i class="flaticon-skyline"></i>
						<h4>Sécurisation des services et applications</h4>
						<p>-Protéger les données à caractère personnel<br />
							-Préserver l'identité numérique<br />
							-Sécuriser les équipements et les usages des utilisateurs<br />
							-Garantir la disponibilité, l’intégrité et la confidentialité<br />
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Area =================-->

	<!--================Home Gallery Area =================-->
	<section class="home_gallery_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>MES DERNIERS PROJETS</h2>
				<p>Vous retrouverez ici tous mes derniers projets professionels, scolaires et personnels que j'ai pu mis
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
								<img class="img-fluid" src="<?= $projet->image ?>" width="340px" height="339px" alt="">
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
			<div class="more_btn">
				<a class="main_btn" href="portfolio.php">Voir tout les projets</a>
			</div>
		</div>
	</section>

     <?php include 'inc/footer.php'; ?>

</html>