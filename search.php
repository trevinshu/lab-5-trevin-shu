<?php
include("includes/header.php");
?>

<div class="jumbotron clearfix">
  <h1>Search Contacts</h1>
</div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="searchterm" class="form-control">
  <br>
  <input type="submit" name="mysubmit" value="Search" class="btn btn-primary">
</form>
<br>
<?php

if (isset($_POST['mysubmit'])) {

  $searchterm = mysqli_real_escape_string($con, $_POST['searchterm']);

  $sql = "SELECT * FROM tsh_contacts WHERE MATCH (tsh_bname, tsh_name, tsh_email, tsh_website, tsh_phone, tsh_address, tsh_city, tsh_province, tsh_description) 
  AGAINST ('$searchterm' IN BOOLEAN MODE)";

  echo "<div class=\"alert alert-primary\">";
  echo "<p><b>Search Results For: $searchterm</b></p>";
  echo "</div>";
  $result = mysqli_query($con, $sql) or die(mysqli_error($con));

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      $bname = $row['tsh_bname'];
      $name = $row['tsh_name'];
      $email = $row['tsh_email'];
      $website = $row['tsh_website'];
      $phone = $row['tsh_phone'];
      $address = $row['tsh_address'];
      $city = $row['tsh_city'];
      $province = $row['tsh_province'];
      $description = $row['tsh_description'];

      echo "<div class=\"listbox\">";
      echo "\n<h2>Business Name: $bname</h2>";
      echo "\n<div><b>Contact Name: </b>$name</div>";
      echo "\n<div><b>Email: </b>$email</div>";
      echo "\n<div><b>Website: </b>$website</div>";
      echo "\n<div><b>Phone: </b>$phone</div>";
      echo "\n<div><b>Address: </b>$address</div>";
      echo "\n<div><b>City: </b>$City</div>";
      echo "\n<div><b>Province: </b>$province</div>";
      echo "\n<div><b>Description: </b>$description</div>";
      echo "</div>";
    }
  } else {
    echo "\n<div class=\"alert alert-warning\">No results</div>\n";
  }
}
?>

<?php
include("includes/footer.php");
?>