<?php
$name = trim($_GET['name']);
$mail = trim($_GET['mail']);
$age = trim($_GET['age']);
$is_valid_name = strlen($name) >= 3;
$is_valid_mail = strpos($mail, '@') && strpos($mail, '.');
$is_valis_age = is_numeric($age);
echo $is_valid_name && $is_valid_mail && $is_valis_age   ? 'Accesso riuscito!' : 'Accesso negato!';
