<?php

//session start
session_start(); 

//include necessary file in order to connect to db
include("config.php"); 

//connecting
mysql_select_db($db_name); 

//retrieve the parameters
$username=mysql_real_escape_string($_POST['username']);
//sha1 crypting
$password=mysql_real_escape_string(sha1($_POST['password'])); 

//doing query
 $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
 $ris = mysql_query($query) or die (mysql_error());
 $riga=mysql_fetch_array($ris);  

//taking user ID
$cod=$riga['id'];

//check if it has been found
if ($cod == NULL) $found = 0 ;
else $found = 1;  

//if usr and pwd are correct
if($found === 1) {

  $_SESSION["authorized"] = 'authorized';

  $_SESSION["authorized"] = 1;

  //registation of user code(ID)
  $_SESSION['cod'] = $cod;

 //redirect to needed page(chat)
   echo '<script language=javascript>document.location.href="chatRoom.php"</script>'; 

} else {
//stay on login page
 echo '<script language=javascript>document.location.href="index.php"</script>';

}
?>
