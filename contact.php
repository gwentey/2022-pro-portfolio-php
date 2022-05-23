<!doctype html>
<html lang="fr">


<?php
include 'inc/menu.php';

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['sujet'])){
ini_set( 'display_errors', 1);
error_reporting( E_ALL );
$from = "contact@anthony-rodrigues.fr";
$to ="anthonyoutub@gmail.com";
$subject = "Reception d'un nouveau formulaire contact : " . $_POST['sujet'];
$message = "Object : " . $_POST['sujet'] . "<br /> Message : <br />" . $_POST['email'] . "<br /> Nom Expéditeur : "  . $_POST['nom'] . "<br /> Email Expéditeur : " .  $_POST['email'];
$headers = "De:" . $from;
mail($to,$subject,$message, $headers);
echo "envoyé !";
}

?>

<section class="banner_area">
    <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Me contacter</h2>
                    <div class="page_link">
                        <a href="accueil.php">Accueil</a>
                        <a href="contact.php">Me contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Limoges, France</h6>
                        <br />
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">+33 6 51 89 66 18</a></h6>
                        <br />
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">contact@anthony-rodrigues.fr</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row needs-validation" action="" method="post" id="" novalidate>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text"  value="" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" value="" class="form-control" id="email" name="email" placeholder="Enter votre email" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" id="sujet" name="sujet" placeholder="Sujet" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" style="height: 144px;" name="message" id="message" rows="1" placeholder="Votre Message" required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Envoyer le message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<scrip src="js/validator.js">
    </script>

    <?php include 'inc/footer.php'; ?>
    <script>

    </script>

</html>