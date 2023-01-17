<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Food.php";
require_once "./models/Game.php";


$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");
$officeCategory = new Category("Cancelleria", "fa-briefcase");

$penna = new Product("Penna a sfera", 1.3, $officeCategory);
$rismaCarta = new Product("Risma carta A4", 4.15, $officeCategory);
$ciboScatola = new Food("Cibo in scatola", .50, $dogCategory, 300);
$croccantini = new Food("Croccantini al pollo", 3.20, $catCategory, 380);
$palla = new Game("Palla da tennis", .99, $dogCategory, ["feltro", "plastica"]);
$tiragraffi = new Game("Tiragraffi", 21.80, $catCategory, ["legno", "pvc"]);


$penna->setName(null);


$prodotti = [
    $penna,
    $rismaCarta,
    $ciboScatola,
    $croccantini,
    $palla,
    $tiragraffi,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container pb-5">
    <h1 class="my-5">Php Oop 2 | Index</h1>

    <div class="row">
      <?php foreach ($prodotti as $prodotto) { ?>

        <div class="col">
          <!-- Se volessimo usare la funzoone printCardHTML della classe prodotto,
            potrei invocarla direttamente
            <?php echo $prodotto->printCardHTML($prodotto) ?>
          -->

          <div class="card">
            <div class="card-body">
              <h3><?php echo $prodotto->getName() ?></h3>
              <h4><?php echo $prodotto->getPrice() ?></h4>

              <!-- <?php if (method_exists($prodotto, "getCalories")) { ?>
                <div>Calorie: <?php echo $prodotto->getCalories() ?></div>
              <?php } ?> -->

              <?php if (method_exists($prodotto, "getCalories")) {
                echo "<div>Calorie: {$prodotto->getCalories()}</div>";
              } ?>

              <?php if (method_exists($prodotto, "getMaterials")) { ?>
                <div>Materiali: <?php echo implode("<br> ", $prodotto->getMaterials()) ?></div>
              <?php } ?>
            </div>
          </div>
        </div>

      <?php } ?>

      <!-- <?php foreach ($prodotti as $prodotto) : ?>
        <div class="col">
          <div class="card"></div>
        </div>
      <?php endforeach ?> -->
    </div>

  </main>
</body>
</html>