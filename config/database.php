<?php

//ENVIRONMENT TRUE -> SERVER FALSE->LOCAL

if(ENVIRONMENT)
{
define('DB_HOST','186.202.152.178');
define('DB_USER','sd_root');
define('DB_PWD','santosdumont17');
define('DB_NAME','sd_root');
}

if(!ENVIRONMENT)
{
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_NAME', 'santosdumont');
}

?>