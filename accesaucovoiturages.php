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
        <div class="logo">
            <img src="img/logo_200px.png" alt="logo ecoride">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Page d'accueil</a></li>
                <li><a class="active" href="accesaucovoiturages.php">Accès au covoiturages</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
            <div class="menu_hamburger"><img src="img/bouton_burger.png" alt="menu hamburger"></div>
    </header>

    <section class="zone_accescovoit">
        <form action="#">
        <article class="zone_accescovoit">
         
                <div class="zone_input_recherche_covoit">
                    <div class="titre_input_recherche_covoit"><h1 style ="color:#51764B"> 1.</h1><h1 class="decal">  <i>Départ</i> </h1></div>
                        <input class="recherche_covoit" type="text" placeholder="Entrez votre ville de départ" name="search">
                </div>
                
                <div class="zone_input_recherche_covoit">
                    <div class="titre_input_recherche_covoit"><h1 style ="color:#51764B"> 2. </h1><h1 class="decal">  <i>Arrivées</i> </h1></div>
                        <input class="recherche_covoit" type="text" placeholder="Entrez votre ville d'arrivée" name="search">
                </div>
                
                <div class="zone_input_recherche_covoit">
                    <div class="titre_input_recherche_covoit"><h1 style ="color:#51764B"> 3. </h1><h1 class="decal"> <i>Date de votre trajet</i> </h1></div>
                        <input class="recherche_covoit" type="text" placeholder="Entrez la date de votre trajet" name="search">
                    </h1>
                </div> 

        </article>
        

        <div class="bouton_recherche_covoit">
                        <button class="btn_recherche_covoit" type="button">Rechercher</button>
        </div>
        </form>

        <article class="resultat_covoit">

        <div class="titre_resultat_covoit"><h2>Résultats de votre</h2><h2 class="h2_recherche-covoit">RECHERCHE</h2></div>

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
