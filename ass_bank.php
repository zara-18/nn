<?php
if(isset($_POST['submit'])) {
	if(!empty($_POST['credit'])){
	$deposit=$_POST['credit']+$_POST["dcredit"];
    $deposit=$deposit-($_POST["wdraw"]);
	if($deposit>=($_POST["wdraw"])){
	 echo "balance" . " " . $deposit;
     $dcredit=$deposit;
	}
	else
	{
		echo "you dont have this much money";
	}
}
if(empty($_POST['credit'])){
	$deposit=$_POST["dcredit"];
    $deposit=$deposit-($_POST["wdraw"]);
	if($deposit>=($_POST["wdraw"])){
	 echo "balance" . " " . $deposit;
     $dcredit=$deposit;
	}
	else
	{
		echo "you dont have this much money";
	}
	 

}
}
?> 


<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<p><span class="error">* required field</span></p>
<form method="post" action="">
Credit:<br>
<input type="number" name="credit" value="<?php echo $credit;?>">
<br>
Withdraw:<br>
<input type="number" name="wdraw" value="<?php echo $wdraw;?>">
<br>
<input type="hidden" name="dcredit" value="<?php echo $dcredit; ?>">
<br>
<div><input class="submit" name="submit" type="submit" value="Submit"></div>
<br>

</form>
</body>
</html>