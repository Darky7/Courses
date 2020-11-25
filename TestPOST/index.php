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

  <form action="recuperation.php" method="POST">
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