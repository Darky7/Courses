<?php 
  /**
   * validation of form
   */
  if(isset($_POST['validateForm'])){
    if(isset($_POST['array'])){

      // tableau créer par mon utilisateur
      $array = $_POST['array'];
      $arrays = explode(",",$array);
      
      // un autre tableau contenant des informations
      $anotherArray = array("data");
      array_push($anotherArray, $arrays);
    }
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Utilisateur Array</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
  </head>

<body class="d-flex flex-column h-100">

<div class="container">
  <div class="jumbotron mt-3">
    <h1>Formulaire Array</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>

    <br/>

    <? if(isset($arrays)){ print_r ($arrays); } ?>

    <br/>
    <br/>

    <p> Another Array </p>

    <? if(isset($anotherArray)){ print_r ($anotherArray); } ?>

  </div>

  <form action="" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Entrer les données sépraré par une virgule (,)</label>
      <input type="text" class="form-control" name="array" value="" required>
    </div>
    <button type="submit" name="validateForm" class="btn btn-primary">Envoyer</button>
  </form>

</body>

</html>