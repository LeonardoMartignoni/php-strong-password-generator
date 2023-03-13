<?php
  if(!empty($_GET["psw_length"])) {
    $psw_input = $_GET["psw_length"];
    $psw_result = generatePsw($psw_input);
  }else {
    $psw_input = '';
  }

  function generatePsw($length) {
    $characters = '0123456789qwertyuiopasdfghjklzxcvbnm!"$%&/()=?-_';
    // $debug = '1';
    $password = '';
    while (strlen($password) < $length) {
      $password .= $characters[rand(0, strlen($characters) - 1)]; // TO FIX
    }
    return $password;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>

  <!-- Bootstrap Import -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
  <h1>PHP Strong Password Generator</h1>
  <form action="" method="GET">
    <label for="psw_length">Password length</label>
    <br>
    <input class="my-3" type="number" name="psw_length">
    <br>
    <button class="btn btn-primary">Generate</button>
  </form>

  <?php if (!empty($psw_result)): ?>
  <p><?= $psw_result ?></p>
  <?php else: ?>
  <?php endif ?>
</body>   
</html>