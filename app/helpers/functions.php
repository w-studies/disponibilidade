<?php
function get_pr()
{
  if (isset($_SESSION['print_r'])) {

    $session = $_SESSION['print_r'];
    ob_start();
    echo '<pre class="pre text-start"><code>';
    echo '<i>{size: ' . sizeof($session) . '}</i><br>';
    foreach ($session as $i => $row) {
      // se tiver mais de um, adiciona quebra de linha
      $i < 1 || print("\n\n");

      print_r($row);
    }
    echo '</code></pre>';
    unset($_SESSION['print_r']);
    //session_write_close();

    $output = ob_get_contents();
    @ob_end_clean();

    return $output;
  }
}
