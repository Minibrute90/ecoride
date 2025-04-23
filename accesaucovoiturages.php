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

    <section class="zone_accescovoit">
        <form action="#">
            
        <article class="zone_accescovoit">
         
                <div class="zone_input">
                    <div class="titre_input"> 1. Départ </div>
                        <input class="recherche_covoit" type="text" placeholder="Entrez votre ville de départ" name="search" required="required">
                </div>
                
                <div class="zone_input">
                    <div class="titre_input"> 2. Arrivées </div>
                        <input class="recherche_covoit" type="text" placeholder="Entrez votre ville d'arrivée" name="search" required="required">
                </div>
                
                <div class="zone_input">
                    <div class="titre_input"> 3. Date de votre trajet</i> </div>
                        <input class="recherche_covoit" type="date" placeholder="Entrez la date de votre trajet" name="search" required="required">
                    </h1>
                </div> 

        </article>
    
                <div class="bouton_recherche_covoit">
                    <input type="submit" value="rechercher" onclick="#">
                </div>

        </form>

        <article class="resultat_covoit">

        <div class="titre_resultat_covoit"><h2>Résultats de votre</h2><h2 class="h2_recherche-covoit">RECHERCHE</h2></div>

        </article>
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

</html>
