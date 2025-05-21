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

    <article class="first_rows_index">
                <img class="logo_index" src="img/logo_200px.png" alt="logo ecoride">
            <div class="txt_accroche">
                <h1>. Connexion</h1>
                <p>Merci d'entrer vos identifiants</p>
            </div>
    </article>

    <section class="zone_user">
        <form method="post" action="espace_utilisateur.php">
        <article class="zone_user">

                <div class="zone_input">
                    <h2>1. Pseudo</h2>
                        <input class="user" type="text" placeholder="Entrez un pseudo" name="pseudo" id="pseudo" required="required">
                </div>
                
                <div class="zone_input">
                    <h2>2. Mot de passe</h2>
                        <input class="user" type="password" placeholder="Entrez votre mot de passe" name="motdepasse" id="motdepasse" required="required">
                
                        <div class="password-icon">
                            <i data-feather="eye"></i>
                            <i data-feather="eye-off"></i>
                        </div>
                </div>

                <div class="bouton_user">
                    <input type="submit" value="connection" onclick="#">
                </div>
                
        </form>
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

<script src="https://unpkg.com/feather-icons"></script>

<script>
  feather.replace();
</script>

<script>

    const eye = document.querySelector(".feather-eye");
    const eyeoff = document.querySelector(".feather-eye-off");
    const passwordField = document.querySelector("input[type=password]");

    eye.addEventListener("click", () => {
    eye.style.display = "none";
    eyeoff.style.display = "block";
    passwordField.type = "text";
});

    eyeoff.addEventListener("click", () => {
    eyeoff.style.display = "none";
    eye.style.display = "block";
    passwordField.type = "password";
});

</script>


</html>
