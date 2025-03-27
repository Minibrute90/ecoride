<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>EcoRide</title>
</head>

<?php
    try
        {
            $bdd = new PDO('mysql:host=localhost; dbname=ecoride;charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
            catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
?>

<body class="site">
    <header>
    <div class="first_rows">
        <div class="logo">
            <img src="img/logo_200px.png" alt="logo ecoride">
        </div>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">Page d'accueil</a></li>
                <li><a href="accesaucovoiturages.php">Accès au covoiturages</a></li>
            </ul>
        </nav>
    </div>
    <div class="second_rows">
            <nav class ="user">
                <ul>
                    <li><a href="inscription.php">Inscrivez-vous</Inscrivez-vous></a></li>
                    <li><a href="connection.php">Connectez-vous</a></li>
                <ul>
            </nav>
            <div class="menu_hamburger"><img src="img/bouton_burger.png" alt="menu hamburger"></div>  
    </div>
    </header>

    <section class="zone_user">

        <article class="zone_user">
    
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ecoride;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}


$verifUtilisateur = $bdd->query("SELECT `pseudo`, `email`, `motdepasse` FROM `utilisateur`
                        WHERE `pseudo` LIKE '%" . $_POST['pseudo']. "%'AND `email` LIKE '%" . $_POST['email']. "%' AND `motdepasse` LIKE '%" . $_POST['motdepasse']. "%'");
$resultatVerif = $verifUtilisateur->fetch();

if($resultatVerif == 0){

$pdoStat = $bdd->prepare('INSERT INTO `utilisateur` VALUES (NULL,:nom, :prenom, :email, :motdepasse, :telephone, :adresse, :date_naissance, :photo, :pseudo )');

$pdoStat->bindValue(':nom', $_POST['nom']=NULL, PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom']=NULL, PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue(':motdepasse', $_POST['motdepasse'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['telephone']=NULL, PDO::PARAM_STR);
$pdoStat->bindValue(':adresse', $_POST['adresse']=NULL, PDO::PARAM_STR);
$pdoStat->bindValue(':date_naissance', $_POST['date_naissance']=NULL, PDO::PARAM_STR);
$pdoStat->bindValue(':photo', $_POST['photo']=NULL, PDO::PARAM_STR);
$pdoStat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();	
$message = '. Inscription reussie';	
}

else{

$message = '. Ce pseudo est déja utilisé';
}

?>
        
        <h1 class="user_info">. Inscription reussie </h1>

        <div class="anim_pouce">
            <img src="img/pouce_400px.png" alt="animation du pouve ok incription reussite">
        </div>

        <div class="bouton_user">
            <input type="submit" value="Mon espace" onclick="#">
        </div>

        </article>
    
    </section>

    <footer>
        <div class="bt_footer">
            <div class="position_email">
                <a class="email" href="#">ecoride@gmail.com</a>
            </div>
            <div class="position_mention">
                <a class="mention" href="mention_legal.html" target="_blank">mention légal</a>
            </div>
        </div>
    </footer>

</body>

<script>
    const menuHamburger = document.querySelector(".menu_hamburger")
    const navLinks = document.querySelector(".navbar")

    menuHamburger.addEventListener('click',()=>{
      navLinks.classList.toggle('mobile_menu')
    })
</script>

</html>
