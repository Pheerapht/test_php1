<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_project = "node31588-env-5174474.app.ruk-com.cloud";
$database_project = "project";
$username_project = "root";
$password_project = "ZBAaqf96816";
$project = mysql_pconnect($hostname_project, $username_project, $password_project) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
