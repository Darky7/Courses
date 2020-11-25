<?php 
    /**
     * get data form URL
     */    
    
     // when form is not submit :: false
    $form_submit = false;
     
    if($_GET['lastname'] && $_GET['sexe'] && $_GET['country'] && $_GET['newsletter']){
        // form is submit :: true
        $form_submit = true;
        $lastname = $_GET['lastname'];
        $sexe = $_GET['sexe'];
        $country = $_GET['country'];
        $newsletter = $_GET['newsletter'];

        if($newsletter == true){
            $newsletter = "Oui";
        }else{
            $newsletter = "Non";
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