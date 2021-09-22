# Refactorizar

<?php

 

/*
* As a kid you created your first homepage for calculating fibonacci numbers. Since you now know how to properly build
* web applications, try to improve your old code for better maintainability. Use all your architecural skills and show off.
* The code does not have to work, we just want to see how you would structure it!
*/

 

?>
<html>



<head>
<title>This is my homepage!</title>
</head>



<body>
<form>
Show <input name="count" value="30"> fibonacci numbers beginning with <input name="start" value="5">.
<input type="submit">
</form>
<?php if (isset($_GET['count']) && !empty((int)$_GET['count'])) {
$_GET['count'] = (int)$_GET['count'];
?>
<table width="100%" border="1">
<?php for ($i = 1, $j = 0,$k = 0; $_GET['count']-- > 0; $k = $j, $j = $i,$i = $j+$k) {
if ($i >= $_GET['start']) {?>
<td>
<?=$i?>
</td><?php



}
} ?>
</table>
<?php } ?>
</body>
</html>
