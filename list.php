<?php
include("includes/header.php");
?>
<div class="jumbotron clearfix">
  <h1>List Characters</h1>
</div>

<?php $result = mysqli_query($con, "select * from tsh_contacts order by tsh_bname asc"); ?>

<?php while ($row = mysqli_fetch_array($result)) : ?>
  <section class="listbox">
    <h2><?php echo $row["tsh_bname"]; ?></h2>
    &nbsp;
    <?php if ($row["tsh_name"]) : ?>
      <p>Name: <?php echo $row["tsh_name"]; ?></p>
    <?php endif; ?>

    <?php if ($row["tsh_email"]) : ?>
      <p>Email: <a href="mailto:<?php echo $row["tsh_email"]; ?>" target="_blank"><?php echo $row["tsh_email"]; ?></a></p>
    <?php endif; ?>

    <?php if ($row["tsh_website"]) : ?>
      <p>Website: <a href="<?php echo $row["tsh_website"]; ?>" target="_blank"><?php echo $row["tsh_website"]; ?></a></p>
    <?php endif; ?>

    <?php if ($row["tsh_phone"]) : ?>
      <p>Phone: <?php echo $row["tsh_phone"]; ?></p>
    <?php endif; ?>

    <?php if ($row["tsh_address"]) : ?>
      <p>Address: <?php echo $row["tsh_address"]; ?></p>
    <?php endif; ?>

    <?php if ($row["tsh_city"]) : ?>
      <p>City: <?php echo $row["tsh_city"]; ?></p>
    <?php endif; ?>

    <?php if ($row["tsh_province"]) : ?>
      <p>Province: <?php echo $row["tsh_province"]; ?></p>
    <?php endif; ?>

    <?php if ($row["tsh_description"]) : ?>
      <p>Description: <?php echo $row["tsh_description"]; ?></p>
    <?php endif; ?>

    <?php if ($row["tsh_resume"]) : ?>
      <p>Resume: Sent Resume</p>
    <?php endif; ?>
  </section>
<?php endwhile; ?>

<?php
include("includes/footer.php");
?>