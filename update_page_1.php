<?php include('header.php') ?>
<?php include('dbcon.php') ?>
<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "select * from `students` where `id` = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Ridi" . mysqli_error($connection));
  } else {
    $student = mysqli_fetch_assoc($result);
  }
}
?>


<form action="update_page_2.php?id=<?php echo $id; ?>" method="post">
  <div class="form-group">
    <label for="f_name">First Name</label>
    <input type="text" name="f_name" class="form-control" value="<?php echo $student['first_name']; ?>">
  </div>
  <div class="form-group">
    <label for="l_name">Last Name</label>
    <input type="text" name="l_name" class="form-control" value="<?php echo $student['last_name']; ?>">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" value="<?php echo $student['age']; ?>">
  </div>
  <input type="submit" class="btn btn-success" name="update_student" value="Save">
</form>


<?php
if (isset($_GET['message'])) {
  echo "<h6 class='error'>" . $_GET['message'] . "</h6>";
}
?>



<?php include('footer.php') ?>