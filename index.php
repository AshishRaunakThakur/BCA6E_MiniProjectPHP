<?php
$page = $_GET['page'] ?? 'home';
$standalone = ['account' => 'account.php', 'my-reports' => 'my-reports.php', 'admin-users' => 'admin-users.php'];
if (isset($standalone[$page])) { require __DIR__ . '/' . $standalone[$page]; exit; }
require __DIR__ . '/app.php';
