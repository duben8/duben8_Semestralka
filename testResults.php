<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <title>Výsledky testov.</title>
<?php
    include "database.php";
    $db = new Database();
    $currUser = $db->getUser("" . $_GET['birthNumber']);
    ?>

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>

  <body class="bg-light">
<div class="nav-scroller bg-white shadow-sm fixed-top">
  <nav class="nav nav-underline">
    <h1 class="nav-link active" ><?php echo $currUser->getName() . " " . $currUser->getSurname() ?></h1>
    <h1 class="nav-link active" >Odhlasit sa</h1>
  </nav>
</div>
<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Výsledky testov</h6>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Uskutočnené testy</h6>
      <?php
        foreach ($currUser->getFinishedTests() as $finnTest){
            $temp = "";
            $testResult = $finnTest->isResult() ? " Pozitivny " : " Negativny ";
            $tempType = strcmp($finnTest->getType(), "A") == 0 ? "Antigenovy test" : "PCR Test";
            $temp .= "<div class=\"media text-muted pt-3\">
            <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
            <strong class=\"d-block text-gray-dark\">" . $tempType . "</strong>
            Datum objednania testu: ". $finnTest->getOrderTestDate() . " | Datum uskutocnenia testu: " . $finnTest->getTestDate() . " | Vysledok testu : " . $testResult; "
            </p>
            </div>";
            echo $temp;
        }
      ?>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
      <form class="form-signin" action="booktest_form.php?birthNumber=<?php echo $_GET['birthNumber']?>" method="post">
    <h6 class="border-bottom border-gray pb-2 mb-0">Objednane testy</h6>
      <input name="objednavkaDatum" type="text" >
          <select id="typTestu" name="typTestu">
              <option value="A">Antigen</option>
              <option value="P">PCR</option>
          </select>
          <button type='submit' class=\"btn btn-lg btn-primary btn-block\" >Objednat test</button>
      </form>

      <?php
        foreach ($currUser->getBookedTests() as $currTest) {
            $temp = "";
            $tempType  = strcmp($currTest->getType(), "A") == 0 ? "Antigenovy test" : "PCR Test";
            $temp .= "<div class=\"media text-muted pt-3\">
            <div class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
            <div class=\"d-flex justify-content-between align-items-center w-100\">
            <strong class=\"text-gray-dark\">" .  $tempType ."</strong>
            </div>
            <span class=\"d-block\"> Datum vykonania objednanenho testu: " . $currTest->getOrderDate() ." | Typ objednaneho testu : " . $tempType . "
            
            </span>
            
            </div>
            </div>
            ";
            echo $temp;
        }

      ?>


  </div>
</main>
</body>
</html>
