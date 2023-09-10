<?php
session_start();
session_unset();
session_destroy();
header("location: /cafe/_admin_dashboard_login.php?loggedOut=true");


?>