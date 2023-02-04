
<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<?php
	/* if(isset($_GET[cfm])){
		if($_POST[radi]=="1"){
			echo "<meta http-equiv=\"refresh\" content=\"2; URL=page1.php\">";exit();
		}
		if($_POST[radi]=="2"){
			echo "<meta http-equiv=\"refresh\" content=\"2; URL=page2.php\">";exit();
		}
		if($_POST[radi]=="3"){
			echo "<meta http-equiv=\"refresh\" content=\"2; URL=page3.php\">";exit();
		}
	} */
?>
<form name="cfm" method="post" action="?cfm">
	<input type="radio" name="radi" value="1"> page-1
	<input type="radio" name="radi" value="2"> page-2
	<input type="radio" name="radi" value="3"> page-3
	<br><input type="submit" value="ส่ง">
</form>