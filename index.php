<?php
    include('includes/header.inc.php');

        /* - Gestion de l'affichage des vues selon 5 étapes : 
        Début(step0), les 3 étapes correspondentes aux 3 Questions/Réponses(Q1/R1-->step1, Q2/R2-->step2, Q3/R3-->step3) et Fin. */
        if ($_GET == null) {
            require('step0.php');

        } elseif ($_GET['step'] === "1") {
            require('step1.php');

        } elseif ($_GET['step'] === "2") {
            require('step2.php');

        } elseif ($_GET['step'] === "3") {
            require('step3.php');

        } elseif ($_GET['step'] === "4" && (isset($_GET['response']) && $_GET['response'] === "non")) {
            require('step4.php');

        } elseif ($_GET['step'] === "5") {
            require('step5.php');
        }
    
    include('includes/footer.inc.php');
?>