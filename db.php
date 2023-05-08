<?php


$host_name = 'db5012913151.hosting-data.io';
$database = 'dbs10845240';
$user_name = 'dbu1245107';
$password = 'S006482o&';

$link = new mysqli($host_name, $user_name, $password, $database);

if ($link->connect_error) {
  die('<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>');
} else {
  echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
}


