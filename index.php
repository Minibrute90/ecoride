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
                <li><a href="accesaucovoiturages.php">Accès aux covoiturages</a></li>
                <div class="nav_responsive">
                    <li><a href="connection.php">Mon espace</Inscrivez-vous></a></li>
                    <li><a href="inscription.php">S'inscrire</a></li>
                </div>
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
            </nav>
            <div class="menu_hamburger"><img src="img/bouton_burger.png" alt="menu hamburger"></div> 
    </div>
    </header>

    <section class="index">
        
        <article class="first_rows_index">
                <img class="logo_index" src="img/logo_200px.png" alt="logo ecoride">
            <div class="txt_accroche">
                <h1>Bienvenue sur EcoRide</h1>
                <p><b>La plateforme de covoiturage écologique</b> qui vous permet de voyager tout en </br> réduisant votre empreinte carbone.</p>
            </div>
        </article>

        <article class="second_rows_index">

                <div class="item">
                   <div class=""> <h2>Ecologique <img class="picto_feuille" src="img/feuille.png" alt="picto feuille ecologique"></h2> </div>
                    <p>Covoiturez, respirez mieux</p>
                    <div class="bulle">
                        <img class="image" src="img/paysage.jpg" alt="femme avec un sourire" >
                        <div class="savoir"> En savoir + </div>
                        <div class="overlay">    
                            <div class="text">
                               <p>Réduire l'impact environnemental des déplacements en favorisant le covoiturage.</p> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <h2>Economique <div class="euro">€</div></h2>
                    <h3>Covoiturez, dépensez moins</h3>
                    <div class="bulle">
                        <img class="image" src="img/economique.jpg" alt="femme avec un sourire" >
                        <div class="savoir"> En savoir + </div>
                        <div class="overlay">
                            <div class="text">
                                <p>Devenir la référence en matière de covoiturage 
                                pour les voyageurs soucieux de l’environnement ainsi que ceux recherchant une alternative économique.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img class="tree_car" src="img/tree_car.png" alt="picto arbre et voiture">
                    <p>Covoiturez, voyagez malin</p>
                    <div class="bulle">
                        <img class="image" src="img/paysage_2.jpg" alt="femme avec un sourire" >
                        <div class="savoir"> En savoir + </div>
                        <div class="overlay">
                            <div class="text">
                                <p>Avec EcoRide, chaque trajet devient un pas de plus vers une mobilité plus responsable et durable.<p>
                            </div>
                        </div>
                    </div>
                </div>

        </article>

        <article class="zone_accescovoit_index">

        <div><h2 class="trajet_index">Votre prochain trajet</h2></div>

        <div class="zone_covoit_index">
         
            <div class="zone_input">
                <div class="titre_input_index"> 1. Départ </div>
                    <input class="recherche_covoit" type="text" placeholder="Entrez votre ville de départ" name="search" required="required">
            </div>
         
            <div class="zone_input">
                <div class="titre_input_index"> 2. Arrivées </div>
                    <input class="recherche_covoit" type="text" placeholder="Entrez votre ville d'arrivée" name="search" required="required">
            </div>
    
            <div class="zone_input">
                <div class="titre_input_index"> 3. Date de votre trajet </div>
                    <input class="recherche_covoit" type="date" placeholder="Entrez la date de votre trajet" name="search" required="required">
            </div> 

        </div>

        <div class="bouton_recherche_covoit_index">
            <input type="submit" value="Rechercher" onclick="#">
         </div>
        
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
