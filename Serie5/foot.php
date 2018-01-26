<!DOCTYPE html>
<html lang="en">
<head>
  <title>Examen Jabran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jabran.css">
</head>
<body>

<nav class="navbar navbar-inverse" id="enhaut">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Le site de l'actualité</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="pageHTML.php">Régions</a></li>
      <li><a href="Foot.html">Foot</a></li>
    </ul>
  </div>
</nav>
  
  <h1>Comparatif de la semaine : Italie VS Belgique</h1>

 <div class="container">
    <div class="row">
      <section class="col-lg-10">
        <div class="row">
          <div class="col-lg-5">
            <article>
              <img class="img-responsive" center-block src="images/Italie.jpg" alt="">
              <h2>Généralités</h2>
              <p>Confédération: UEFA</p>
              <p>Couleur: Bleu Marine et blanc</p>
              <p>Surnom : Gil Azzurri</p>
              <p>Classement FIFA : 17e (14 septembre 2017)</p>
            </article>            
          </div>
          <div class="col-lg-5">
            <article>
              <img class="img-responsive" center-block src="images/belgique.jpg" alt="">
              <h2>Généralités</h2>
              <p>Surnom : Les Diables Rouges</p>
              <p>Stade principal: Stage Roi Baudouin</p>
              <p>Classement FIFA : 5e (16 octobre 2017)</p>
              </article>        
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <article>
              <h2>Statiques : 2000-2017</h2>
              <table class="table">
                <tr>
                  <td></td>
                  <td></td>
                  <th>Belgique</th>
                  <th>Italie</th>
                </tr>
                <tr>
                  <th rowspan="3">Matchs</th>
                  <th>Victoires</th>
                  <td>42</td>
                  <td>31</td>
                </tr>
                <tr>
                <th>Défaites</th>
                <td>10</td>
                <td>12</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>77</td>
                  <td>73</td>
                </tr>
              </table>
            </article>      
          </div>
          <div class="col-lg-5">
            <article>
              <h2>Inscrivez-vous</h2>
            <p>Inscrivez-vous içi pour reçevoir chaque semaine votre comparatif</p>
            <form action="http://dero-promsocatc.alwaysdata.net/index.php" method="post">
              <p>Nom :</p><input placeholder="Entrez votre nom" type="text" name="NOM">
              <br>
              <p>Prénom :</p><input placeholder="Entrez votre prénom" type="text" name="PRENOM">
              <br>
              <p>Email:</p><input placeholder="nom.prenom@gmail.com" type="text" name="EMAIL">
              <br>
              <p>Sexe :  <input type="checkbox" name="SEXE" value="H"> Homme 
                     <input type="checkbox" name="sexe" value="F"> Femme</p>
              <input type="submit" value="Envoyer">
            </form>
            </article>
          </div>
        </div>
      </section>
      <div class="col-lg-2">
        
        <aside>
        <h2>Fil d'actualité</h2>
        <ul>
          <li>Aujourd'hui à 21:07 VIDÉO | Des feux d’artifice «silencieux» au nouvel an pour respecter les animaux?</li>
          <li>Aujourd'hui à 21:04 Liban: le Premier ministre démissionnaire à Paris</li>
          <li>Aujourd'hui à 21:02 Charles Michel avec des étudiants Erasmus en Suède</li>
          <li>Aujourd'hui à 20:47 Accident avec un taxi: on recherche le témoin</li>
          <li>Aujourd'hui à 20:26 Drame à Huccorgne: une maman et une fillette décédées</li>
        </ul>
        </aside>
      </div>
      

    </div> <!--div row-->
 </div> <!--div container-->

<footer>
  Réalisé par Jabran Aboumerouane <a href="#enhaut">Haut de page</a>
</footer>
</body>
</html>
