<?php

include('./dbcon.php');

if (isset($_POST['add_student'])) {
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $age = $_POST['age'];

  if ($f_name == "" || empty($f_name)) {
    header('location:index.php?message=You need to fill in the first name!');
  } else if ($l_name == "" || empty($l_name)) {
    header('location:index.php?message=You need to fill in the last name!');
  } else if ($age == "" || empty($age)) {
    header('location:index.php?message=You need to fill in the age!');
  } else {
    $query = "insert into `students` (`first_name`, `last_name`, `age`) values ('$f_name', '$l_name', '$age')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Ridi" . mysqli_error($connection));
    } else {
      header('location:index.php?insert_msg=Your data has been added successfully!');
    }
  }
}
