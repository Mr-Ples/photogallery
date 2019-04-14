<?php


if (isset($_GET['file'])){
  require('connection.php');

  $str = $_GET['file'];
  $dirname = '../Images/'.$str.'';

  //array_map('unlink', glob("$dirname/*.*"));
  unlink($dirname);

  $sql = "DELETE FROM photo_index WHERE Name='$str'";

  if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
    header("location: ../admin_page.php?removed=success");
  } else {
     echo "Error deleting record: " . $conn->error;
     header("location: ../admin_page.php?removed=failed");
  }
}
 ?>
