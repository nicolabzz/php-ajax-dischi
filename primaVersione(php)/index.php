<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css -->
  <link rel="stylesheet" href="../style.css">
  <title>DISCHI PHP</title>
</head>

<body>
  <div class="container-cards">
    <div class="card">
      <?php
      include_once "../api.php";
      foreach ($risposta as $ricevuta) {
      ?>
        <div>
          <div class="posterDisk">
            <img src="<?= $ricevuta["poster"] ?>" alt="" srcset="">
          </div>
          <h3><?= $ricevuta['title'] ?></h3>
          <h5><?= $ricevuta['author'] ?></h5>
          <p><?= $ricevuta['genre'] ?></p>
          <span><?= $ricevuta['year'] ?></span>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</body>

</html>