<?php require 'lib.inc.php'; ?>

<header class="header">
    <a href="index.php"><img src="img/logo-test.png" /></a>
    <div class="header__mobile" onclick="toggleMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
</header>

<nav class="nav-mobile">
    <div class="nav-mobile__close" onclick="toggleMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>




    <section class="top">
        <div class="nav-mobile__profil">

            <img src="img/logo-test.png" alt="profil photo" />


            <?php
            if (empty($_SESSION['prenom_client'])) {
                echo '<span class="name"> Vous n\'êtes pas connecté </span> ';
            } else {
                echo '<span class="name">Bonjour, ' . $_SESSION['prenom_client'];
            }
            ?>



            <?php
            echo '<div class="actions">';
            if (empty($_SESSION['prenom_client'])) {
                echo '<a href="connexion.php">Connexion</a>/<a href="inscription.php">Inscription</a>';
            } else {
                echo '<a href="deconnexion.php">Déconnexion</a> <a href="profil.php">Profil</a>';
            }
            echo '</div>';
            ?>


        </div>

        <ul class="nav-mobile__menu">
            <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Accueil
                </a></li>
            <li><a href="#" onclick="openSubmenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    Sauvegarder l'avatar
                </a>

            </li>
            <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Télécharger l'avatar
                </a></li>

        </ul>
    </section>

    <section class="bottom">
        <ul class="nav-mobile__social">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Youtube</a></li>
        </ul>
    </section>

</nav>

<div class="mobile-overlay" onclick="toggleMenu()">

</div>