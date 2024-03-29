
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulářek</title>
    <link rel="icon" href="obrazky/favicon_io/favicon.ico">
    <link rel="icon" type="image/png" href="/obrazky/Favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head> 

<body>
<script src="bootstrap/js/bootstrap.js"> </script>

<style> 
/*Stylování echo textu*/ 
.all-do {
    text-align:center;
    color: red;
    font-size: 15px;
    margin-top: 20px;
    margin-left: 40px;
}

.my-username {
    text-align:center;
    color: green;
    font-size: 15px;
    margin-top: 10px;
    margin-left: 40px;
    margin-bottom: 0px;
}

.my-password {
    text-align:center;
    color: green;
    font-size: 15px;
    margin-left: 40px;
}

.my-check {
    text-align:center;
    color: red;
    font-size: 15px;
    margin-left: 40px;
    margin-top:10px
}
</style>

    <header>
        <?php
        include "Header.php";
        ?>
    </header>

    <div class form-container>
      <h1 class="form-title">Zadejte Vaše údaje !</h1>
      <form class="formularek" method="post" action="index.php">
      <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Uživatelské jméno</label>
      <input type="text" name="username" class="form-control" id="exampleInputText" div>
   </div>

  <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Heslo</label>
     <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
     <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">Souhlasím s osobníma údajema</label>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Odeslat</button>
  <div class="my-check"></div>
  <p class="my-check"></p>

<?php
error_reporting(E_ALL);

//odeslání dat z formuláře
if (isset($_POST["submit"])) 
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (empty ($_POST ["password"]) || empty ($_POST ["username"]) || empty($_POST ["check"])) 
  {
    echo "<p class='all-do'>Vyplnte všechna pole</p>";
  }

  else 
  {
  echo "<p class='my-username'>Tvoje uživatelské jméno je $username</p>";
  echo "<br>";
  echo ("<p class='my-password'>Tvoje heslo je $password</p>");
  }

  // připojení do databáze
  $connection = mysqli_connect("localhost","root","","megakurzy");

  if (!$connection) 
  {
  echo ("nejsme propojeni s databází!");
  }
  
  //vložení dat do tabulky
  if (!empty ($password) && !empty ($username)) 
  {

  //Hešování hesla
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

  //vložení hodnot z formuláře do tabulky databáze
  $query = "INSERT INTO mega_kurzy (jmeno,heslo) VALUES ('$username','$hashedpassword')";

  //odeslání dat
  $result = mysqli_query ($connection,$query);
 }
}
 ?>
</div>
</form>
</div>

<!--Sekce s kontaktováním podpory-->
<h2 class="supp-title">Nefunguje Vám formulář ? Kontaktujte naší podporu !
 </h2>
<div class="supp-section">
 <div class="row">
  <div id="phone-space" class="col text-center">
  <i class="bi bi-telephone-inbound"></i>
   <li class="li-phone">
     <a class="supp-phone" href="tel:+420722552864">+420 722 552 864</a>
   </li>
</div>

<div class="col text-center">
<i class="bi bi-envelope-check"></i>
<li class="li-email">
<a class="supp-email" href="mailto milan.mizera2323@gmail.com">milan.mizera2323@gmail.com</a>
</li>
</div>

</div>
</div>
</body>
</html>