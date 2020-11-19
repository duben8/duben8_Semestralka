<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Prihlásenie do účtu</title>
<link href="myStyling.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center singInBackGround">
    <form class="form-signin" action="login_form.php" method="post">
  <img class="mb-4" src="myImages/unnamed.png" alt=""   >
  <h1 class="h3 mb-3 strongText">Zadajte prosím Vaše rodné číslo a heslo</h1>
  <label class="sr-only">Rodné číslo</label>
  <input type="text" name="inputBirthNumber" class="form-control" placeholder="Rodné číslo" required autofocus>
  <label for="inputPassword" class="sr-only">Heslo</label>
  <input type="text" name="password" type="password" id="inputPassword" class="form-control" placeholder="Heslo" required>
        <button class="btn btn-lg btn-primary btn-block"  type="submit" >Prihlásiť sa</button>
        <div class="checkbox mb-3">

      <input type="checkbox" value="remember-me"> <div class="strongText">Zapamätať si ma</div>

  </div>

</form>
</body>
</html>
