<?php
if(!empty($_POST)){

    $errors = array();

    if(empty($_POST['name'])){
        $errors['name'] = "Veuillez mettre votre prénom";
    } 
           
            if(empty($_POST['message'])){
        $errors['message'] = "Veuillez mettre votre message";
    } 
    

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    } 

if(empty($errors)){
    $name = $_POST['name'];
    $choice = $_POST['choice'];
    $content = $_POST['message'];
    $email = $_POST['email'];
    $success ='ok';
    $headers  = 'From: contact@eliastourneux.com'."\r\n";
    $headers .= 'Reply-To: '.$email.''."\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = '<html> <head> <title>Nouveau message</title> <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> </head> <body> <style type="text/css"> *{font-family: "Open sans", sans-serif;}body{background-color: #2c3e50;}h1{color: white; font-weight: 500;}h2{color: white; font-weight: 200}p{color: white;}</style> <h1>Nouveau message de ';
    $message .= $name;
    $message .= ' !</h1> <h2>Son adresse e-mail: ';
    $message .= $email;
    $message .= ' </h2> <h2>Sujet: ';
    $message .= $choice;
    $message .= ' </h2><p>';
    $message .= $content;
    $message .= ' </p></body></html>';
    mail('elias.tourneux@gmail.com', 'Nouveau message depuis eliastourneux.com', $message, $headers);
}


}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <!--
=====================
Header w/ css & font
=====================
-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Elias TOURNEUX</title>
    <meta name="description" content="Jeune adolescent de 16 ans, passioné, amateur et autodidacte dans le développement web !" />
    <link rel="icon" href="assets/ico/favicon.ico">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Elias TOURNEUX">
    <meta name="twitter:description" content="Jeune adolescent de 16 ans, passioné, amateur et autodidacte dans le développement web !">
    <meta name="twitter:creator" content="@ImAYoungBoy">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="https://www.eliastourneux.com/assets/img/twitter.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Elias TOURNEUX" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.eliastourneux.com/" />
    <meta property="og:image" content="https://www.eliastourneux.com/assets/img/twitter.jpg" />
    <meta property="og:description" content="Jeune adolescent de 16 ans, passioné, amateur et autodidacte dans le développement web !" />
    <meta property="og:site_name" content="Elias TOURNEUX" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--
=====================
Navbar
=====================
-->

<header>
    <nav class="navbar navbar-toggleable-md bg-faded navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="container">
         <a class="navbar-brand" href="#"><span class="bold">TOURNEUX</span> Elias</a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#skills">Mes compétences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#project">Mes projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Me contacter</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
</header>
<!--
=====================
Background
=====================
-->
<div class="section bg">
    <div class="container title">
        <h1><span class="bold">TOURNEUX</span> Elias</h1>
        <h2>Amateur de développement web</h2>
        <a href="#skills"><button type="button" class="btn btn-outline-secondary">Me découvrir</button></a>
    </div>
</div>
<!--
=====================
Skills
=====================
-->
<div id="skills" class="container section skills">
    <h1>Mes compétences</h1>
    <div class="row">
        <div class="col-lg-4 cardBlock">
              <i class="fa fa-code" aria-hidden="true"></i>
              <h3>Création de toutes pièces</h3>
              <p>Autodidacte, débrouillard et curieux, j'ai appris par moi-même de nombreux langages de développement, me permettant de vous créer un premier site. Je me renforce en apprenant tous les jours, et apprenant de mes erreurs !</p>
        </div>
        <div class="col-lg-4 cardBlock">
              <i class="fa fa-cogs" aria-hidden="true"></i>
              <h3>Administration et maintenance</h3>
              <p>Je peux héberger et maintenir votre site web, vous permettant une liaison h24 avec vos clients, et vous éviter tous les problèmes techniques de la gestion d'un site web, et de son serveur !</p>
        </div>
        <div class="col-lg-4 cardBlock">
              <i class="fa fa-wordpress" aria-hidden="true"></i>
              <h3>Utiliser et configurer le CMS Wordpress</h3>
              <p>Vous souhaitez un site plus complet, e-commerce, ou autres ? Autant s'orienter vers Wordpress. Je peux configurer, installer Wordpress, mais aussi créer votre propre thème personnalisé !</p>
        </div>
    </div>
