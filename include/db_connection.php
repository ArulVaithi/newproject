
<?php
date_default_timezone_set('Asia/Calcutta');
error_reporting(0);
// define("DB_HOST", "localhost:3307");
// define("DB_USER", "root");
// define("DB_PASSWORD", "");
// define("DB_DATABASE", "niot");

$host        = "host=localhost";
// $host        = "host=10.163.0.195";
$port        = "port=5432";
$dbname      = "dbname=niot";
$credentials = "user=postgres password='postgres12'";

$db = pg_connect("$host $port $dbname $credentials");

if (!$db) {
  die("Connection failed: ");
}

session_start();
// exit;
if (isset($_GET['lang']) && !empty($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];

  if (isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']) {
    // echo "<script type='text/javascript'> location.reload(); </script>";
  }
}

$currentLang = $_SESSION['lang'];

?>



