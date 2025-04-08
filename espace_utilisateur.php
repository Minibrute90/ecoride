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

<body class="site">
<header>
    <div class="first_rows">
        <div class="logo_ban">
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
                    <img class="picto_nav" src="img/perso.png" alt="picto espace personnel">
                        <li><a href="connection.php">Mon espace</Inscrivez-vous></a></li>
                    <img class="picto_nav" src="img/inscription.png" alt="picto espace personnel">
                    <li><a href="inscription.php">S'inscrire</a></li>
                <ul>
            <div class="menu_hamburger"><img src="img/bouton_burger.png" alt="menu hamburger"></div>
            </nav>
        
    </div>
    </header>

<section class="zone_espace">

<?php


if (!isset($_POST['pseudo'], $_POST['motdepasse']) || empty(trim($_POST['pseudo'])) || empty(trim($_POST['motdepasse']))) {
    echo "<p class='erreur'>Veuillez entrer un pseudo et un mot de passe valide.</p>";
    exit;
}

try {
    // Connexion à la base de données (remplacez par vos paramètres)
    $bdd = new PDO('mysql:host=localhost;dbname=ecoride;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête préparée pour récupérer l'utilisateur avec le pseudo
    $stmt = $bdd->prepare("SELECT * FROM utilisateur WHERE pseudo LIKE :pseudo LIMIT 1");
    $pseudo = trim($_POST['pseudo']);
    $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt->execute();

    // Récupération du résultat
    $infoop = $stmt->fetch(PDO::FETCH_OBJ);

    if ($infoop) {
        // Vérification du mot de passe avec password_verify()
        if ($_POST['motdepasse'] === $infoop->motdepasse)  {
            // Affichage des informations de l'utilisateur
            echo "<h1 class='pseudo'>" . '. Espace de ' . ($infoop->pseudo) . "</h1>\n";
            echo "<table class=''>\n";
            echo "    <tr><td class=''>NOM</td><td class=''>" . ($infoop->nom) . "</td></tr>\n";
            echo "    <tr><td class=''>Prénom</td><td class=''>" . ($infoop->prenom) . "</td></tr>\n";
            echo "    <tr><td class=''>Email</td><td class=''>" . ($infoop->email) . "</td></tr>\n";
            echo "    <tr><td class=''>Téléphone</td><td class=''>" . ($infoop->telephone) . "</td></tr>\n";
            echo "    <tr><td class=''>Adresse</td><td class=''>" . ($infoop->adresse) . "</td></tr>\n";
            echo "    <tr><td class=''>Date de naissance</td><td class=''>" . ($infoop->date_naissance) . "</td></tr>\n";
            echo "</table>\n";
        } else {
            echo "<p class='erreur'>Mot de passe incorrect.</p>";
            echo "<ul class='retour'><li><a href='connection.php'>Reessayer</a></li></ul>";
        }
        } else {
            echo "<p class='erreur'>Aucun utilisateur trouvé avec ce pseudo.</p>";
            echo "<ul class='retour'><li><a href='connection.php'>Reessayer</a></li></ul>";
    }
} catch (PDOException $e) {
    echo "<p class='erreur'>Erreur : " . $e->getMessage() . "</p>";
}
?>
	 

</section>



<footer>
        <div class="logo_ban">
            <img src="img/logo_200px.png" alt="logo ecoride">
        </div>
        <div class="bt_footer">
            <a class="email" href="#"><b>@</b> Nous contacter</a>
            <div class="mention">
                <img src="img/mention.png" alt="picto mentions légales">
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

<script>
</script>


</html>