</div>
<!--
=====================
Projects
=====================
-->
<div id="project" class="section container project">
    <h1>Mes différents projets</h1>
        <div class="col-lg-12">
            <div class="cardProject">
            <div class="row">
                <div class="col-lg-7">
                   <a class="fancybox" rel="gallery1" href="assets/img/2-hd.jpg" title="Women&co - www.womenandco.fr">
                    <img src="assets/img/2.jpg" width="100%" height="100%">
                    </a>
                </div>
                <div class="col-lg-5">
                    <h3>Women&amp;co</h3>
                    <hr>
                    <h4>Durée du projet: Septembre 2016- Juin 2017</h4>
                    <p>Women&amp;co est une mini-entreprise ayant pour but de lutter contre les clichés hommes-femmes, en véhiculant ce message via pour l'instant un produit simple: un T-shirt. <br>Le projet continuera sous la forme d'une association de la loi 1908.</p>
                    <a href="https://womenandco.fr"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            </div>
            <div class="cardProject">
             <div class="row">
                <div class="col-lg-5">
                    <h3>eliastourneux.com</h3>
                    <hr>
                    <h4>date de création: janvier 2018</h4>
                    <p>Ce projet est le site où vous vous trouvez en ce moment même. Il a pour but de servir de portail pour toute personne souhaitant voir mon travail, ma passion et ma motivation. Je refais souvent mon site pour montrer l'évolution de mes capacités, et ainsi toujours donner une meilleur image de moi même. <br>Si vous souhaitez me donner un conseil, un avis, une remarque, vous pouvez le faire via le formulaire ci-dessous.</p>
                    <a href="https://www.eliastourneux.com"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-7 cardFirst">
                   <a class="fancybox" rel="gallery1" href="assets/img/1-hd.png" title="Portfolio - www.eliastourneux.com">
                    <img src="assets/img/1.png" width="100%" height="100%">
                    </a>
                </div>
            </div>
            </div>
        </div>
</div>
<!--
=====================
Contact
=====================
-->
<div id="contact" class="section container contact">
    <h1>Me contacter</h1>
    <?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement:</p>
    <ul>
        <?php foreach($errors as $error): ?>
           <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
   <?php if(!empty($success)): ?>
<div class="alert alert-success">
    <p>Merci ! Votre message a été envoyé !</p>
</div>
<?php endif; ?>
    <form method="POST" action="index.php#contact">
  <div class="form-group">
  <div class="row">
   <div class="col-md-7">
    <label for="EmailContact">Votre adresse e-mail</label>
    <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="contact@eliastourneux.com">
    <small id="emailHelp" class="form-text text-muted">Votre adresse e-mail ne sera jamais partagé avec quiconque.</small>
  </div>
  <div class="col-md-5">
  <div class="form-group">
    <label for="NameContact">Votre nom et prénom</label>
    <input name="name" type="text" class="form-control" placeholder="Elias TOURNEUX">
  </div>
 </div>
  </div>
  </div>
  <div class="form-group">
    <label for="choiceContact">Pourquoi me contactez-vous ?</label>
    <select name="choice" class="form-control" >
      <option>J'ai une question</option>
      <option>J'ai remarqué une erreur sur ton site</option>
      <option>J'ai quelques conseils pour toi</option>
      <option>Autres...</option>
    </select>
  </div>
 
  <div class="form-group">
    <label for="messageContact">Votre message</label>
    <textarea name="message" class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" value="Envoyer" name="submit" class="btn btn-outline-success">Envoyer</button>
</form>
</div>
<!--
=====================
Footer
=====================
-->
<footer>
    Réalisé avec <i class="fa fa-heart"></i> par moi même
</footer>
<!--
=====================
Javascript & css code
=====================
-->
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.min.js"></script>
<script src="assets/js/script.min.js"></script>


</body>
</html>
