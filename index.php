<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="style/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Version 1.10: Icons Bootstrap included in HTML head -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>DW/WM AWARDS 2024</title>
</head>
<body>
    <header id="header" class="main_background">
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
        <nav class="nav justify-content-evenly nav_background_color">
            <a class="nav-item nav-link link-body-emphasis" href="#presentation">Présentation</a>
            <a class="nav-item nav-link link-body-emphasis" href="#candidats">Candidats</a>
            <a class="nav-item nav-link link-body-emphasis" href="#affiche">L'évenement</a>
            <a class="nav-item nav-link link-body-emphasis" href="#bouton_inscription">Inscription</a>
            <a class="nav-item nav-link link-body-emphasis" href="#compte_rebours">Compte à rebours</a>
            <a class="nav-item nav-link link-body-emphasis" href="#bouton_voter">Voter</a>
        </nav>
    </header>


    <section class="section_1">
        <div class="container">
            <div class="row">
                <div id="affiche" class="col-5 affiche">
                        <span class="fs-1 fw-bold text-dark">DWWM 48 AWARDS</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/coupe.png" alt="coupe_vainqueur" width="150px" class="my-4"/>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="fw-bold">Mercredi 12 juin 2024</p>
                            <p class="fw-bold">6 impasse du Général Éclair</p>
                        </div>
                </div>
                <div class="col-5 inscription">
                    <h3>Mercredi 12 juin 2024</h3>
                    <span>Date d'échéance des inscriptions : 5 juin</span><br>
                    <i class="bi bi-geo-alt-fill"></i>
                    <a href="https://fr.mappy.com/plan#/6%20Impasse%20du%20G%C3%A9n%C3%A9ral%20Leclerc%2C%2048000%20Mende" target="_blank"><span class="adresse">6 impasse du Général Leclerc</span></a><br><hr>
                    <i class="bi bi-ticket-fill"></i>
                    <span>10€ <br> (Amener à boire ou à manger)</span><br><hr>
                    <form class="formulaire_inscription">
                        <input placeholder="Nom Prénom" type="text" name="nom_inscrit" class="nomprenom"><br>
                        <p>10 places restantes.</p>
                        <button id="bouton_inscription" class="btn_inscription">S'inscrire</button>
                    </form>
                </div>
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
                        Cette cérémonie de remise de trophées est l’occasion de reconnaître l’engagement, la passion et la
                        créativité tout au long de l’année et le parcours accomplit par les étudiants dans le domaine du
                        développement web.
                        Au-delà des compétences techniques, l’esprit de collaboration, d’innovation et de résilience a été
                        cultivé.
                        Les étudiants qui se sont distingués seront honorés de leurs contributions variées dans la
                        participation aux différents projets et l’enrichissement de la promotion.
                        Le processus de vote souligne l’esprit de communauté et la diversité des talents au sein de la
                        cohorte.
                        Cette cérémonie est un témoignage du rôle transformateur de la technologie et de la capacité
                        collective à influencer l’avenir à travers le développement web. Elle vise à encourager la poursuite
                        de l’innovation et de la passion pour le codage.
                        Félicitations aux futurs nominés et remerciements à tous pour votre
                        contribution à la communauté des développeurs web. Ensemble, ils
                        façonnent l’avenir du web.</p>
                </div>
            </div>
        </div>
        <div>
            <hr />
        </div>
    </section>

    <section>
        <div id="candidats" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-5 text-center text-danger">Candidats DW/WM Apprenants 2024</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/agustin.png" alt="agus_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Agustin</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/Christophe.png" alt="christophe_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Christophe</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/martin.png" alt="martin_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Martin</span>
                </div>
                <div class="col-3">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-2 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/annaelle.png" alt="annaelle_avatar" width="150px" class="m-auto"/>
                <span class="text-center">Annaelle</span>
                </div>
                <div class="col-2 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/cyril.png" alt="cyril_avatar" width="150px" class="m-auto"/>
                <span class="text-center">Cyril</span>
                </div>
                <div class="col-2 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/noe.png" alt="noe_avatar" width="150px" class="m-auto"/>
                <span class="text-center">Noé</span>
                </div>
                <div class="col-3">
                </div>                    
            </div>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/vincent.png" alt="vincent_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Vincent</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/barnabe.png" alt="barnabe_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Barnabé</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/killian.png" alt="killian_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Killian</span>
                </div>
                <div class="col-3">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Apprenants/stephane.png" alt="stephane_avatar" width="150px" class="m-auto"/>
                    <span class="text-center">Stéphane</span>
                </div>
                <div class="col-5">
                </div>
            </div>
        </div>
        <div class="container section_avatars_formateurs">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-5 text-center text-danger">Candidats DW/WM Formateurs 2024</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Formateurs/cedric.png" alt="cedric_avatar" width="130px" class="m-auto"/>
                    <span class="text-center">Cédric</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Formateurs/Christophe.png" alt="Christophe_avatar" width="130px" class="m-auto"/>
                    <span class="text-center">Christophe</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Formateurs/laetitia.png" alt="laetitia_avatar" width="130px" class="m-auto"/>
                    <span class="text-center">Laétitia</span>
                </div>
                <div class="col-3">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Formateurs/tony.png" alt="tony_avatar" width="140px" class="m-auto"/>
                    <span class="text-center">Tony</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Formateurs/luc.png" alt="luc_avatar" width="130px" class="m-auto"/>
                    <span class="text-center">Luc</span>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container section_compte">
            <div class="row">
                <div class="col-3">
                </div>
                <div id="compte_rebours" class="col-6 text-center p-4 d-flex flex-column section_compte_column">
                    <span class="fw-bold">Compte à rebours avant la remise des prix : </span>
                    <label id="Compte" class="fw-bold fs-2"></label>
                    <script type="text/javascript">
                        var Affiche=document.getElementById("Compte");
                        function Rebour() {
                            var date1 = new Date();
                            var date2 = new Date ("June 20, 2024 00:00:00");
                            var sec = (date2 - date1) / 1000;
                            var n = 24 * 3600;
                            if (sec > 0) {
                            j = Math.floor (sec / n);
                            h = Math.floor ((sec - (j * n)) / 3600);
                            mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
                            sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
                            Affiche.innerHTML = j +" j "+ h +" h "+ mn +" min "+ sec + " s";
                            window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
                            }
                            tRebour=setTimeout ("Rebour();", 1000);
                        }
                        Rebour();
                    </script>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row section_bouton">
                <div class="col-5">
                </div>
                <div id="bouton_voter" class="col-2 text-center section_bouton_voter">
                    <a href="#" class="text-danger">VOTER !</a>
                </div>
                <div class="col-5">
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-end">
        <a href="#header" class="arrow_ancre">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
            </svg></i>
        </a>
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