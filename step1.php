<!-- Etape 1 : A afficher uniquement une fois que le boutton "Commencer" a été pressé -->
<h2>Question 1</h2>
<p>L'agent a-t-il été agréable ?</p>       
    <!-- & dans le code devient &amp; dans le html , === validation W3C -->
    <a href="?step=2&result=2" role="button" class="btn btn-success">oui</a>            <!-- rapporte 2 point -->
    <a href="?step=2&result=0" role="button" class="btn btn-danger">non</a>             <!-- rapporte 0 point -->
    <a href="?step=2&result=1" role="button" class="btn btn-secondary">sans avis</a>    <!-- rapporte 1 point -->