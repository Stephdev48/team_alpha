<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">
    <link href="style/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Version 1.10: Icons Bootstrap included in HTML head -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>DW/WM AWARDS 2024</title>
</head>
<body>
    <header class="main_background">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/header_star.png" alt="star-picture" width="350px">
                </div>
                <div class="col-4 d-flex align-items-center">
                    <h1 class="fs-1 fw-bold text-light">DWWM 48 AWARDS</h1>
                </div>
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/header_star.png" alt="star-picture" width="350px">
                </div>
            </div>
        </div>
        <nav class="nav justify-content-evenly nav_underheader">
            <a class="underheaderlink " href="#presentation">Présentation</a>
            <a class="underheaderlink" href="#">Candidats</a>
            <a class="underheaderlink" href="#affiche">L'évenement</a>
            <a class="underheaderlink" href="#inscription">Inscription</a>
            <a class="underheaderlink" href="#">Compte à rebours</a>
            <a class="underheaderlink" href="#">Voter</a>
        </nav>
    </header>


    <section class="section_1">
        <div class="container">
            <div class="row">
                <div id="affiche" class="col-4 offset-md-1 affiche">
                        <span class="fs-1 fw-bold text-dark">DWWM 48 AWARDS</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/coupe.png" alt="coupe_vainqueur" width="150px" class="my-4"/>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="fw-bold">Mercredi 12 juin 2024</p>
                            <p class="fw-bold">6 impasse du Général Leclerc</p>
                        </div>
                </div>
                <div class="col-4 offset-md-7 inscription">
                    <h3>Mercredi 12 juin 2024</h3>
                    <span>Date d'échéance des inscriptions : 5 juin</span><br>
                    <i class="bi bi-geo-alt-fill"></i>
                    <a href="https://fr.mappy.com/plan#/6%20Impasse%20du%20G%C3%A9n%C3%A9ral%20Leclerc%2C%2048000%20Mende"><span class="adresse">6 impasse du Général Leclerc</span></a><br>
                    <i class="bi bi-ticket-fill"></i>
                    <span>10€ <br> (Amener à boire ou à manger)</span><br>
                    <form class="formulaire_inscription">
                        <input placeholder="Nom Prénom" type="text" name="nom_inscrit" class="nomprenom my-5"><br>
                        <p>10 places restantes.</p>
                        <button id="inscription" class="btn_inscription">S'inscrire</button>
                    </form>
                </div>
                <section class="section_contact">
                    <div class="container">
                        <div class="row">
                            <div id="contact" class="col-4 offset-  1 my-5">
                                <i class="bi bi-envelope"></i><p> CONTACT : agustin.dwwm48@gmail.com</p>
                            </div>

                        </div>
                    </div>
                </section>
                </p>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="presentation">
            <div class="row">
                <div class="col-6">
                    <h3 class="text-danger">L'évenement de la remise des prix de l'édition 2024 est lancée !</h3>
                </div>
                <div class="col-6">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p id="presentation" class="w-75">La promotion de développeur web se réunit le XX Juin 2024 (soirée de fin d’année 🡺
                        20/06 ?) pour célébrer les talents et les réalisations exceptionnels de ses membres.
                        <br>Cette cérémonie de remise de trophées est l’occasion de reconnaître l’engagement, la passion et la
                        créativité tout au long de l’année et le parcours accomplit par les étudiants dans le domaine du
                        développement web.
                        <br> Au-delà des compétences techniques, l’esprit de collaboration, d’innovation et de résilience a été
                        cultivé. <br>
                        Les étudiants qui se sont distingués seront honorés de leurs contributions variées dans la
                        participation aux différents projets et l’enrichissement de la promotion. <br>
                        Le processus de vote souligne l’esprit de communauté et la diversité des talents au sein de la
                        cohorte.
                        <br>Cette cérémonie est un témoignage du rôle transformateur de la technologie et de la capacité
                        collective à influencer l’avenir à travers le développement web. <br> Elle vise à encourager la poursuite
                        de l’innovation et de la passion pour le codage.<b>
                        <br>Félicitations aux futurs nominés et remerciements à tous pour votre
                        contribution à la communauté des développeurs web. <br> Ensemble, ils
                        façonnent l’avenir du web.</p></b>
                </div>
            </div>
        </div>
    </section>


    <footer class="main_background">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h3 class="fs-1 fw-bold text-light">Team Alpha</h3>
                </div>
                <div class="col-6 d-flex flex-row align-items-center justify-content-end">
                    <span class="fs-2 text-light">Powered by</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/carte_noire.jpg" alt="carte-noire" width="150px" class="img_carte_noire"/>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>