<?php
$paragraph = 'Un paragrafo, prima di tutto, è un blocco di testo separato dal precedente e dal seguente da un doppio spazio. Questo gli conferisce autonomia: che sia destinato alla carta o allo schermo, il suo compito è di esaurire un aspetto del tema che stiamo trattando. Un aspetto anche piccolo e secondario, ma quello, senza divagazioni. Lo spazio indica al lettore che abbiamo finito, ora si passa ad altro. Quello che contraddistingue il paragrafo è quindi il suo focus. Una cosa che aiuta chi legge ma anche chi scrive, che può così concentrarsi su un aspetto alla volta. Se manca qualcosa, se ne accorge subito.';

$array_paragraph = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2><strong>Il paragrafo originale è: </strong></h2>
  <p><?= $paragraph ?> </p>
  <hr>
  <h2><strong>Il paragrafo diviso è: </strong></h2>
  <?php foreach ($array_paragraph as $single_paragraph) : ?>
    <p><?= $single_paragraph ?>.</p>
  <?php endforeach ?>
  <p></p>
</body>

</html>