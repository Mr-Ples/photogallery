<?php
 session_start();

if (isset($_POST['file_name']) and $_POST['file_name'] !== '' ){

  require('connection.php');

	$file = $_FILES['file_L'];

  $edit = strip_tags($_POST['file_name']);

	$filename = $_FILES['file_L']['name'];
	$filetmpname = $_FILES['file_L']['tmp_name'];
	$filesize = $_FILES['file_L']['size'];
	$fileerror = $_FILES['file_L']['error'];
	$filetype = $_FILES['file_L']['type'];

	$fileExt = explode('.', $filename);//splits the file extention with the file name
	$fileActualExt = strtolower(end($fileExt)); //turns file extention to lower case

	$allowed = array('jpeg' , 'png' , 'jpg');//this array is all the file extentions that allowed on the server

	if (in_array($fileActualExt, $allowed)){//cheeks if the the extention is right
		if ($fileerror === 0){//cheeks if there was a error uploading
			if ($filesize < 50000000){ //this sets th file size
				$fileNameNew =  $edit . "." .$fileActualExt;//creates a unique name for the file
				$fileDestination = '../images/'.$fileNameNew;//the destination it will be saved to

      $edit = strip_tags($_POST['file_name']. "." .$fileActualExt);

        $sql = "INSERT INTO photo_index(Name)
        VALUES ('$edit')";

        if ($conn->query($sql) === TRUE) {
            echo'complete';
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
           header("location: ../admin_page.php?upload=sql error");
           exit();
         }


				move_uploaded_file($filetmpname, $fileDestination);//this uploads iy
				header("location: ../admin_page.php?upload=success");
			}
			else {
				echo "file was to big";
        header("location: ../admin_page.php?upload=to big");
			}
		}
		else {
			echo " there was an error uploading the file ";
      header("location: ../admin_page.php?upload=fail");
		}
	}
	else {
		echo "you cannot upload files of this type";
    header("location: ../admin_page.php?upload=incorrect type");
	}

}
else {
    header("location: ../admin_page.php?upload=fail");
}

?>
