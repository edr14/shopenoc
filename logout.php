<?php
session_start();
session_destroy();

// Eliminar cookies
setcookie('fitlife_auth', '', time() - 3600, '/');

// Redirigir al login
header('Location: login.php?logout=success');
exit;
?>