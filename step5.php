
<?php
/*  * 
    * L'affichage du nombre d'étoiles et de points noires avec le système de pondération "R201" est plus naturel, 
    * intuitif et proche de la logique métier. Il se fait en  fonction du score total et dépend des réponses du client
    * et du nombre de questions posées à ce dernier. "R201": Oui(2pts), Non(0pts), SA(1pt). 
    * On a toujours cette inégalité qui est vérifiée: ($rmin=0<=$r<=$rmax=2*$nbq), où $nbq=nombre total de questions du questionnaire. 
    * Les réponses aux questions sont obligatoires (required). Cet affichage obéit à une loi d'echelle de proportionnalité(scalabilité),
    * La seule contrainte à respecter est que l'affichage graphique de l'avis ne doit pas comporter ni plus de 5 étoiles, 
    * ni plus de 5 points noires. Avec les gros points noirs ça devient un peu plus sioux. 
    * Cette partie est perfectible et reste donc à améliorer.
*/
    $rate = '';
    for ($i = 0; $i < $_GET['result']; $i++) {
        $rate .= "⭐";
    }
    // Valable seulement pour notre projet(avec un nombre réduit de questions, mais une généralisation est à faire ici)
    $i = $_GET['result'] === "6" ? 5 : $_GET['result'];   //  ( rmax=2*$nbq=2*3=6 ==> $i<=5 )
    while ($i < 5) {
    $rate .= "⚫";
    $i++;
}
?>

<!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l'étape 4 a été résolue -->
    <p class="mt-5">Merci pour votre notation : <?php echo $rate;?> </p> 
    <!-- le nombre d'étoiles représente le nombre de points cumulés -->      
    
    <!-- Reste à faire... -->
    <!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->
    <p class="mt-5"><a href="?" role="button" class="btn btn-danger">Recommencer</a></p>