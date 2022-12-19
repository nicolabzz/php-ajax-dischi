<!-- <?php

include_once __DIR__ . "/../../api.php";

$genere = isset($_GET['genere']) ? $_GET['genere'] : "";

if ($genere === '') {
  header("Content-Type: application/json");
  echo json_encode($risposta);
} else {
  $vettore = [];

  foreach ($risposta as $ricevuta) {
    if (strtolower($ricevuta["genere"]) === strtolower($genere)) {
      $vettore[] = $ricevuta;
    }
    header("Content-Type: application/json");
    echo json_encode($vettore);
  }
}

?> -->