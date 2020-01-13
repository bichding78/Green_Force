<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="include/stylefooter.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script
   src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="include/styleheader.css"> 
    <link rel="stylesheet" href="include/stylefooter.css"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Green Force</title>
</head>
<script>
    $(document).ready(function(){
var bouton1=('#btn1,#btn2,#btn3,#btn4,#btn5')

$(bouton1).mouseenter(function(){
    $(this).css({
        "font-size":"1.2em",
        "color": "#4fa727",
        "transition":"0.5s",
        

    });
});
$(bouton1).mouseleave(function(){
    $(this).css({
        "font-size":"1em",
        "color":"#7c7c7d"
    })
})
    });

</script>
<body>
    <header>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="img/logo.png" width="100" height="80" class="d-inline-block align-top" alt="">
    
  </a>
</nav>
  <a class="navbar-brand " href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse taille" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link " href="papeterie.php" id="btn1">Papeterie<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="entretien.php" id="btn2">Produits d'entretien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="equipements.php" id="btn3">Equipements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="propos.php" id="btn4">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php" id="btn5">Contact</a>
      </li>
      
      </li>
    </ul>
  </div>
</nav>

</div>
</div>
</div>
    </header>

