
<?php 
  include("connect/connection.php");


if (isset($_FILES['fileToUpload'])) {
  



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {

    header("Location:blog-list.php");
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            header("Location: https://mirzanuhash.xyz/personal/loginForm/blog/blog-list.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


if(isset($_POST['submit'])){

  $title=$_POST['title'];
  $description=$_POST['description'];
  $fileToUpload=$_FILES['fileToUpload'];

$sql="INSERT INTO `product`(`title`, `description`, `image_name`) VALUES ('$title','$description','$target_file')";

  $result=mysqli_query($con,$sql);
  if($result==true){
     header("Location:blog-list.php");
    //echo "Insert Sucess";
  }else{
    echo "Problem when inserting";
  }

}










}


?>





<!DOCTYPE html>
<html>

<head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">



<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


    
</head>

<body>

<h3>Write Your Post</h3>

<div>
  <form action="" method="post" enctype="multipart/form-data">
    <label >Title</label>
    <input type="text" name="title" placeholder="Your name..">

    <label >Description</label><br>

    <textarea class="tinymce" rows="20" cols="163" type="text" name="description"></textarea> <br>

    <!-- <input type="text" id="lname" name="description" placeholder="Your last name.."> -->

    <label for="lname">Insert image</label><br>
    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="POST THE BLOG" name="submit">
  </form>
</div>


            <!-- Added JS Files -->

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="plugin/tinymce/tinymce.min.js"></script>
  <script src="plugin/tinymce/init-tinymce.js"></script>
  <script src="assets/js/main.js"></script>


</body>


</html>