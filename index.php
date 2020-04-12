<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=QueenSeduction;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM Articles ORDER BY Date');

    while ($donnees = $reponse->fetch())
    {
    ?>
    <div style="width: 1000px; height: 500px;">
        <div style="float: left; position: relative;">
            <img src=<?php echo '"images/' + $donnees['image'] +'"'?>>
        </div>
        <div style="float: right; position: relative;">
            <h1><?php echo $donnees['nom']; ?></h1>
            <p><?php echo $donnees['description'];?></p>
        </div>
    </div>
    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête
    }
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
} 

?>