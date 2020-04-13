
    <head>
    <title>Queen Seduction</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">


    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="images/icone.png" />
  </head>




  <body>

    <header> 

      <div id="reseau">
        <div id="insta">
          <a href="https://www.instagram.com/queen_seduction_/"><img src="images/logoinsta.png"></a>
        </div>
      </div>

      <div id="logo">
        <img src="images/logo.png" class="img-fluid">
      </div>

    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav" id="items">
          <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Article</a>
          <a class="nav-item nav-link" href="#">Formation</a>
          <a class="nav-item nav-link" href="#">Contacts</a>
        </div>
      </div>
    </nav>

    <div id="bg">

        <img src="images/caro1.jpg" id="caro" class="img-fluid">

    </div>

    <section id="main">
      <script type="text/javascript">
        $(window).on('load',function(){
            $('#exampleModal').modal('show');
        });
    </script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h2 class="modal-title" id="exampleModalLabel">Entrer Entrez votre email pour recevoir gratuitement "Construire une carrière de Freelance stable et rentable"</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Vous recevrez un email par jour pendant 7 jours - puis vous recevrez ma newsletter hebdomadaire. Vos informations ne seront jamais cédées à des tiers.</small>
        </div>
        <style data-emotion-css="1yauslj">.css-1yauslj{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;border-style:solid;border-width:1px;text-align:center;font-family:'Lato',sans-serif;text-shadow:none;-webkit-transition:color 0.2s linear,background 0.2s linear,border-color 0.2s linear, text-shadow 0.2s linear;transition:color 0.2s linear,background 0.2s linear,border-color 0.2s linear, text-shadow 0.2s linear;-webkit-text-decoration:none;text-decoration:none;width:100%;font-weight:bold;min-height:48px;min-width:96px;padding:14px 24px;font-family:Roboto;}.css-1yauslj,.css-1yauslj:focus,.css-1yauslj:active{border-color:rgb(254,210,0);background:rgb(254,210,0);color:rgb(0,0,0);}.css-1yauslj:hover{background-color:rgb(203,168,0);border-color:rgb(203,168,0);color:rgb(0,0,0);}</style>
        <button type="button" class="css-1yauslj">Recevoir</button>
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
    </section>
    <div id="color">
    <footer>
      <div id="about" class="w-25-d-block w-50-md-inline-block">
        <h1>Qui suis-je?</h1>
        <h1>Queen Seduction.</h1>
        <p>" Pour s'éprendre d'une femme, il faut qu'il y ait en elle un désert, une absence, quelque chose qui appelle la tourmente, la jouissance. Une zone de vie non entamée dans sa vie, une terre non brûlée, ignorée d'elle-même comme de vous. "</p>
        <div id="reseausocfooter">
          <div id="instafooter">
    
          </div>
        </div>
      </div>
      <div id="navigation" class="w-25-d-block w-50-md-inline-block">
      <h1>Nav</h1>


      </div>
      <div id="article" class="w-25-d-block w-50-md-inline-block">
          <h2>Les articles populaires</h2>
      </div>

        <h2> Copyrights @ 2020 </h2>
        <a href=""> Les conditions d'utilisations</a>
    </footer>
    </div>
  </body>
