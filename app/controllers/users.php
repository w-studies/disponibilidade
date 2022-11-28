<?php
$TableData = [];
// prepara o statement
$stmt = $sqli->prepare("select * from users");

// executa a query de busca
$stmt->execute();

// guarda o resultado em $result
$result = $stmt->get_result();

if ($result->num_rows) {

  $TableData = $result->fetch_all(MYSQLI_ASSOC);
}
