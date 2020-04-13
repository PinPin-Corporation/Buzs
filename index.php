<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(window).on('load',function(){
                $('#exampleModal').modal('show');
            });
        </script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrer Entrez votre email pour recevoir gratuitement "Construire une carrière de Freelance stable et rentable"</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <label>E-mail</label>
            <input type="email">
            <button type="button" class="btn btn-primary">Recevoir</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
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
    </body>
</html>