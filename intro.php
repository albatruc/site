<?php

// Super GLOBAL $_SERVER

//var_dump($_SERVER); // dump de la super global $_SERVER
echo  "http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
