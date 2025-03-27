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
        <form onsubmit="verifierMotDePasse(event)">
        <article class="zone_user">

                <h1 class="user_info">. Inscription au site </h1>

                <div class="zone_input">
                    <div class="titre_input"><h1 style ="color:#51764B"> 1.</h1><h1 class="decal">  <i>Pseudo</i> </h1></div>
                        <input class="user" type="text" placeholder="Entrez un pseudo" name="pseudo" id="pseudo" required="required">
                </div>
                
                <div class="zone_input">
                    <div class="titre_input"><h1 style ="color:#51764B"> 2. </h1><h1 class="decal">  <i>Email</i> </h1></div>
                        <input class="user" type="text" placeholder="Entrez votre addresse mail" name="email" id="email" required="required">
                </div>
                
                <div class="zone_input">
                    <div class="titre_input"><h1 style ="color:#51764B"> 3. </h1><h1 class="decal"> <i>Mot de passe</i> </h1></div>
                        <input class="user" type="password" placeholder="Entrez votre mot de passe" name="motdepasse" id="motdepasse" required >
                    </h1>
                    
                </div>

                <div class="condition">
                    <p>8 caractères minimum</p>
                    <p>1 chiffre minimum</p>
                    <p>1 majuscule minimum</p>
                    <p>10 caractères spécial minimum (!?_-@&)</p></br>
                </div>

                <div class="bouton_user">
                    <input type="submit" value="valider" onclick="#">
                </div>
                
        </form>
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

<script>
        function verifierMotDePasse(event) {
            let motDePasse = document.getElementById('motdepasse').value;
            let message = '';

            // Condition 1 : Le mot de passe doit avoir au moins 8 caractères
            if (motDePasse.length < 8) {
                message += 'Le mot de passe doit comporter au moins 8 caractères. <br>';
            }

            // Condition 2 : Le mot de passe doit contenir au moins un chiffre
            if (!/[0-9]/.test(motDePasse)) {
                message += 'Le mot de passe doit contenir au moins un chiffre. <br>';
            }

            // Condition 3 : Le mot de passe doit contenir au moins une lettre majuscule
            if (!/[A-Z]/.test(motDePasse)) {
                message += 'Le mot de passe doit contenir au moins une lettre majuscule. <br>';
            }

            // Condition 4 : Le mot de passe doit contenir au moins 10 caractères spéciaux parmi (!?_-@&)
            var specialChars = motDePasse.match(/[!?_-@&]/g);
            if (!specialChars || specialChars.length < 10) {
                message += 'Le mot de passe doit contenir au moins 10 caractères spéciaux parmi (!?_-@&). <br>';
            }

            // Affichage des erreurs ou confirmation
            if (message !== '') {
                document.getElementById('erreur').innerHTML = message;
                return false; // Le mot de passe ne respecte pas les conditions
            } else {
                document.getElementById('erreur').innerHTML = 'Mot de passe valide.';
                return true; // Le mot de passe respecte toutes les conditions
            }
        }
    </script>


</html>
