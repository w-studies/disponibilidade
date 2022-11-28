<?php
// se o request for do tipo post
if ($Request === 'POST') {

  // sanitiza as variáveis
  $username = filter_input(INPUT_POST, 'username');
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $number = filter_input(INPUT_POST, 'number');
  $password = sha1(filter_input(INPUT_POST, 'password'));

  // prepara o statement
  $stmt = $sqli->prepare("INSERT into `users` (username, email, number, password) VALUES (?,?,?,?)");
  // alimenta o statement
  $stmt->bind_param('ssis', $username, $email, $number, $password);

  // tenta executar a query
  try {
    $stmt->execute();

    // se houver alguma falha
  } catch (Exception $e) {
    // inicia a mensagem de error
    $msg = [];
    // se for erro de duplicidade
    if ($sqli->errno === 1062) {
      // se for no email
      if (strpos($sqli->error, "key 'email'")) {
        $msg['email'] = 'Email não disponível';
      }
    }
    die(json_encode($msg));
  }


  die(json_encode([
    'swal' => [
      'icon' => 'success',
      'title' => 'Registo efetuado com sucesso!',
      'html' => 'Clique <a href="login">aqui</a> para acessar.',
      'showConfirmButton' => false
    ]
  ]));
} elseif ($Request === 'GET') {
  // altera o layout pra login
  $Layout = 'login';

  // dados para a modal
  $modal = [
    'title' => 'Registo',
    'closeButton' => false,
  ];
}
