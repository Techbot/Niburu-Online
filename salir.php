<?php 
session_start();
include("inc/config.php");

$localPos = mysql_query("UPDATE personajes SET online = '0' WHERE id = '".$_SESSION['s_id']."'");
session_destroy();

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<script language="javascript">
$(document).ready(function() {

location.href="index.php";

});
</script>