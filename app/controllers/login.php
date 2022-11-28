<?php
// se o user estiver logado
if (isset($_SESSION['user'])) {
  // não acessa a página de login
  header('Location: ./');
  exit();
}

if ($Request === 'POST') {

  // sanitiza as variáveis
  $email = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
  $password = sha1(filter_input(INPUT_POST, 'password'));


  // prepara o statement
  $stmt = $sqli->prepare("select * from users where email = ? and password = ? limit 1");
  // alimenta o statement
  $stmt->bind_param('ss', $email, $password);

  // executa a query de busca
  $stmt->execute();

  // guarda o resultado em $result
  $result = $stmt->get_result();

  if ($result->num_rows) {

    $_SESSION['user'] = $result->fetch_assoc();

    die(json_encode([
      'redirect' => 'dashboard',
      'swal' => [
        'icon' => 'success',
        'title' => 'Login efetuado com sucesso!',
        'html' => 'Carregando área restrita...',
        'timer' => 1500,
        'showConfirmButton' => false
      ]
    ]));
  }

  die(json_encode(['password' => 'login e/ou password inválidos']));
} elseif ($Request === 'GET') {
  // altera o layout pra login
  $Layout = 'login';

  // dados para a modal
  $modal = [
    'title' => 'Disponibilidades',
    'closeButton' => false,
  ];
}
