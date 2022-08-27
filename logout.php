<?php
session_start();
session_destroy();
header("Location: http://localhost/Apex-business-match/index.html");
exit;
?>