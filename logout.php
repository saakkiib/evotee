<?php
// optional: clear server session
if (session_status() === PHP_SESSION_ACTIVE) {
    session_unset();
    session_destroy();
}
// redirect to login (change path if needed)
header('Location: /web_lab/index.html');
exit();
?>
