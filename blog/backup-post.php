
<?php 
  include("connect/connection.php");

  if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="INSERT INTO `product`(`title`, `description`, `image_name`) VALUES ('$title','$description','')";
    $result=mysqli_query($con,$sql);


    if ($result==true) {
      header("Location:blog-list.php");
    }else{
      echo "Problem When Inserting";
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