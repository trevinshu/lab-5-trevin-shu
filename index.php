<?php

include("includes/header.php");

?>

<div class="jumbotron clearfix">
  <h1><?php echo APP_NAME ?></h1>
</div>

<?php $result = mysqli_query($con, "select * from tsh_contacts order by tsh_bname asc"); ?>

<?php while ($row = mysqli_fetch_array($result)) : ?>
  <section class="listbox">
    <h2><?php echo $row['tsh_bname']; ?></h2>
    <a href="companyprofile.php?id=<?php echo $row['id'] ?>">More Info</a>
  </section>
<?php endwhile; ?>


<?php
include("includes/footer.php");
?>