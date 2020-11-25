<?php 
  /**
   * validation of form
   */

   // when form is not submit :: false
   $form_submit = false;

  if(isset($_POST['validateForm'])){
    if(isset($_POST['lastname']) && isset($_POST['sexe'])  && isset($_POST['country']) && isset($_POST['newsletter'])){
      // form is submit :: true
      $form_submit = true;
      
      $lastname = $_POST['lastname'];
      $sexe = $_POST['sexe'];
      $country = $_POST['country'];
      $newsletter = $_POST['newsletter'];
      
    }
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
    <h1>Données Utilisateur</h1>

    <?php 
        if($form_submit){
    ?>

    <p class="lead">Prénom : <? echo $lastname; ?> </p> <br/>
    <p class="lead">Sexe : <? echo $sexe; ?> </p> <br/>
    <p class="lead">Pays : <? echo $country; ?> </p> <br/>
    <p class="lead">Newsletter : <? echo $newsletter; ?></p> <br/>

    <?php }else { ?>

    <p>Vous n'avez pas remplit le formulaire</p>

    <?php } ?>

  </div>

</body>

</html>