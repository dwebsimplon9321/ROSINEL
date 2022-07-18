<?php
session_start();
session_destroy();
echo 'Vous vous êtes déconnecté de votre compte'.header( "refresh:5;url=index.php" );;
