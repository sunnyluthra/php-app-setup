<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php
// Include ezSQL core
include_once "../db/ez_sql_core.php";
// Include ezSQL database specific component
include_once "../db/ez_sql_mysql.php";
include_once "functions.php";
// Initialise database object and establish a connection
// at the same time - db_user / db_password / db_name / db_host
$db = new ezSQL_mysql(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST) or die("Error connecting database.");