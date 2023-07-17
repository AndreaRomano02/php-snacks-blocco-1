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
  <title>Football Match</title>
</head>

<body>
  <ul>
    <h2>Partite</h2>
    <?php foreach ($matchs as $match) :  ?>
      <li>
        <p><?= $match['home']['team'] ?> - <?= $match['host']['team'] ?> | <?= $match['home']['score'] ?> - <?= $match['host']['score'] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>