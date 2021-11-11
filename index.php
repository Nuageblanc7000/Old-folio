<?php
require 'admin/bd.php';
?>
<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PortFolio Wetterene Rémy">
    <!--Open Graph-->
    <meta property="og:title" content="Portfolio R.W">
    <meta property="og:site_name"content="Portfolio R.W">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://wetterene-remy-dev.com/">
    <meta property="og:image" content="http://wetterene-remy-dev.com/img/picture1.jpg">
    <meta property="og:image:width" content="350">
    <meta property="og:image:height" content="250">
    <meta property="og:description" content="Ce PortFolio à pour but de démontrer mes capacités. Il sera donc constament renouvelé et mis à jour.(bientôt en full symfony). N'hésitez pas à me rendre visite et à laisser un commentaire.">
    <!----END OPEN GRAPH--> 
  
    <link rel="icon" type="image/svg" href="img/logotitle.svg" sizes="32x32">
    <link rel="icon" type="image/svg" href="img/logotitle.svg"  sizes="16x16">
    <link rel="apple-touch-icon" sizes="120x120" href="img/logotitle.svg">
    <link rel="apple-touch-icon" sizes="152x152" href="img/logotitle.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logotitle.svg">
    <link rel="apple-touch-icon" sizes="192x192" href="img/logotitle.svg">
    <!--font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&family=Paytone+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Paytone+One&display=swap" rel="stylesheet"> 
    <!------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<title>Portfolio R.W</title>
</head>
<body class="min-vh-100">
<div class="loader container-fluid w-100 bg-blac position-fixed">
    <div class="container">
    <div class="row min-vh-100 align-items-center justify-content-center">
        <div class="col d-flex justify-content-center align-items-center flex-column">
<h4 class="text-white text-center h1 mt-4 mb-4">Portfolio</h4>
<svg class="mt-4 mb-4 svgS" width="203" height="153" viewBox="0 0 203 153" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_d)">
    <path d="M135.627 65.1768C135.209 66.5853 134.686 67.9937 134.164 69.2979C133.172 71.5931 132.022 73.8362 130.769 75.9229C127.06 81.7132 122.306 86.4081 116.769 89.6424C116.195 89.9554 115.725 90.3727 115.307 90.8943C114.889 91.416 114.628 92.042 114.419 92.7723C114.262 93.4504 114.21 94.1808 114.262 94.8589C114.367 95.5892 114.523 96.2674 114.837 96.8412L118.075 103.049L129.411 124.698C129.776 125.428 129.985 126.315 129.985 127.149C129.985 128.036 129.776 128.871 129.411 129.601L125.127 139.095C124.709 139.982 124.083 140.712 123.351 141.234C122.62 141.756 121.732 142.016 120.896 141.964H115.881C115.046 141.964 114.262 141.756 113.531 141.286C112.8 140.817 112.173 140.191 111.755 139.356L77.2791 74.0449L76.4433 72.4799H96.8676C97.181 72.4278 97.5467 72.4278 97.8601 72.4799H100.002C108.568 71.5931 119.956 56.2043 116.508 42.9543C115.202 38.6246 113.061 34.7644 110.188 31.7388C107.315 28.661 103.815 26.4701 100.054 25.3746C99.5839 25.2703 99.0615 25.2703 98.5914 25.3224H41.1841C40.3483 25.3746 39.4603 25.1138 38.729 24.5921C37.9977 24.0705 37.4231 23.288 37.0052 22.4012C36.6396 21.5143 36.4829 20.471 36.5873 19.4799C36.6918 18.4888 37.0574 17.5498 37.5798 16.7673L47.818 4.19544C48.2882 3.67379 48.8105 3.2043 49.3851 2.89131C49.9597 2.57831 50.5866 2.42182 51.2656 2.42182C59.101 2.21316 86.8383 1.58717 97.9645 2.42182C110.815 3.46512 118.754 8.73383 127.53 17.6019C136.306 26.4701 141.007 47.8579 135.627 65.1768Z" stroke="white" stroke-width="4"/>
    <path d="M67.8564 118.792C67.8564 119.264 67.7524 119.683 67.5965 120.102L58.7079 139.759C58.448 140.23 58.0841 140.597 57.6683 140.859C57.2524 141.121 56.7846 141.226 56.3168 141.226C55.849 141.226 55.3811 141.069 54.9653 140.859C54.5495 140.597 54.1856 140.23 53.9257 139.759L6.2599 36.0267C6.10396 35.6074 6 35.0832 6 34.5591C6 34.0349 6.15594 33.5632 6.41584 33.0914C6.67574 32.6721 6.98762 32.3052 7.35148 32.0955C7.76732 31.8858 8.18317 31.781 8.59901 31.781H27C27.4678 31.781 27.9356 31.9383 28.3515 32.2003C28.7673 32.4624 29.1312 32.8817 29.3391 33.4059L67.4925 117.482C67.7524 117.901 67.8564 118.32 67.8564 118.792Z" stroke="#987900" stroke-width="3"/>
    <path d="M196.603 34.39L152.847 140.989C152.636 141.512 152.268 141.931 151.847 142.245C151.427 142.558 150.953 142.715 150.48 142.715C150.007 142.715 149.533 142.611 149.06 142.349C148.639 142.088 148.271 141.669 148.008 141.198L138.174 121.898C138.016 121.479 137.911 121.061 137.911 120.59C137.911 120.119 138.016 119.701 138.174 119.282L173.147 32.9255C173.357 32.4024 173.673 31.984 174.094 31.6701C174.514 31.3563 174.988 31.1994 175.461 31.1994L193.921 30.3102C194.341 30.2579 194.815 30.3102 195.235 30.5717C195.656 30.7809 195.972 31.0948 196.235 31.5132C196.497 31.9317 196.655 32.4024 196.708 32.9255C196.866 33.3962 196.76 33.9193 196.603 34.39Z" stroke="#987900" stroke-width="3"/>
    </g>
    <defs>
    <filter id="filter0_d" x="0.5" y="0.000213623" width="201.786" height="152.215" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
    <feOffset dy="4"/>
    <feGaussianBlur stdDeviation="2"/>
    <feComposite in2="hardAlpha" operator="out"/>
    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
    </filter>
    </defs>
    </svg>
        </div>
    </div>
