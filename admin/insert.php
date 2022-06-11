<?php
session_start();
if (isset($_SESSION['auyfgigafa'])) {
} else {
	header("Location: login.php");
}
?>

<?php
include("../includes/header.php");

if (isset($_POST['submit'])) {
	$bname = trim($_POST['bname']);
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$website = trim($_POST['website']);
	$phone = trim($_POST['phone']);
	$address = trim($_POST['address']);
	$city = trim($_POST['city']);
	$province = ($_POST['province']);
	$description = trim($_POST['description']);
	$resume = $_POST['resume'];

	$valid = 1;
	$msgPreError = "\n<div class=\"alert alert-danger\" role=\"alert\">";
	$msgPreSuccess = "\n<div class=\"alert alert-primary\" role=\"alert\">";
	$msgPost = "\n</div>";

	if ((strlen($bname) < 2) || (strlen($bname) > 100)) {
		$valid = 0;
		$valBNameMsg .= "Please enter a business name between 2 to 100 characters.";
	}

	if ($name != "") {
		if ((strlen($name) < 2) || (strlen($name) > 50)) {
			$valid = 0;
			$valNameMsg .= "Please enter a name between 2 to 50 characters.";
		}
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$valid = 0;
		$valEmailMsg .= "\nPlease enter a valid email address. Ex: name@mail.com";
	}

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	if (!filter_var($website, FILTER_VALIDATE_URL)) {
		$valid = 0;
		$valWebsiteMsg .= "Please enter a valid URL. Ex: https://website.com";
	}

	$website = filter_var($website, FILTER_SANITIZE_URL);

	if ((strlen($phone) < 10) || (strlen($phone) > 10)) {
		$valid = 0;
		$valPhoneMsg .= "\nPlease enter a phone number that is ten digits long. Ex: 1234567890";
	}

	if ($address != "") {
		if ((strlen($address) < 5) || (strlen($address) > 200)) {
			$valid = 0;
			$valAddressMsg .= "Please enter an address that is greater than 5 characters & less than 200 characters.";
		}
	}

	if ($city != "") {
		if ((strlen($city) < 2) || (strlen($city) > 100)) {
			$valid = 0;
			$valCityMsg .= "Please enter a City that is greater than 2 characters & less than 100 characters.";
		}
	}

	if ($description != "") {
		if ((strlen($description) < 2) || (strlen($description) > 200)) {
			$valid = 0;
			$valDescriptionMsg .= "Please enter a description that is greater than 2 characters & less than or equal to 200 characters.";
		}
	}

	if ($valid == 1) {
		mysqli_query($con, "insert into tsh_contacts(tsh_bname, tsh_name, tsh_email, tsh_website, tsh_phone,tsh_address, tsh_city, tsh_province, tsh_description,
		tsh_resume) values('$bname', '$name','$email', '$website', '$phone', '$address', '$city', '$province', '$description', '$resume')") or die(mysqli_error($con));
		$msgSuccess = "Success. A new contact has been added.";

		$bname = "";
		$name = "";
		$email = "";
		$website = "";
		$phone = "";
		$address = "";
		$city = "";
		$province = "";
		$description = "";
		$resume = "";
	}
}
?>
<h2>Insert</h2>
<?php
if ($msgSuccess) {
	echo $msgPreSuccess . $msgSuccess . $msgPost;
}
?>
<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<div class="form-group">
		<label for="bname">Company Name:</label>
		<input type="text" name="bname" class="form-control" value="<?php echo $bname ?>">
		<?php
		if ($valBNameMsg) {
			echo $msgPreError . $valBNameMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="name">Contact Name:</label>
		<input type="text" name="name" class="form-control" value="<?php echo $name ?>">
		<?php
		if ($valNameMsg) {
			echo $msgPreError . $valNameMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" name="email" class="form-control" value="<?php echo $email ?>">
		<?php
		if ($valEmailMsg) {
			echo $msgPreError . $valEmailMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="website">Website:</label>
		<input type="text" name="website" class="form-control" value="<?php echo $website ?>">
		<?php
		if ($valWebsiteMsg) {
			echo $msgPreError . $valWebsiteMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="phone">Phone Number:</label>
		<input type="text" name="phone" class="form-control" value="<?php echo $phone ?>">
		<?php
		if ($valPhoneMsg) {
			echo $msgPreError . $valPhoneMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="address">Address:</label>
		<input type="text" name="address" class="form-control" value="<?php echo $address ?>">
		<?php
		if ($valAddressMsg) {
			echo $msgPreError . $valAddressMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="city">City:</label>
		<input type="text" name="city" class="form-control" value="<?php echo $city ?>">
		<?php
		if ($valCityMsg) {
			echo $msgPreError . $valCityMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<label for="province">Province:</label>
		<select name="province" class="form-control">
			<option value="">
				<---Select A Province--->
			</option>
			<option value="AB" <?php if (isset($province) && $province == "AB") {
									echo "selected";
								} ?>>Alberta</option>
			<option value="BC" <?php if (isset($province) && $province == "BC") {
									echo "selected";
								} ?>>British Columbia</option>
			<option value="MB" <?php if (isset($province) && $province == "MB") {
									echo "selected";
								} ?>>Manitoba</option>
			<option value="NB" <?php if (isset($province) && $province == "NB") {
									echo "selected";
								} ?>>New Brunswick</option>
			<option value="NL" <?php if (isset($province) && $province == "NL") {
									echo "selected";
								} ?>>Newfoundland and Labrador</option>
			<option value="NS" <?php if (isset($province) && $province == "NS") {
									echo "selected";
								} ?>>Nova Scotia</option>
			<option value="ON" <?php if (isset($province) && $province == "ON") {
									echo "selected";
								} ?>>Ontario</option>
			<option value="PE" <?php if (isset($province) && $province == "PE") {
									echo "selected";
								} ?>>Prince Edward Island</option>
			<option value="QC" <?php if (isset($province) && $province == "QC") {
									echo "selected";
								} ?>>Quebec</option>
			<option value="SK" <?php if (isset($province) && $province == "SK") {
									echo "selected";
								} ?>>Saskatchewan</option>
			<option value="NT" <?php if (isset($province) && $province == "NT") {
									echo "selected";
								} ?>>Northwest Territories</option>
			<option value="NU" <?php if (isset($province) && $province == "NU") {
									echo "selected";
								} ?>>Nunavut</option>
			<option value="YT" <?php if (isset($province) && $province == "YT") {
									echo "selected";
								} ?>>Yukon</option>
		</select>
		<?php
		if ($valProvinceMsg) {
			echo $msgPreError . $valProvinceMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-group">
		<textarea name="description" id="" cols="30" rows="10" class="form-control"><?php if ($description) {
																						echo $description;
																					} ?></textarea>
		<?php
		if ($valDescriptionMsg) {
			echo $msgPreError . $valDescriptionMsg . $msgPost;
		}
		?>
	</div>
	<div class="form-check">
		<label for="resume" class="form-check-label">
			<input type="checkbox" class="form-check-input" name="resume" value="1" <?php if (isset($resume) && $resume == 1) {
																						echo "checked";
																					} ?>>Send Resume </label>
	</div> <br>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-info" value="Submit">
	</div>


</form>
<?php
include("../includes/footer.php");
?>