<?php
include('dbcon.php');

if (isset($_POST['update_student'])) {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $age = $_POST['age'];

  if ($f_name == "" || empty($f_name)) {
    header('location:update_page_1.php?message=You need to fill in the first name!');
  } else if ($l_name == "" || empty($l_name)) {
    header('location:update_page_1.php?message=You need to fill in the last name!');
  } else if ($age == "" || empty($age)) {
    header('location:update_page_1.php?message=You need to fill in the age!');
  } else {
    $query = "update `students` set `first_name` = '$f_name', `last_name` = '$l_name', `age` = '$age' where `id` = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Ridi" . mysqli_error($connection));
    } else {
      header('location:index.php?update_msg=Your data has been updated successfully!');
    }
  }
}
