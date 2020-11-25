<?php 
  /**
   * validation of form
   */
  if(isset($_POST['validateForm'])){
    if(isset($_POST['lastname']) && isset($_POST['sexe'])  && isset($_POST['country']) && isset($_POST['newsletter'])){
      $lastname = $_POST['lastname'];
      $sexe = $_POST['sexe'];
      $country = $_POST['country'];
      $newsletter = $_POST['newsletter'];
      redirect_to($lastname, $sexe, $country, $newsletter);
      // header('Location: recuperation.php?lastname='.$lastname.'&sexe='.$sexe.'&country='.$country.'&newsletter='.$newsletter.'');
    }
  }

  /**
   * function for redirect data to recuperation.php
   */
  function redirect_to($lastname, $sexe, $country, $newsletter) {
		header('Location: recuperation.php?lastname='.$lastname.'&sexe='.$sexe.'&country='.$country.'&newsletter='.$newsletter.'');
		exit;
	}
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Utilisateur Données</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
  </head>

<body class="d-flex flex-column h-100">

<div class="container">
  <div class="jumbotron mt-3">
    <h1>Formulaire Utilisateur</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
  </div>

  <form action="" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Prénom</label>
      <input type="text" class="form-control" name="lastname" value="" required>
    </div>

    <div class="form-group">
       <div class="form-check">
          <input class="form-check-input" type="radio" name="sexe" value="male" checked>
          <label class="form-check-label">
            Garçon
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexe" value="female" checked>
          <label class="form-check-label">
            Fille
          </label>
        </div>
    </div>
    <div class="form-group">
      <label>Pays</label>
      <select class="form-control" name="country">
        <option>France</option>
        <option>Suisse</option>
        <option>Canada</option>
      </select>
    </div>
  
    <div class="form-group">
       <div class="form-check">
          <input class="form-check-input" type="checkbox" name="newsletter" value="true">
          <label class="form-check-label">
            Inscris-toi à la newsletter.
          </label>
        </div>
    </div>

    <button type="submit" name="validateForm" class="btn btn-primary">Envoyer</button>
  </form>

</body>

</html>