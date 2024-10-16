<?php

include('dbcon.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "delete from `students` where `id` = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Ridi" . mysqli_error($connection));
  } else {
    header('location:index.php?delete_msg=Your data has been deleted successfully!');
  }
}