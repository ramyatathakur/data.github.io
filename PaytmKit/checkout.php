<?php

   header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="GENERATOR" content="Evrsoft First Page">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1> Checkout </h1>


    <form method="post" action="./pgRedirect.php">
		<table border="1">
			<tbody>
				
				<tr>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS". rand(10000,99999999)?> " readonly>
					</td>
				</tr>
				<tr>
					<td><label>Email Id</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value=""readonly></td>
				</tr>
				<tr><!------------------
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>--->
					<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
				</tr>
				<tr>
					<!---------<td><label>Channel ::*</label></td>---->
					<input  type="hidden"id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					
				</tr>
				<tr>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="300" readonly>
					</td>
				</tr>
				<tr>
					<td><input value="checkout" type="submit" 	></a></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>