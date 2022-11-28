<h1 class="fw-light">Users</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Número</th>
      <th>Email</th>
      <th>Password</th>
      <th>Created</th>
    </tr>
  </thead>
  <?php
  $tbody = '<tbody>';
  if (sizeof($TableData)) {
    foreach ($TableData as $i => $v) {
      $tbody .= '<tr><td>' .  implode('</td><td>', $v) . '</td></tr>';
    }
  }
  echo $tbody . '</tbody>'
  ?>
  </tbody>
</table>
