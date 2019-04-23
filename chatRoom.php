<?php
session_start();
//if there isn't a authorized session
if (!isset($_SESSION['authorized'])) {
  echo "<h1>Access forbidden</h1>";
  echo "Please login <a href='index.php'><font color='blue'>here</font></a>";
  die;
}

//take the ID of the user
session_start();
$cod = $_SESSION['cod'];
?>

<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript">  
 
function update()
{
    $.post("server.php", {}, function(data){ $("#screen").val(data);});  
 
    setTimeout('update()', 1000);
}
 

$(document).ready(
    function() {
        update();
        $("#logout").click(function() {
            $.post("logout.php", {},
                function(response) {
                	document.location.href="index.php";
                })
        });


        $("#button").click(
            function() {
                $.post("server.php", {
                        message: $("#message").val(),
                        cod: "<?php echo $cod?>"
                    },
                    function(data) {
                        $("#screen").val(data);
                        $("#message").val("");
                    }
                );
            }
        );
    }
);  
</script>
</head>
<body>
 
<button id="logout" type="button">Log Out</button>
<hr>
<textarea id="screen" rows="40" cols="40"> </textarea> <br>  
<input id="message" size="40">
<button id="button"> Send </button>

 
</body>
</html>
