<?php
session_start();
echo "Loggin you out...Please wait...";
session_destroy();
header ("location:/forum");
?>