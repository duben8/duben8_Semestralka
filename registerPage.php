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
  <form class="form-signin" action="testResults.php" method="post">
  <img class="mb-4" src="myImages/unnamed.png" alt=""   >
  <h1 class="h3 mb-3 strongText">Zadajte prosím Vaše rodné číslo , heslo a email</h1>
  <label class="sr-only">Rodné číslo</label>
    <input type="text" id="inputBirthNumber" class="form-control" placeholder="Rodné číslo" required autofocus>
  <label for="inputPassword" class="sr-only">Heslo</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Heslo" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required >
      <button class="btn btn-lg btn-primary btn-block"  type="submit" formaction="">Zaregistrovat sa</button>
  
</form>
</body>
</html>
