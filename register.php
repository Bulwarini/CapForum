<?php
session_start();

  include("connections.php");
  include("functions.php");

  

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {

    //coś zostało zapostowane
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //zapisz do bazy danych
      $user_id = random_num(20);
      $query = "insert into ruhanie (user_id,user_name,password) values ('$user_id','$user_name','$password')";


      mysqli_query($con, $query);

    //header("Location: login.php");
    //die;
    }else
    {
      echo "Wprowadź prawidłowe dane";
    }

  
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-adsense-account" content="ca-pub-1518890929804230">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1518890929804230"
     crossorigin="anonymous"></script>
    <title>Wydarzenia na Świecie - CapForum</title>
    <link rel="stylesheet" href="/mybulma/css/customstyle.css/customstyle.css?v=5" type="text/css">
    <style>
html, body {
  overflow-x: hidden;  
}
</style> 
  </head>
  <body>
    
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/nav-bar.php"; ?>

    <form method="post" class="box box-background-color gray">
    <div class="field is-centered">
  <label class="label" >Nazwa Użytkownika</label>
  <div class="control is-centered">
    <input class="input" type="text" name="user_name">
  </div>
</div>

<div class="field">
  <label class="label">Hasło</label>
  <div class="control">
    <input class="input" type="password" name="password">
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <input id="button" type="submit" value="Zarejestruj się" ></input>
  </div>
</div>
  </form>





  </body>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/stopka.php"; ?>
</html>