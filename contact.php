<?php
    if($_POST)
    { 
        if(empty($_POST['nom']))
        {
            $errorNom = '<em>Champ obligatoire</em>';
            $error = true;
        } 
    
        if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
        {
            $errorMail = '<em> Format Email non valide </em>';
            $error = true;
        } 
       
        if(empty($_POST['message']))
        {
            $errorMessage = '<em>Champ obligatoire</em>';
            $error = true;
        } 
        if (!isset($error) ) 
        {
            $nom = $_POST['nom'];
            $mailFrom = $_POST['mail'];
            $message = $_POST['message'];

            $mailTo = "postmaster@fabid.fr";
            $headers = "De: ".$mailFrom;
            $txt = "Vous avez reçu un message de ".$nom.".\r\n".$message;

            mail($mailTo, $txt, $headers);
            // header("Location: contact.php?mailsend");
        
            $valid = '<p><strong>Votre message a été envoyé avec succès</strong></p>';
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="img/icon.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Contact</title>
    </head>
    <body id="contact">
        <div class="container-ct">
            <div class="retour">
                <a href="index.php">Portfolio</a>
                <i class="fas fa-chevron-right"></i>
                Contact

            </div>
            <h1>Contact</h1>
            <p>
                <?php
                if(isset($valid)) echo $valid;
                ?>
            </p>
            <form method="post" action="">
                <div class="formulaire-text">
                    <a class="fas fa-user"></a>
                    <input type="text" id="nom" placeholder="Nom" name="nom">
                </div>
                <?php if(isset($errorNom)) echo $errorNom; ?>

                <div class="formulaire-text">
                    <a class="far fa-envelope"></a>
                    <input type="mail" id="mail" placeholder="Votre mail" name="mail">
                </div>
                <?php if(isset($errorMail)) echo $errorMail; ?>

                <div class="formulaire-text">
                    <textarea id="text" rows="5" name="message" area=25 placeholder="Votre message" ></textarea>
                </div>
                <?php if(isset($errorMessage)) echo $errorMessage; ?>

                <input type="submit" value="Envoyer" name="submit" class="boutton">
            </form> 
            <section class="contact1">
                <div class="iconContact">
                    <div class="iconHover">
                        <a href="mailto:abidzora88@gmail.com" class="iconText">abidzora88@gmail.com</a>
                        <a class="iconBtn">
                        <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
                    
                <div class="iconContact">
                    <div class="iconHover">
                        <a href="tel:0033635794348" class="iconText">0635794348</a>
                        <a class="iconBtn">
                        <i class="fas fa-phone"></i>
                        </a>
                    </div>
                </div>
            </section>
       </div>
    </body>
</html>