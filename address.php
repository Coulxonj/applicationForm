<?php include 'functions.php';?>
<html>
<head>
	<title>Address information</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
h2{
	color: #FFDEAD;
	background-color: #800000;
	height: 10%;
	text-align: center;
}

</style>
<body>
<div class="header">
	<h2>Current Address</h2>
</div>
<form method="post" action="address.php" enctype="multipart/form-data">
	<div class="input-group">
		<label>postal address</label>
		<input type="text" name="POSTAL_ADDRESS" value="<?php echo $POSTAL_ADDRESS; ?>">
	</div>
	<div class="input-group">
		<label>postal code</label>
        <input type="text" name="POSTAL_CODE" value="<?php echo $POSTAL_CODE; ?>">
	</div>
	<div class="input-group">
		<label>Town</label>
		<input type="text" name="TOWN_NAME" value="<?php echo $TOWN_NAME; ?>">
	</div>
	<div class="input-group">
		<label>Country</label>
		<input type="text" name="COUNTRY_NAME" value="<?php echo $COUNTRY_NAME; ?>">
	</div>
	<div class="input-group">
		<label>Telephone(home)</label>
		<input type="text" name="TELEPHONE_NUMBER" value="<?php echo $TELEPHONE_NUMBER; ?>">
	</div>
	<div class="input-group">
		<label>Mobile number</label>
		<input type="text" name="MOBILE_NUMBER" value="<?php echo $MOBILE_NUMBER; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
        <input type="email" name="LOGIN_EMAIL" value="<?php echo $LOGIN_EMAIL; ?>">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Submit</button>
	</div>
</form>
</body>
</html>