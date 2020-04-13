<?php include('menu.php');?>
<?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=QueenSeduction;charset=utf8', 'root', '');
            $reponse = $bdd->query('SELECT * FROM Articles ORDER BY Date DESC');
            $donnees = $reponse->fetch();
            ?>

            <div id="Major_Content">
                    <div id="Major_Content_Left">
                        <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><img src=<?php echo '"images/' . $donnees['image'] .'"'?>></a>
                    </div>
                    <div id="Major_Content_Right">
                        <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><h1><?php echo $donnees['nom']; ?></h1></a>
                        <p><?php echo $donnees['description'];?></p>
                    </div>
            </div>
            <?php

            while ($donnees = $reponse->fetch())
            {
            ?>
            <div class="Minor_Content">
                    <div class="Minor_Content_Left">
                        <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><img src=<?php echo '"images/' . $donnees['image'] .'"'?>></a>
                    </div>
                    <div class="Minor_Content_Right">
                        <a href=<?php echo '"' . $donnees['id'] . '.php"'?>><h1><?php echo $donnees['nom']; ?></h1></a>
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
<?php include('footer.php');?>