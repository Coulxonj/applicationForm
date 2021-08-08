<?php include 'functions.php';?>
<html>
<head>
	<title>Education information</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
h2{
	color: #FFDEAD;
	background-color: #800000;
}

</style>
<body>
<div class="header">
	<h2>Education information</h2>
</div>
<form method="post" action="education.php" enctype="multipart/form-data">
	<div class="input-group">
		<label>Years of formal education in English</label>
		<input type="text" name="FORMAL_EDUCATION" value="<?php echo $FORMAL_EDUCATION; ?>">
	</div>
	<div class="input-group">
		<label>Highest level of education</label>
		<input type="checkbox" name="primary" id="primary_level" value="primary" />
        <label for="primary_level">Primary</label>
        <input type="checkbox" name="secondary" id="secondary_level" value="secondary" />
        <label for="secondary_level">Secondary</label>
        <input type="checkbox" name="diploma" id="diploma_level" value="diploma" />
        <label for="diploma_level">Diploma</label>
        <input type="checkbox" name="undergraduate" id="undergraduate_level" value="undergraduate" />
        <label for="undergraduate_level">Undergraduate</label>
        <input type="checkbox" name="postgraduate" id="postgraduate_level" value="postgraduate" />
        <label for="postgraduate_level">Postgraduate</label>
	</div>
	<div class="input-group">
		<label>If others,specify</label>
		<input type="text" name="OTHERS_SPOKEN" value="<?php echo $OTHERS_SPOKEN; ?>">
	</div>
	<div class="input-group">
		<label>Other languages spoken or written</label>
		<input type="text" name="LANGUAGE_SPOKEN" value="<?php echo $LANGUAGE_SPOKEN; ?>">
	</div>
	<div class="input-group">
		<label>Do you have any disability</label>
		<input type="checkbox" name="Yes" id="yes_no" value="Yes" />
        <label for="yes_no">Yes</label>
        <input type="checkbox" name="No" id="yes_no" value="No" />
        <label for="yes_no">No</label>
    </div>
    <div class="input-next"> 	
	<a href="address.php"><input type="next" name="next" value="Next"></a>
</div>
</form>
</body>
</html>