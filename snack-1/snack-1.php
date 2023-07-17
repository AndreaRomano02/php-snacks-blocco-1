<?php
$matchs = [
  [
    'home' => [
      'team' => 'Livorno',
      'score' => '60',
    ],
    'host' => [
      'team' => 'Pisa',
      'score' => '10',
    ],
  ],

  [
    'home' => [
      'team' => 'Lakers',
      'score' => '60',
    ],
    'host' => [
      'team' => 'Pielle',
      'score' => '45',
    ],
  ],

  [
    'home' => [
      'team' => 'Milano',
      'score' => '25',
    ],
    'host' => [
      'team' => 'Olin',
      'score' => '45',
    ],
  ],

  [
    'home' => [
      'team' => 'Labronica',
      'score' => '60',
    ],
    'host' => [
      'team' => 'Monster',
      'score' => '35',
    ],
  ],
  [
    'home' => [
      'team' => 'Napoli',
      'score' => '15',
    ],
    'host' => [
      'team' => 'Lucca',
      'score' => '45',
    ],
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Football Match</title>
</head>

<body>
  <ul class="container text-center">
    <h2 class="mt-5">Partite</h2>
    <?php foreach ($matchs as $match) :  ?>
      <li class="card text-center py-5 m-3 bg-danger text-white fw-bold fs-5">
        <p><?= $match['home']['team'] ?> - <?= $match['host']['team'] ?> | <?= $match['home']['score'] ?> - <?= $match['host']['score'] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>

  <a href="../index.html">Torna alla home</a>
</body>

</html>