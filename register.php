<?
include("config.php"); 
 
$conn = mysql_connect($host, $db_user, $db_psw) 
or die ('Error connecting to mysql');
 
mysql_select_db($db_name);
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 $sql = "INSERT INTO `login` ( username ,password )
VALUES ('$username', sha1( '$password' )
);";
 mysql_query($sql);
 
 echo '<script language=javascript>document.location.href="index.php"</script>';
 
?>
