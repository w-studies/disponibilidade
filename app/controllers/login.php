<?php
if ($Request === 'POST') {
  die(json_encode($_POST));
} elseif ($Request === 'GET') {
  // altera o layout pra login
  $Layout = 'login';

  // dados para a modal
  $modal = [
    'title' => 'Disponibilidades',
    'closeButton' => false,
  ];
}
