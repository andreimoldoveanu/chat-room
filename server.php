<?
include("config.php"); 
 
$conn = mysql_connect($host, $db_user, $db_psw) 
or die ('Error connecting to mysql');
 
$dbname = 'my_andreimoldoveanu';
 
mysql_select_db($dbname);
 
$message = $_POST['message'];
$cod = $_POST['cod'];
//if message not empty, insert it on DB
if($message != "")
{
 $sql = "INSERT INTO `chat`(`Text`, UserId) VALUES ('$message', '$cod')";
 mysql_query($sql);
}
//update chat with new values
$sql = "SELECT c.Text, l.username FROM chat c, login l where c.UserId=l.id ORDER BY c.id ASC";
$result = mysql_query($sql);
 
while($row = mysql_fetch_array($result))
 echo $row['username'].": ".$row['Text']."\n";
 
 
?>
