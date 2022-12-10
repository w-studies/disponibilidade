<?php
$menus = [
  [
    'title' => 'Dashboard',
    'icon'  => 'fa-solid fa-table-cells',
    'link'  => './'
  ]
];

$adminMenus = [
  [
    'title' => 'Users',
    'icon'  => 'fa-solid fa-users-gear',
    'link'  => 'users'
  ]
];

function generateLis($array)
{
  $display = '';

  foreach ($array as $i => $v) {

    $class = isset($v['submenus']) ?  ' nav-dropdown' : null;

    $display .= '<li class="nav-item' . $class . '">'
      . "<a href='$v[link]' class='nav-link'><i class='$v[icon]'></i> $v[title]</a>";
    if ($class) {
      $display .= '<ul class="nav-dropdown-items">'
        . generateLis($v['submenus'])
        . '</ul>';
    }
    $display .= '</li>';
  }

  return $display;
}
?>
<aside class='app-sidebar sidebar-show'>
  <nav>
    <?php
    $display = '<ul>'
      . generateLis($menus)
      . '<li class="nav-divider"></li>'
      . '<li class="nav-title">Admin</li>'
      . generateLis($adminMenus);
    echo $display . '</ul>';
    ?>
  </nav>
</aside>
