<?php include 'functions.php';?>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
h2{
	color: #FFDEAD;
	background-color: #800000;
	height: 10%;
	text-align: center;
}
button{

	color: #FFDEAD;
	background: #800000;
	text-align: center;
}
</style>
<body>
<div class="header">
	<h2>Personal information</h2>
</div>
<form method="post" action="register.php" enctype="multipart/form-data">
	<div class="input-group">
		<label>Firstname</label>
		<input type="text" name="FIRST_NAME" value="<?php echo $FIRST_NAME; ?>">
	</div>
	<div class="input-group">
		<label>Middlename</label>
		<input type="text" name="MIDLE_NAME" value="<?php echo $MIDDLE_NAME; ?>">
	</div>
	<div class="input-group">
		<label>lastname</label>
		<input type="text" name="LAST_NAME" value="<?php echo $LAST_NAME; ?>">
	</div>
	<div class="input-group">
		<label>Gender</label>
		<input type="radio" name="Gender" id="gender_male" value="male" />
<label for="contact_email">Male</label>
<input type="radio" name="Gender" id="gender_female" value="female" />
<label for="contact_phone">Female</label
	</div>
	<div class="input-group">
		<label>D.O.B</label>
		<input type="date" id="date" name="PERSONAL_DOB" value="<?php echo $PERSONAL_DOB; ?>">
	</div>
	<div class="input-group">
		<label>ID/passport no</label>
		<input type="text" name="PASSPORT_NUMBER" value="<?php echo $PASSPORT_NUMBER; ?>">
	</div>
	<div class="input-group">
		<label>Citizenship</label>
		<input type="text" name="COUNTRY_NAME" value="<?php echo $COUNTRY_NAME; ?>">
	</div>
	<div class="input-group">
		<label>Religious afiliation</label>
		<input type="radio" name="protestant" id="religion_protestant" value="Protestant" />
        <label for="religion_protestant">Protestant</label>
      <input type="radio" name="roman catholic" id="religion_catholic" value="Catholic" />
<label for="religion_catholic">Catholic</label
	</div>
	<input type="radio" name="Hindu" id="religion_hindu" value="Hindu" />
<label for="religion_hindu">Hindu</label
	</div>
	<input type="radio" name="Muslim" id="religion_muslim" value="muslim" />
<label for="religion_muslim">Muslim</label
	</div>
	<input type="radio" name="others" id="religion_others" value="others" />
<label for="religion_others">Others</label
	</div>
	<div class="button">
	<a href="education.php"><input type="next" name="next" value="Next"></a>
</div>
</form>
</body>
</html>