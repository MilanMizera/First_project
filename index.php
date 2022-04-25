<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    
    <header>
        <?php
        include "Header.php";
        ?>
    </header>
    <h1 class="formtitle">Vychutnej si náš formulář</h1>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Emailová adresa</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Heslo</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Souhlasím s osobníma údajema</label>
  </div>
  <button type="submit" class="btn btn-primary">Odeslat</button>
</form>
<script src="js/bootstrap.js"> </script>

</body>
</html>