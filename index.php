<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>EcoRide</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="logo">
      <img src="img/logo_200px.png" alt="logo ecoride">
    </div>
    <nav class="navbar">
        <ul>
          <li><a class="active" href="#">Page d'accueil</a></li>
          <li><a href="#">Accès au covoiturages</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
   </nav>
   <div class="menu_hamburger"><img src="img/bouton_burger.png" alt="menu hamburger"></div>
  </header>

  <main>
  
  <section class="container">
    <div class="texte">
      <p class="para">
        <b>EcoRide</b> est une <b>startup française</b> récemment créée avec une mission claire 
        <b>réduire l'impact environnemental des déplacements en favorisant le covoiturage</b>. 
        En adoptant une approche écologique, <b>EcoRide propose une solution innovante</b>. 
      </p>
      <p class="para">
       <b>L’ambition d’EcoRide est de devenir la référence en matière de covoiturage pour les voyageurs 
        soucieux de l’environnement</b> ainsi que ceux recherchant une alternative économique. 
        La plateforme se concentre exclusivement sur les trajets en voiture, 
        garantissant ainsi une expérience optimisée pour ses utilisateurs.
     </p>
     <p class="para">
       <b>Avec EcoRide, chaque trajet devient un pas de plus vers une mobilité plus responsable et durable.</b>
     </p>
    </div>
    <div class="columnright">
      <div class="illustration_accueil">
        <img src="img/illust_463.jpg" alt="illustration">
      </div>
     <div class="recherche">
      <p><b>Votre prochaine destination</b></p>
     <form action="#">
       <input class="accueil" type="text" placeholder="Votre destination" name="search">
       <button class="accueil" type="button">Rechercher</button></li>
     </form>
   </div>
  </section>

  </main>

  <footer>
      <div class="position_email">
       <a class="email" href="#">ecoride@gmail.com</a>
      </div>
      <div class="position_mention">
        <a class="mention" href="mention_legal.html" target="_blank">mention légal</a>
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