</div>  
</div>

<!--home-->

<section id="accueil" class="container-fluid w-100 h-auto position-relative bg-black  pt-1">
<div class="bgNav position-fixed d-sm-none d-block "><div class="navG  bg-warning position-absolute"></div></div>   
<header class="head position-relative row justify-content-around">


  <nav class="burgerOff navbar nav position-sm-relative d-sm-flex w-75  align-items-center">
    <ul class="nav justify-content-around text-white w-100">
        <li class="nav-item"><a class="nav-link text-white pt-0" href="#accueil">Accueil</a></li>
        <li class="nav-item"><a class="nav-link text-white pt-0" href="#profil">Profil</a></li>
        <li class="nav-item"><a class="nav-link text-white pt-0" href="#competences">Compétences</a></li>
        <li class="nav-item"><a class="nav-link text-white pt-0" href="#projets">Projets</a></li>
        <li class="nav-item"><a class="nav-link text-white pt-0" href="#contact">Contact</a></li>
    </ul>
</nav>
<div class="col-1 h-auto w-auto d-flex align-items-center"><img class="img-fluid" src="img/logoHead.svg" alt="logo"></div>
</div>
</header>
<section class="container h-auto position-relative">
    <div class="row justify-content-center align-items-center flex-column viewSize position-relative">
        <div class=" col-6 w-auto mb-4">
           <img class="logo img-fluid" src="img/LogoHome.svg" alt="logo home">
        </div>
        <div class="col-6 w-auto mt-4">
            <h1 class="text-white">
        <span class="d-block text-center text-opacity-75 textOpa"><span class="text-uppercase">é</span>tudiant</span>
        <span class="titleSize"><span class="colorGold text-uppercase">w</span>eb <span class="text-uppercase">d</span>eveloppe<span class="colorGold">r</span></span></h1>
        </div>

        <div class="col-6 w-auto mt-4">
            <a href="#profil"><img class="scroll" src="img/scroll.png" alt="flèches/arrow"></a>
        </div>
    </div>
</section>
</section>
<!------------------------------------->
<section id="profil" class="container-fluid h-auto position-relative">
    <img class="triBlack position-absolute" src="img/triangleBlack.png" alt="triangle black">
<section  class="container">
    <div class="row min-vh-100 flex-column align-items-center">
    <header class="col-12 h-auto w-auto">
        <h2 class="h2 text-black text-center">
        <span class="text-uppercase colorGold">P</span>rofil</h2>
    </header>
        <picture class="col-12 col-sm-8 col-lg-7 d-flex justify-content-center mt-6 profilImg">
            <img  src="img/remy.png" alt="photo profil">
        </picture>
        <article class="line col-12 col-sm-8 col-lg-7">
            <h3 class="col-12">Bonjour, je me présente<span class="d-block">Wetterene Rémy</span></h3>
            <article>
                <p>Passionné <span class="colorGold fs-6 fw-bold">d'informatique</span> et <span class="colorGold fs-6 fw-bold">d'intelligence artificielle</span>, j'aime découvrir chaque jour de nouvelles choses et relever les défis que l'on me propose.
                </p>  
                <p>Actuellement <span class="colorGold fs-6 fw-bold">étudiant</span> en dernière année de Web développement à l'EPSE d'Enghien, je suis à la recherche d'un <span class="colorGold fs-6 fw-bold">stage</span> afin de pouvoir développer mon <span class="colorGold fs-6 fw-bold">savoir faire </span> et mon <span class="colorGold fs-6 fw-bold">savoir être.</p>
                <p>

                Etant encore en  <span class="colorGold fs-6 fw-bold">apprentissage</span>, je suis ouvert à toutes propositions telles qu'elles soient. Ce qui me permettra d'élargir mes connaissances. Ce stage me permettra, par la même occasion, d'établir <span class="colorGold fs-6 fw-bold">mon premier</span> contact avec les activités d'un développeur professionnel.</p>


                <p> Alors si vous cherchez quelqu'un de <span class="colorGold fs-6 fw-bold">motivé</span> et prêt à prendre <span class="colorGold fs-6 fw-bold">l'expérience</span> qu'on lui offrira... N'hésitez plus <a class="d-block color-dark btnDescr" href="#contact">
                    <img src="img/triGold.png" height="20px" alt="triangle gold"> contactez-moi 
                    <img src="img/triGold.png" height="20px" alt="triangle gold"></a> </p>

            </article>
        </article>
    </div>
