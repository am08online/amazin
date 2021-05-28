<!-- Etape 3 : A afficher uniquement une fois que l'étape 2 a été résolue -->
<h2>Question 3</h2>
    <p>L'agent a-t-il résolu votre problème ?</p>
    <a href="?step=5&result=<?= $_GET['result']+2?>" role="button" class="btn btn-success">oui</a>    <!-- rapporte 2 point -->
    <a href="?step=4&result=<?= $_GET['result']+0?>" role="button" class="btn btn-danger">non</a>     <!-- rapporte 0 point -->