</section>
<img class="triGold position-absolute" src="img/triGold.png" alt="triangle gold">
</section>

<!------------------>
<!---comp---->
<section id="competences" class=" bg-black container-fluid w-100 h-auto position-relative pb-5">
<section class="container h-auto">
        <div class="row h-auto flex-column pt-2 pb-4">
        <header class="col-12 h-auto w-auto">
        <h2 class="h2 text-white text-center">
        <span class="text-uppercase colorGold">C</span>ompétences</h2>
    </header>
<?php
                $sql = ('SELECT * from skills');
                $req = $db ->query($sql);
                while($data = $req -> fetch()){
  
                     echo ' 
                     <div class="group-title d-flex">
                     <h3 class="text-white">'.$data['title_skills'].'</h3>
                     <img src="admin/img/'.$data['img_skills'].'">
                     </div>
                     <div class="progress p-0 mb-4">
                     <div class="progress-bar barSkills" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width:'.$data['stars_skills'].'%">
                     ';

                    echo '  
                    </div>
                   </div>
                    ' ;         
                }
                $req -> closeCursor();
                  ?>
</div>

</section>
</section>

<!------------------------------------->

<section id="projets" class="container-fluid h-auto w-auto h-auto">
    <section class="container">
    <header class="col-12 h-auto w-auto">
        <h2 class="h2 text-black text-center">
        <span class="text-uppercase colorGold">P</span>rojets</h2>
    </header>
    <div class="row pt-2 pb-4">
    
    <?php
    
    $sql = ('SELECT * from projects');
    $req = $db ->query($sql);
    while($data = $req -> fetch()){
        echo '
        <div class="d-flex col-12 col-sm-6 col-lg-12 col-xl-6 position-relative cardProjects p-0">
        <a class="w-auto" href="'.$data['link_projects'].'">
        <img src="admin/img/'.$data['img_projects'].'" alt="'.$data['title_projects'].'">
        </a>
        </div>
        ';
}
$req ->closeCursor();

?>
</div>
</section>
    </section>

<section id="contact" class="container-fluid h-auto bg-black">
    <div class="container">
        <div class="row">
        <header class="w-100 h-auto">
        <h2 class="h2 text-white text-center">
        <span class="text-uppercase colorGold">C</span>ontact</h2>
    </header>
<!---*---------------->
<article class="col-12 col-sm-12 col-lg-6 col-xl-6 d-flex justify-content-center position-relative">
            <img class="position-relative position-sm-relative position-lg-relative position-xl-absolute" src="img/pc1.png" alt="computer/pc">  
        </article>
        <!--------------->
        <form class="col-12 col-sm-12 col-lg-6 col-xl-6 p-1" action="admin/messagerie.php" method="post">
                <label for="surname_message" class="form-label text-white pt-2">Nom:</label>
                <input type="text" name="surname_message" id="surname_message" class="form-control">

                <label for="firstname_message" class="form-label text-white pt-2">Prénom:</label>
                <input type="text" name="firstname_message" id="firstname_message" class="form-control">

                <label for="mail" class="form-label text-white pt-2">Mail:</label>
                <input type="mail" name="mail" id="mail" class="form-control">

                <label id="area" for="message_message" class="form-label text-white pt-2">Message:</label>
                <textarea class="form-control"  name="message_message" id="message_message" cols="auto" rows="10">
                </textarea>
                
                <button type="submit" class="text-white  mt-2 mb-2 m-auto d-flex align-items-center justify-content-center position-relative">Envoyer</button>
            </form>
        </div>
    </div>
</section>

<footer class="container-fluid w-100 h-auto p-2 bg-black">
    <section class="container d-flex flex-column align-items-center">
        <header class='text-center p-2'><h4 class="text-white">Portfolio Wetterene Rémy</h4></header>
        <img class="p-2" src="img/logoFoot.svg" alt="logo R.W" height="50px">
        <p class="text-white p-2">&copy;Wetterene Rémy 2021-08-21</p>
</footer>
<script defer src="script.js"></script>
</body>
</html> 